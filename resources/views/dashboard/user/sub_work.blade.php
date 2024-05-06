@extends('dashboard.master')
@section('Title')
    WORK
@endsection
@section('page_level_style')
  <style>
    .blog-link{color:#0e1426;}
    .blog-link:hover{
      text-decoration: underline;
    }
  </style>
@endsection
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title"> {{ App\Models\User::where('id', request()->id)->get()[0]->name . "'s" }} Invoices.</h4>
                                    	
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Interval</th>
                            <th>Price</th>
                            <th>Action</th>
                    		
                        </tr>
                        </thead>


                        <tbody>
                         @foreach($invoices as $invoice)
                            @php
                                if($invoice->sub_id)
                                    $checkSub = $service->checkSubscriptionStatus($invoice->sub_id);
                                else
                                    $checkSub['status'] = "open";
                                
                            @endphp
                            <tr>
                                <td>{{ $invoice->productName }}</td>
                                <td>{{ $invoice->productDescription }}</td>
                                <td>${{ number_format($invoice->unit_amount / 100, 2) }}</td>
                                <td>{{$invoice->type == 'one_time' ? 'One Time Payment' : ($invoice->type == 'week' ? 'Weekly Payment' : ($invoice->type == 'month' ? 'Monthly Payment' : ($invoice->type == 'year' ? 'Yearly Payment' : '')))}}</td>
                                <td>{{ str_replace("_", " ", $checkSub['status']) }}</td>
                                <td>
                                    <a href="{{ route('user.upload', $invoice->uniqId) }}" class="btn btn-primary"> Add Work </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection