<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

//SERVICES
use App\Services\StripeService;

//MODELS
use App\Models\WorkModel;

class DashboardController extends Controller
{

    function __construct(StripeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {

        return redirect()->route('user.products');
        
        $subs = $this->service->getTitlesOfActiveSubscriptions(auth()->user()->stripe_id);

        return view('user.app.dashboard', compact('subs'));
    }


    public function index_products(Request $request)
    {
        $user = auth()->user();
        

        // dd($user->invoices[0]->stripe_invoice);

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

        return view('user.app.products', compact('invoices', 'service'));
    }


    public function download_page($id)
    {
        $user = auth()->user();

        $work = \App\Models\WorkModel::where('id', $id)->where('user_id', $user->id)->get()[0] ?? abort(404);
        // dd($work);
        $files = $work->files;

        return view('user.app.downloads', compact('user', 'files', 'work'));
    }



    public function view_downloads()
    {
        $user = auth()->user();

        $work = $user->work;

        // dd($work);
        $service = $this->service;

        return view('user.app.work', compact('user', 'work', 'service'));
    }


}
