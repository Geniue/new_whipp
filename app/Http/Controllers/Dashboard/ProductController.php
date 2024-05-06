<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;

//MODELS
use App\Models\ProductsModel;
use App\Models\User;
use App\Models\StripeInvoicesModel;
use App\Models\InvitedUsersModel;

//SERVICES
use App\Services\StripeService;


//MAILABLE
use App\Mail\SendProductEmail;

class ProductController extends Controller
{

    function __construct(StripeService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        
        $user = auth()->user();

        $products = ProductsModel::get();

        // dd($this->service->retrieve_product($products->product_id));

        $service = $this->service;

        return view('dashboard.products.index', compact('user', 'products', 'service'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'price' => 'required',
            'interval' => 'required|in:week,month,year,one_time',
        ]);

        // dd($data);

        $product = $this->service->create_product($data['name'], $data['description']);

        if ($data['interval'] == 'one_time') {
            $this->service->create_price_for_product($product->id, $data['price']);
        } else {
            $this->service->create_price_for_product($product->id, $data['price'], 'usd', ['interval' => $data['interval']]);
        }

        

        


        ProductsModel::create([
            'product_id' => $product->id
        ]);

        return redirect()->back();
    }



    public function add_plan(Request $request, $id)
    {

        $data = $request->validate([
            'price' => 'required',
            'interval' => 'required|in:week,month,year,one_time',
        ]);


        $product = ProductsModel::where('id', $id)->get()[0] ?? abort(404);

        if ($data['interval'] == 'one_time') {
            $this->service->create_price_for_product($product->product_id, $data['price']);
        } else {
            $this->service->create_price_for_product($product->product_id, $data['price'], 'usd', ['interval' => $data['interval']]);
        }

        return redirect()->back();
    }



    public function view_plan($id)
    {
        $user = auth()->user();

        $product = ProductsModel::where('id', $id)->get()[0] ?? abort(404);

        $data = $this->service->retrieve_product($product->product_id);


        // dd($data);

        return view('dashboard.products.product', compact('user', 'data'));
    }


    public function create_existing_user_invoice($slug)
    {
        // dd($slug);
        $user = auth()->user();
        $data = $this->service->retrieveProductFromPrice($slug);

        $users = User::where('role', 'user')->get();
        // dd($product);

        return view('dashboard.products.create_invoice', compact('user', 'data', 'users'));
    }


    public function send_invoice(Request $request, $slug)
    {
        $data = $request->validate([
            'customer' => [
                'required',
                Rule::exists('users', 'id')->where(function ($query) {
                    $query->where('role', 'user');
                })
            ]
        ], [
            'customer.required' => 'Please provide a required customer',
            'customer.exists' => 'The selected customer is invalid or does not exist in our databases.'
        ]);
        // dd($user);

        $user = User::where('id', $data['customer'])->get()[0];

        $price = $this->service->retrieveProductFromPrice($slug)['price'];

        if ($price->recurring) {
            $subscription = $this->service->createSubscription($user->stripe_id, $slug);
            // Get the latest invoice ID from the subscription
            $latestInvoiceId = $subscription->latest_invoice;
            $invoice = $this->service->retrieveInvoice($latestInvoiceId);
            // Get the hosted invoice URL
            $hostedInvoiceUrl = $invoice->hosted_invoice_url;

            $inv = StripeInvoicesModel::create([
                "uniqId" => uniqid(),
                "invoice_id" => $invoice->id,
                "user_id" => $user->id,
                "stripe_id" => $slug,
                "sub_id" => $subscription->id,
            ]);

        } else {
            $invoice = $this->service->createInvoice($user->stripe_id, $slug);

            // dd($invoice->hosted_invoice_url);


            $inv = StripeInvoicesModel::create([
                "uniqId" => uniqid(),
                "invoice_id" => $invoice->id,
                "user_id" => $user->id,
                "stripe_id" => $slug
            ]);
        }


        $url = env("APP_URL") . "/customer/cards/products/pay/" . $inv->uniqId;
        $name = $inv->stripe_price['product']->name;
        Mail::to($inv->user->email)->send(new InvoiceEmail($url, $name));

        return redirect()->route('invoice.url', $inv->uniqId);
    }


    public function create_inv_user_invoice($slug)
    {
        // dd($slug);
        $user = auth()->user();
        $data = $this->service->retrieveProductFromPrice($slug);

        $users = InvitedUsersModel::whereNull('user_id')->get();
        // dd($product);

        return view('dashboard.products.create_invoice_inv', compact('user', 'data', 'users'));
    }

    public function send_invoice_inv(Request $request, $slug)
    {
        $data = $request->validate([
            'customer' => [
                'required',
                Rule::exists('invited_users', 'id')->where(function ($query) {
                    $query->whereNull('user_id');
                })
            ]
        ], [
            'customer.required' => 'Please provide a required customer',
            'customer.exists' => 'The selected customer is invalid or does not exist in our databases.'
        ]);


        $user = InvitedUsersModel::where('id', $data['customer'])->get()[0];

        $price = $this->service->retrieveProductFromPrice($slug)['price'];

        if ($price->recurring) {
            $subscription = $this->service->createSubscription($user->stripe_id, $slug);
            // Get the latest invoice ID from the subscription
            $latestInvoiceId = $subscription->latest_invoice;
            $invoice = $this->service->retrieveInvoice($latestInvoiceId);
            // Get the hosted invoice URL
            $hostedInvoiceUrl = $invoice->hosted_invoice_url;

            $inv = StripeInvoicesModel::create([
                "uniqId" => uniqid(),
                "invoice_id" => $invoice->id,
                "inv_user_id" => $user->id,
                "stripe_id" => $slug,
                "sub_id" => $subscription->id,
            ]);

        } else {
            $invoice = $this->service->createInvoice($user->stripe_id, $slug);

            // dd($invoice->hosted_invoice_url);


            $inv = StripeInvoicesModel::create([
                "uniqId" => uniqid(),
                "invoice_id" => $invoice->id,
                "inv_user_id" => $user->id,
                "stripe_id" => $slug
            ]);
        }

        // Mail::to($inv->user->email)->send(new SendProductEmail($inv->uniqId));

        return redirect()->route('invoice.url', $inv->uniqId);
    }



    public function invoice($slug)
    {
        $invoice = StripeInvoicesModel::where('uniqId', $slug)->get()[0] ?? abort(404);
            
        $user = $invoice->user ?? $invoice->inv_user;


        $data = $this->service->retrieveProductFromPrice($invoice->stripe_id);

        $invoice = $this->service->retrieveInvoice($invoice->invoice_id);
        $invoiceStatus = $invoice->status;
        $hostedInvoiceUrl = $invoice->hosted_invoice_url;


        return view('invoices.index', compact('data', 'invoiceStatus', 'hostedInvoiceUrl', 'user'));
    }






}
