@extends('dashboard.master')
@section('Title')
User Work Upload
@endsection
@section('css')
@endsection

@section('content')
<div class="container mt-5">
    <form action="{{ route('user.upload.save', request()->id) }}" method="post" enctype="multipart/form-data" class="dropzone" id="fileUpload">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required class="form-control">
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" required class="form-control"></textarea>
        </div>
        
        <div class="form-group">
            <label for="files">Upload Files:</label>
            <input type="file" name="files[]" id="files" required multiple class="form-control">
        </div>

        <button type="submit" class="form-control">Submit</button>
    </form>
</div>
@endsection

@section('js')
@endsection
