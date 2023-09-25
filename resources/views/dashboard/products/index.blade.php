@extends('dashboard.master')
@section('Title')
User Dashboard
@endsection
@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Products</a></li>
                        <li class="breadcrumb-item active">Products list</li>
                    </ol>
                </div>
                <h4 class="page-title">List</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	<h4 class="mt-0 header-title"> Add product.</h4>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-8 mx-auto">

                            <div class="card">
                                @if($errors->any())
                                    {{ implode(',', $errors->all()) }}
                                @endif
                                <form id="myform" action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0"><b>Product Name:</b> <input type="text" class="form-control" name="name" required></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0"><b>Product description:</b> 
                                            <textarea class="form-control" name="description" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0"><b>Price:</b> 
                                            <input type="number" class="form-control" name="price" required></h6>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 class="mb-0"><b>Interval :</b> <select class="form-control paymentmethod" name="interval">
                                                <option value="">Select plan interval</option>
                                                <option value="week">Weekly</option>
                                                <option value="month">Monthly</option>
                                                <option value="year">Yearly</option>
                                                <option value="one_time">One time</option>
                                            </select></h6>
                                        </div>
                                    </div>
                                    <br>
                                     <hr>
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="float-right d-print-none">
                                                <input type="submit" class="btn btn-gradient-primary" name="Submit" value="Submit">
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end card-body-->
                                </form>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <h4 class="mt-0 header-title"> All Products.</h4>
                	
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
							
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($products as $key => $product)
                        @php
                            $s = $service->retrieve_product($product->product_id)['product'];
                        @endphp

                        <tr>
                            <td>{{$s->name}}</td>
                            <td>{{$s->description}}</td>
                            <td>
                                <a href="{{route('product.view', $product->id)}}"> view plans </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div><!-- container -->
@endsection
