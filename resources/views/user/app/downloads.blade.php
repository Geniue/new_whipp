@extends('user.layouts.index')
@section('CSS')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.6/viewer.min.css" integrity="sha512-za6IYQz7tR0pzniM/EAkgjV1gf1kWMlVJHBHavKIvsNoUMKWU99ZHzvL6lIobjiE2yKDAKMDSSmcMAxoiWgoWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    img.img-fluid {
        cursor: pointer;
        transition: transform .2s ease-in-out;
    }

    img.img-fluid:hover {
        transform: scale(1.1);
    }
</style>
@endsection

@section('content')
<div id="fileContainer" class="container mt-5">
    <div class="row mb-4">
        @foreach($files as $file)
            @php
            $extension = pathinfo($file->file, PATHINFO_EXTENSION);
            @endphp
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if(in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                        <img data-original="{{ \Storage::disk('public')->url(str_replace('public/', '', $file->file)) }}" src="{{ \Storage::disk('public')->url(str_replace('public/', '', $file->file)) }}" alt="{{ $extension }}" class="img-fluid rounded-top">
                    @else
                        <!-- For non-image files, use an iframe or another viewer -->
                        <iframe src="{{ \Storage::disk('public')->url(str_replace('public/', '', $file->file)) }}" style="width:100%; height:200px;"></iframe>
                    @endif
                    <div class="card-footer text-center">
                        <a href="{{ \Storage::disk('public')->url(str_replace('public/', '', $file->file)) }}" download class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h3>{{$work->title}}</h3>
    <p>{{$work->description}}</p>
</div>
@endsection

@section('JS')
<script src="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.6/viewer.min.js" integrity="sha512-EC3CQ+2OkM+ZKsM1dbFAB6OGEPKRxi6EDRnZW9ys8LghQRAq6cXPUgXCCujmDrXdodGXX9bqaaCRtwj4h4wgSQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const images = document.querySelectorAll('img[data-original]');
    const viewer = new Viewer(images, {
        toolbar: {
            zoomIn: 4,
            zoomOut: 4,
            oneToOne: 4,
            reset: 4,
            prev: 4,
            play: {
                show: 4,
                size: 'large',
            },
            next: 4,
            rotateLeft: 4,
            rotateRight: 4,
            flipHorizontal: 4,
            flipVertical: 4,
        },
    });
</script>
@endsection
