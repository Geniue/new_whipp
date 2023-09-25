@extends('dashboard.master')
@section('Title')
User Create
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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                        <li class="breadcrumb-item active">Create User</li>
                    </ol>
                </div>
                <h4 class="page-title">Create</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                @if($errors->any())
                    {{ implode(',', $errors->all()) }}
                @endif
                <form id="myform" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="mb-0"><b>Email:</b> <input type="email" class="form-control" name="email" required></h6>
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
        </div> <!-- end col -->
    </div> <!-- end row -->

</div><!-- container -->
@endsection
