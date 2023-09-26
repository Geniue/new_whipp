@extends('user.layouts.index')
@section('Title')
    WORK
@endsection
@section('css')
  <style>
    .blog-link{color:#0e1426;}
    .blog-link:hover{
      text-decoration: underline;
    }
  </style>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th width="95">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                             @foreach($work as $key=>$data)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                  <a target="_blank" href="{{route('user.work', $data->id)}}" class="blog-link" title="View blog in browser">{{$data->title}}</a>
                                </td>
                                <td>{{$data->description}}</td>
                                <td>
                                     <a target="_blank" href="{{route('customer.downloads', $data->id)}}" title="View blog in browser"><i class="far fa-eye text-info mr-1"></i></a>
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
