<?php

namespace App\Services;

use Stripe;


class StripeService {
	function __construct()
	{

		$this->client = new \Stripe\StripeClient(env('STRIPE_SECRET'));

	}



	public function createIntent($amount)
	{

		$amount = $this->calculateOrderAmount([$amount]);
		
		$amountnn = number_format($amount / 100, 2);


		$payme= $this->client->paymentIntents->create([
		  'amount' => $amount,
		  'currency' => 'usd',
		  'payment_method_types' => ['card'],
		]);	

		return [$payme, $amountnn, $amount];
	}




	private function calculateOrderAmount(array $items): int {
	    // $fee = $items[0] * 2.9 / 100 + .3;
		
	    // dd($fee);

		$items[0] = number_format($items[0], 2,".", ""); //number_format($items[0] + $fee, 2);
		


		// dd($items[0]);
	    // Replace this constant with a calculation of the order's amount
	    $items[0] *= 100;
	    
	    // Calculate the order total on the server to prevent
	    // people from directly manipulating the amount on the client


	    dd($items);
	    return $items[0];
	}


	public function create_product($name, $description)
	{
		return $this->client->products->create([
	        'name' => $name,
	        'description' => $description,
	    ]);
	}



	public function create_price_for_product($product_id, $amount, $currency = 'usd', $recurring = null)
	{
		$amount = $this->calculateOrderAmount([$amount]);

		// dd($recurring);

	    $price_data = [
	        'product' => $product_id,
	        'unit_amount' => $amount,
	        'currency' => $currency,
	    ];

	    if ($recurring) {
	        $price_data['recurring'] = $recurring;
	    }

	    return $this->client->prices->create($price_data);
	}


	public function retrieve_product($product_id)
	{
	    // Retrieve the product
	    $product = $this->client->products->retrieve($product_id, []);

	    // List the prices associated with the product
	    $prices = $this->client->prices->all(['product' => $product_id]);

	    // Combine the product and its prices
	    $product_with_price = [
	        'product' => $product,
	        'prices' => $prices->data,
	    ];

	    return $product_with_price;
	}


	/**
     * Create an invoice for a customer and a product.
     *
     * @param string $customerId
     * @param string $priceId
     * @return \Stripe\Invoice
     */
    public function createInvoice($customerId, $priceId) {
        // Add an invoice item for the price to the customer.
        $this->client->invoiceItems->create([
            'customer' => $customerId,
            'price' => $priceId,
        ]);

        // Create an invoice for the customer.
        $invoice = $this->client->invoices->create([
            'customer' => $customerId,
            'auto_advance' => true, // Auto-finalize this draft after ~1 hour
        ]);

        

        // Return the created invoice.
        return $this->finalizeInvoice($invoice->id);
    }

    private function finalizeInvoice($id)
    {
    	return $this->client->invoices->finalizeInvoice($id);

    }


    public function createCustomer($data) {
        return $this->client->customers->create($data);
    }


    public function retrieveProductFromPrice($priceId) {
	    // Retrieve the price
	    $price = $this->client->prices->retrieve($priceId, []);

	    // Using the 'product' field from the price, retrieve the associated product
	    $product = $this->client->products->retrieve($price->product, []);

	    return ["product" => $product, "price" => $price];
	}



	public function retrieveInvoice($invoiceId) {
	    return $this->client->invoices->retrieve($invoiceId, []);
	}


	public function createSubscription($customerId, $priceId) {

		$sub = $this->client->subscriptions->create([
            'customer' => $customerId,
            'items' => [[
                'price' => $priceId,
            ]],
            'collection_method' => 'send_invoice', // Set the collection method to send_invoice
        	'days_until_due' => 14, // This sets the number of days the customer has to pay the invoice. You can adjust as needed.
        ]);
		$this->finalizeInvoice($sub->latest_invoice);

        return $sub;
    }


    public function payInvoiceWithPaymentMethod($invoiceId, $paymentMethodId) {
	    return $this->client->invoices->pay($invoiceId, ['payment_method' => $paymentMethodId]);
	}


	/**
     * Check the status of a subscription.
     *
     * @param string $subscriptionId
     * @return array
     */
    public function checkSubscriptionStatus($subscriptionId) {
        $subscription = $this->client->subscriptions->retrieve($subscriptionId);

        $isSubscriptionActive = $subscription->status === 'active';
        $isAutoRenewal = !$subscription->cancel_at_period_end;

        return [
            'is_active' => $isSubscriptionActive,
            'auto_renew' => $isAutoRenewal,
            'status' => $subscription->status
        ];
    }


    /**
     * Attempt to renew a subscription that is past due.
     *
     * @param string $subscriptionId
     * @return \Stripe\Subscription
     */
    public function renewSubscription($subscriptionId) {
        $subscription = $this->client->subscriptions->retrieve($subscriptionId);
        // dd($subscription->status);
        // Check if the subscription is past due
        if ($subscription->status === 'past_due') {
            // Attempt to pay the latest invoice on the subscription
            $latestInvoice = $this->client->invoices->retrieve($subscription->latest_invoice);
            // dd($latestInvoice);
            if ($latestInvoice->status === 'open') {
                try {
                    $this->client->invoices->pay($latestInvoice->id, ['off_session' => true]);
                } catch (\Stripe\Exception\ApiErrorException $e) {
                    // Handle payment exception (e.g., require further customer action)
                    // Additional logic to handle payment failure

                    return ["error" => "redirect to payment method page"];
                }
            }
        }

        // Refresh and return the subscription object
        return $this->client->subscriptions->retrieve($subscriptionId);
    }

    /**
     * Get titles of active and paid subscriptions for a given customer.
     *
     * @param string $customerId
     * @return array
     */
    public function getTitlesOfActiveSubscriptions($customerId) {
        $titles = [];
        try {
            $subscriptions = $this->client->subscriptions->all(['customer' => $customerId, 'status' => 'active']);
            foreach ($subscriptions->data as $subscription) {
                // Check if the subscription is paid
                if ($subscription->status === 'active') {
                    foreach ($subscription->items->data as $item) {
                        $product = $this->client->products->retrieve($item->price->product);
                        // dd($product);
                        $titles[] = $product->name;  // Assuming the title is stored in the product's name
                    }
                }
            }
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle the exception
        }
        return $titles;
    }

}