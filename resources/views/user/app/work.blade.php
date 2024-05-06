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
                            @foreach($work as $key => $data)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                      <a target="_blank" href="{{route('user.work', $data->id)}}" class="blog-link" title="View blog in browser">{{$data->title}}</a>
                                    </td>
                                    <td>{{$data->description}}</td>

                                    @php

                                        $invoice = $data->subscription;
                                        $checkSub = $invoice->stripe_invoice->status;

                                    @endphp
                                    @if($checkSub == "paid")
                                    <td style="text-align: center;">
                                        <a target="_blank" href="{{ \Storage::disk('public')->url(str_replace('public/', '', $data->files[0]->file)) }}" download><i class="far fa-sharp fa-solid fa-download text-info mr-1"></i></a>
                                    </td>
                                    @else
                                    <td style="text-align: center;">
                                        <a href="{{ route('user.pay', $invoice->uniqId) }}" class="btn btn-primary">Pay to download</a>
                                    </td>
                                    @endif
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
