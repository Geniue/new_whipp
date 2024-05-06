<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Mail;


use App\Models\WorkModel;
use App\Models\FilesModel;
use App\Models\User;
use App\Models\StripeInvoicesModel;

//SERVICES
use App\Services\StripeService;


//MAILABLE
use App\Mail\SendProductEmail;

class WorkController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(StripeService $service)
    {
        $this->service = $service;
    }


    public function upload($id)
    {



        $user = auth()->user();


        return view('dashboard.user.upload', compact('user', 'id'));


    }

    public function index(Request $request, $id)
    {
        $user = User::where('id', $id)->get()[0] ?? abort(404);




        // Get all invoices
        $invoices = $user->invoices; // collect($user->invoicesIncludingPending());

        // dd($this->service->checkSubscriptionStatus($user->invoices[1]->sub_id));
        $invoices = $invoices->map(function ($invoice) {
            
            $inv = $invoice->stripe_invoice; // This will use your accessor

            $plan = $invoice->stripe_price; // This will use your accessor
            // dd($plan);
            

            $invoice->productName = $plan['product']->name;
            $invoice->productDescription = $plan['product']->description;
            $invoice->type = $plan['price']->type == 'recurring' ? $plan['price']->recurring->interval : $plan['price']->type;
            $invoice->inv_stat = $inv->status;
            $invoice->hosted_invoice_url = $inv->hosted_invoice_url;
            $invoice->unit_amount = $plan['price']->unit_amount;

            return $invoice;
        });
        // dd($invoices);
        // Apply Date Filter
        if ($request->has('from_date')) {
            $invoices = $invoices->filter(function ($invoice) use ($request) {
                return strtotime($invoice->created_at->format('Y-m-d')) >= strtotime($request->from_date);
            });
        }

        if ($request->has('to_date')) {
            $invoices = $invoices->filter(function ($invoice) use ($request) {
                return strtotime($invoice->created_at->format('Y-m-d')) <= strtotime($request->to_date);
            });
        }

        // Apply Search
        if ($request->has('search')) {
            $invoices = $invoices->filter(function ($invoice) use ($request) {
                // dd($invoice);
                return strpos($invoice->productName, $request->search) !== false || strpos($invoice->productDescription, $request->search) !== false;
            });
        }





        $perPage = 4;
        $currentPage = $request->get('page', 1);
        $offset = ($currentPage - 1) * $perPage;

        // Use the slice method on the collection
        $currentInvoices = $invoices->slice($offset, $perPage)->values();

        // Create a custom paginator
        $invoices = new LengthAwarePaginator(
            $currentInvoices,
            $invoices->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        // dd($invoices);

        $service = $this->service;




        $user = auth()->user();
        return view('dashboard.user.sub_work', compact('invoices', 'service', 'user'));
    }

    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'files.*' => 'required|file|mimes:jpeg,png,jpg,doc,pdf,txt,docx,gif,rar,zip',
        ]);

        // dd($validatedData);

        $inv = StripeInvoicesModel::where('uniqId', $id)->get()[0] ?? abort(404);


        $user_id = $inv->user_id;
        $invoice_id = $inv->id;

        $work = new WorkModel();
        $work->title = $validatedData['title'];
        $work->description = $validatedData['description'];
        $work->user_id = $user_id; // assigning the user_id
        $work->invoice_id = $invoice_id; // assigning the invoice_id
        $work->save();

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('public/uploads');

                $fileModel = new FilesModel();
                $fileModel->file = $path;
                $fileModel->work_id = $work->id;
                $fileModel->save();
            }
        }


        Mail::to($inv->user->email)->send(new SendProductEmail($inv->uniqId));

        return redirect()->route('user.downloads', $work->user_id)->with('success', 'Work saved successfully!');
    }


    public function view_work($id)
    {
        $user = auth()->user();
        
        $work = WorkModel::where('id', $id)->get()[0] ?? abort(404);

        $files = $work->files;

        return view('dashboard.user.work', compact('user', 'files', 'work'));
    }


    public function listDownloads($id)
    {
        $user = auth()->user();
        // dd($id);

        $work = WorkModel::where('user_id', $id)->orderBy('created_at', 'DESC')->get();
        // dd($id, $work);
        return view('dashboard.user.list_downloads', compact('user', 'work'));

    }
}
