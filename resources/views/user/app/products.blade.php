@extends('user.layouts.index')

@section('content')
<div class="container mt-5">
    <h2>Your Products</h2>
    
{{--  <!-- Filter Form -->
    <div class="mb-3">
        <form action="{{ route('user.products') }}" method="GET" class="form-inline">
            <label for="from_date" class="mr-2">From:</label>
            <input type="date" name="from_date" value="{{ request('from_date') }}" class="form-control mr-3">

            <label for="to_date" class="mr-2">To:</label>
            <input type="date" name="to_date" value="{{ request('to_date') }}" class="form-control mr-3">
            <br>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>

    <!-- Search Form -->
    <div class="mb-3">
        <form action="{{ route('user.products') }}" method="GET" class="form-inline">
            <label for="search" class="mr-2">Search:</label>
            <input type="text" name="search" value="{{ request('search') }}" class="form-control mr-3">
            <br>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div> --}}

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Interval</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $invoice)
                    @php
                        $boolInv = false;
                        $stat = $invoice->stripe_invoice->status;
                        if($invoice->sub_id){
                            $checkSub = $service->checkSubscriptionStatus($invoice->sub_id);
                            $boolInv = true;
                        }
                    @endphp
                    <tr>
                        <td>{{ $invoice->productName }}</td>
                        <td>{{ $invoice->productDescription }}</td>
                        <td>${{ number_format($invoice->unit_amount / 100, 2) }}</td>
                        <td>{{$invoice->type == 'one_time' ? 'One Time Payment' : ($invoice->type == 'week' ? 'Weekly Payment' : ($invoice->type == 'month' ? 'Monthly Payment' : ($invoice->type == 'year' ? 'Yearly Payment' : '')))}}</td>
                        <td>{{  $stat == "open" ? "Unpaid" : "Paid" }}</td>
                        <td>
                            
                            @if($boolInv)
                                @if(!$checkSub['is_active'])
                                    <a href="{{ route('user.renew', $invoice->uniqId) }}" class="btn btn-primary">Renew</a>
                                @else
                                    @if($invoice->inv_stat == "open")
                                        <a href="{{ route('user.pay', $invoice->uniqId) }}" class="btn btn-primary">Pay Now</a>
                                    @else
                                        <a href="{{ explode('?s=ap', $service->retrieveReceipt($invoice->stripe_invoice->payment_intent))[0] . '/pdf?s=ap' }}" type="_blank" class="btn btn-primary">Your Receipt</a>
                                    @endif

                                @endif
                            @else
                                @if($stat == "open")
                                    <a href="{{ route('user.pay', $invoice->uniqId) }}" class="btn btn-primary">Pay Now</a>
                                @else
                                    <a href="{{ explode('?s=ap', $service->retrieveReceipt($invoice->stripe_invoice->payment_intent))[0] . '/pdf?s=ap' }}" type="_blank" class="btn btn-primary">Your Receipt</a>
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $invoices->links('vendor.pagination.bootstrap-4') }}
</div>
@endsection
