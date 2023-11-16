@extends('user.layouts.index')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<style type="text/css">
	.badge-success {
		background-color: green;
	}
</style>
@endsection

@section('content')
<!-- Main Content -->
<h1>Payment Details</h1>

<!-- Stripe Form -->
<form action="{{route('user.store.cards')}}" method="post" id="payment-form">
    @csrf
    <div class="form-row mb-3">
        <label for="card-element">Credit or debit card</label>
        <div id="card-element" class="py-3 px-2 border">
            <!-- A Stripe Element will be inserted here. -->
        </div>

        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert" class="mt-2 text-danger"></div>
    </div>

    <button type="submit" class="btn btn-primary">Submit Details</button>
</form>
<div class="container mt-5">
    <h2 class="mb-4">Your Payment Cards</h2>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Card Type</th>
                <th>Last Four</th>
                <th>Expiry</th>
                <th>Default Card</th>
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
			            @if( !$user->defaultPaymentMethod() || $user->defaultPaymentMethod()->id !== $method->id)
			                <form action="{{ route('set.default.card') }}" method="POST">
			                    @csrf
			                    <input type="hidden" name="paymentMethod" value="{{ $method->id }}">
			                    <button type="submit" class="btn btn-primary">Set as Default</button>
			                </form>
			            @else
			                <span class="badge badge-success">Default</span>
			            @endif
			        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection

@section('js')
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('{{ env("STRIPE_KEY") }}'); // Your Public Key
	var elements = stripe.elements();

	var style = {
	    base: {
	        color: "#32325d",
	    }
	};

	var card = elements.create("card", { style: style });
	card.mount("#card-element");

	card.addEventListener('change', function(event) {
	    var displayError = document.getElementById('card-errors');
	    if (event.error) {
	        displayError.textContent = event.error.message;
	    } else {
	        displayError.textContent = '';
	    }
	});

	var form = document.getElementById('payment-form');
	form.addEventListener('submit', function(event) {
	    event.preventDefault();

	    stripe.createPaymentMethod('card', card).then(function(result) {
	        if (result.error) {
	            var errorElement = document.getElementById('card-errors');
	            errorElement.textContent = result.error.message;
	            console.log(errorElement.textContent)
	        } else {
	            paymentMethodHandler(result.paymentMethod);
	        }
	    });
	});

	function paymentMethodHandler(paymentMethod) {
	    var form = document.getElementById('payment-form');
	    var hiddenInput = document.createElement('input');
	    hiddenInput.setAttribute('type', 'hidden');
	    hiddenInput.setAttribute('name', 'stripePaymentMethod');
	    hiddenInput.setAttribute('value', paymentMethod.id);
	    form.appendChild(hiddenInput);

	    form.submit();
	}

</script>
@endsection