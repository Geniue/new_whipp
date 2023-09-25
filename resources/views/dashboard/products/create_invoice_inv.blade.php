@extends('dashboard.master')
@section('Title')
Send Invoice 
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-white">
            <h4 class="mb-0">Send Invoice</h4>
        </div>

        <form method="POST" action="{{route('send.invoice.invited', request()->slug)}}">
            @csrf
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="mb-0"><b>Customer to send to:</b> <select class="form-control paymentmethod" name="customer">
                                    <option value="">Select Customer</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->email}} - {{$user->name}}</option>
                                    @endforeach
                                </select></h6>
                            </div>
                        </div>
                        <!-- Add more user details if needed -->
                    </div>
                </div> 
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">#</th>
                                <th>Item</th>
                                <th>Description</th>
                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">1</td>
                                <td class="left">{{ $data['product']->name }}</td>
                                <td class="left">{{ $data['product']->description }}</td>
                                <td class="right">${{ number_format($data['price']->unit_amount / 100, 2) }}</td>
                                <td class="center">1</td>
                                <td class="right">${{ number_format($data['price']->unit_amount / 100, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong>${{ number_format($data['price']->unit_amount / 100, 2) }}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="float-right d-print-none">
                            <input type="submit" class="btn btn-gradient-primary" name="Submit" value="Submit">
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>


        </form>
    </div>
</div>
@endsection
