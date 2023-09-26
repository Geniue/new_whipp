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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Users</a></li>
                        <li class="breadcrumb-item active">Users list</li>
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
                	
                    <h4 class="mt-0 header-title"> All Users.</h4>
                    <div class="app-search col-sm-4">
                		<form role="search" class="">
			                <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
			                <a href="" style="right: 78px;"><i class="fas fa-search"></i></a>
			            </form>
			            <br>

                	</div>
                	<div class="col-sm-12">
                		<a href="{{route('user.create')}}" class="btn btn-gradient-primary"> invite customer </a>
		            	<br>
		            	<br>
		            	<br>
                	</div>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
							
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{route('user.downloads', $user->id)}}">Downloads</a>
                                <br>
                                <a href="{{route('user.upload', $user->id)}}">Add Work</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <h4>Invited Users</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($inv_users as $key => $user)
                        <tr>
                            <td>{{$user->email}}</td>
                            <td>

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
