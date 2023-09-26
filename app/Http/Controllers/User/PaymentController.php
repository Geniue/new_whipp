<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


//MODELS
use App\Models\CardsModel;
use App\Models\StripeInvoicesModel;


//SERVICES
use App\Services\StripeService;

//MAILABLE
use App\Mail\InvoiceEmail;

class PaymentController extends Controller
{

    function __construct(StripeService $service)
    {
        $this->service = $service;
    }

    public function index_store_cards()
    {
        $user = auth()->user();
        $paymentMethods = $user->stripe_id ? $user->paymentMethods() : [];
        
        return view('user.app.store_cards', ['paymentMethods' => $paymentMethods, 'user'=> $user]);
    }

    public function storeCard(Request $request)
    {
        // Validate the request
        $request->validate([
            'stripePaymentMethod' => 'required|string',
        ]);

        $token = $request->get('stripePaymentMethod');
        $user = auth()->user();

        try {
            // If the user doesn't have a Stripe ID, create a new Stripe customer
            if (!$user->stripe_id) {
                $user->createAsStripeCustomer();
            }

            // Add the new card to Stripe (this won't set it as default)
            $paymentMethod = $user->addPaymentMethod($token);

            // Save card details to the cards table
            CardsModel::create([
                'user_id' => $user->id,
                'stripe_id' => $paymentMethod->id,
                'pm_type' => $paymentMethod->card->brand,
                'pm_last_four' => $paymentMethod->card->last4
            ]);

        } catch (\Stripe\Exception\CardException $e) {
            // Handle the exception for card errors
            dd("stripe exception", $e);
            return back()->withErrors('Error with the card: ' . $e->getError()->message);
        } catch (\Exception $e) {
            dd("normal exception", $e);
            // Handle other possible exceptions
            return back()->withErrors('There was an error processing your card. Please try again.');
        }

        return back()->with('success', 'Card added successfully!');
    }



    public function setDefaultCard(Request $request)
    {
        $request->validate([
            'paymentMethod' => 'required|string',  // This will be the Stripe ID of the card
        ]);

        $user = auth()->user();

        try {
            // Set the given card as default
            $user->updateDefaultPaymentMethod($request->paymentMethod);

            return back()->with('success', 'Card set as default successfully!');
        } catch (\Stripe\Exception\CardException $e) {
            return back()->withErrors('Error with the card: ' . $e->getError()->message);
        } catch (\Exception $e) {
            return back()->withErrors('There was an error setting the card as default. Please try again.');
        }
    }


    public function showPaymentPage($slug) {
        $user = auth()->user();

        // Retrieve unpaid invoices
        $invoice = StripeInvoicesModel::where('uniqId', $slug)->get()[0] ?? abort(404); // This depends on your implementation

        // Retrieve saved payment methods
        $paymentMethods = $user->paymentMethods(); // Assuming you save the Stripe customer ID on the user model

        $defaultPaymentMethod = $user->defaultPaymentMethod();
        // dd($invoice->stripe_price, $invoice->stripe_invoice);

        $plan = $invoice->stripe_price;
        $invoice = $invoice->stripe_invoice;

        $invoiceDetails = $plan['product'];
        $plan = $plan['price'];

        return view('user.app.pay', ['invoice' => $invoice, 'paymentMethods' => $paymentMethods, 'defaultPaymentMethod' => $defaultPaymentMethod, 'invoiceDetails' => $invoiceDetails, 'plan' => $plan]);
    }



    public function payInvoice(Request $request, $slug) {
        $paymentMethodId = $request->input('payment_method');
        $invoice = StripeInvoicesModel::where('uniqId', $slug)->get()[0] ?? abort(404); // This depends on your implementation
        $invoiceId = $invoice->invoice_id;
        $service = $this->service;

        try {
            $inv = $service->payInvoiceWithPaymentMethod($invoiceId, $paymentMethodId);
            $invoice_url = $inv->hosted_invoice_url;


            Mail::to(auth()->user()->email)->send(new InvoiceEmail($invoice_url, $invoice->stripe_price['product']->name));
            return redirect()->route('user.products')->with('success', 'Invoice paid successfully!');
        } catch (Stripe\Exception\CardException $e) {
            $body = $e->getJsonBody();
            $err  = $body['error'];
            return redirect()->back()->withErrors(['payment' => "Card error: " . $err['message']]);
        } catch (Stripe\Exception\RateLimitException $e) {
            return redirect()->back()->withErrors(['payment' => 'Rate limit exceeded. Please try again later.']);
        } catch (Stripe\Exception\InvalidRequestException $e) {
            return redirect()->back()->withErrors(['payment' => 'Invalid request. Please contact support.']);
        } catch (Stripe\Exception\AuthenticationException $e) {
            return redirect()->back()->withErrors(['payment' => 'Authentication with payment gateway failed. Please contact support.']);
        } catch (Stripe\Exception\ApiConnectionException $e) {
            return redirect()->back()->withErrors(['payment' => 'Network error. Please try again later.']);
        } catch (Stripe\Exception\ApiErrorException $e) {
            // Log this error for inspection and debugging
            Log::error('Stripe API error: ' . $e->getMessage());
            return redirect()->back()->withErrors(['payment' => 'Payment gateway error. Please try again later.']);
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Catch any other errors
            \Log::error('General error when trying to pay invoice: ' . $e->getMessage());
            return redirect()->back()->withErrors(['payment' => 'An error occurred. Please try again later.']);
        }
    }




}
