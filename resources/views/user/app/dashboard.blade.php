@extends('user.layouts.index')

@section('css')
<style type="text/css">
	.plan-container .plan-link {
	    text-decoration: none;
	    color: inherit;
	}

	.animated-text {
	    animation: pulseAnimation 2s infinite;
	    /* Additional styling */
	}

	@keyframes pulseAnimation {
	    0% { transform: scale(0.9); }
	    50% { transform: scale(1); }
	    100% { transform: scale(0.9); }
	}

	.no-plan-container .animated-icon {
	    animation: shakeAnimation 1.5s infinite;
	    font-size: 50px;
	    /* Additional styling to position and style the icons */
	}

	.no-plan-container .animated-text {
	    animation: fadeInOut 3s infinite;
	    /* Additional styling */
	}

	@keyframes shakeAnimation {
	    0%, 100% { transform: rotate(2deg); }
	    50% { transform: rotate(0deg); }
	}

	@keyframes fadeInOut {
	    0%, 100% { opacity: 0.5; }
	    50% { opacity: 1; }
	}


</style>
@endsection

@section('content')

<h1>Active work</h1>

@forelse($subs as $sub)
<div class="plan-container">
	<div class="plan-link"><p>{{$sub}}</p></div>
</div>
@empty
<div class="no-plan-container">
    <div class="animated-icon">&#x1F5D3; &#x274C;</div> <!-- Calendar and cross icons -->
    <div class="animated-text">No Current Plans Available</div>
</div>
@endforelse

@if(count($subs) > 0)
<div class="plan-container">
	<a href="{{route('customer.work')}}" class="plan-link">
	    <div class="animated-text">View my work</div>
	</a>
</div>
@endif



@endsection


@section('js')
{{-- <script>
	document.addEventListener("DOMContentLoaded", function() {
	    const text = document.querySelector('.animated-text');
	    setTimeout(() => {
	        text.style.opacity = 1;
	        text.style.transform = 'translateY(0)';
	    }, 500);
	});

</script> --}}
@endsection