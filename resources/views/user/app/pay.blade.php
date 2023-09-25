@extends('user.layouts.index')

@section('css')

<style type="text/css">
    .badge-success {
        background-color: green;
    }

    .badge-warning {
    	background-color: red;
    }
</style>
@endsection

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Product Details</h2>
    @if($errors->any())
	    <div class="alert alert-danger">
	        @foreach($errors->all() as $error)
	            <p>{{ $error }}</p>
	        @endforeach
	    </div>
	@endif
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Amount</th>
                <th>Charged</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $invoiceDetails->name }}</td>
                <td>{{ $invoiceDetails->description }}</td>
                <td>${{ number_format($plan->unit_amount / 100, 2) }}</td>
                <td>{{$plan->type == 'one_time' ? 'One Time Payment' : ($plan->recurring->interval == 'week' ? 'Weekly Payment' : ($plan->recurring->interval == 'month' ? 'Monthly Payment' : ($plan->recurring->interval == 'year' ? 'Yearly Payment' : '')))}}</td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-5 mb-4">Choose a Payment Card</h2>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Card Type</th>
                <th>Last Four</th>
                <th>Expiry</th>
                <th>Default</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paymentMethods as $method)
                <tr>
                    <td>
                        @if($method->card->brand == 'visa')
                            <i class="fab fa-cc-visa"></i> Visa
                        @elseif($method->card->brand == 'mastercard')
                            <i class="fab fa-cc-mastercard"></i> MasterCard
                        @elseif($method->card->brand == 'amex')
                            <i class="fab fa-cc-amex"></i> Amex
                        @elseif($method->card->brand == 'discover')
                            <i class="fab fa-cc-discover"></i> Discover
                        @elseif($method->card->brand == 'diners')
                            <i class="fab fa-cc-diners-club"></i> Diners Club
                        @elseif($method->card->brand == 'jcb')
                            <i class="fab fa-cc-jcb"></i> JCB
                        @else
                            {{ $method->card->brand }}
                        @endif
                    </td>
                    <td>{{ $method->card->last4 }}</td>
                    <td>{{ $method->card->exp_month }}/{{ $method->card->exp_year }}</td>
                    <td>
			            @if( !$defaultPaymentMethod || $defaultPaymentMethod->id !== $method->id)
			                <span class="badge badge-warning">False</span>
			            @else
			                <span class="badge badge-success">Default</span>
			            @endif
			        </td>
                    <td>
                        <form action="{{ route('user.pay.invoice', request()->slug) }}" method="POST">
                            @csrf
                            <input type="hidden" name="payment_method" value="{{ $method->id }}">
                            <button type="submit" class="btn btn-primary">Pay with this Card</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
