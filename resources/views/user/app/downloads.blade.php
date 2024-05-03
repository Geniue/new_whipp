@extends('user.layouts.index')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/viewerjs/1.11.6/viewer.min.css" integrity="sha512-za6IYQz7tR0pzniM/EAkgjV1gf1kWMlVJHBHavKIvsNoUMKWU99ZHzvL6lIobjiE2yKDAKMDSSmcMAxoiWgoWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    img.img-fluid {
        cursor: pointer;
        transition: transform .2s ease-in-out;
    }

    .zip-icon {
        width: 100px;
        height: 140px;
        background-color: #5b6c7d;
        border-radius: 8px;
        position: relative;
        box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.2);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        align-self: center;
    }

    .zip-top {
        width: 100%;
        height: 20px;
        background-color: #47525e;
        border-radius: 8px 8px 0 0;
    }

    .zip-body {
        width: 100%;
        height: 120px;
        background-color: #5b6c7d;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .zip-label {
        color: white;
        font-size: 24px;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .zip-body::before {
        content: '';
        position: absolute;
        top: 10px;
        left: 10px;
        width: 80px;
        height: 100px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 4px;
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

                        @if(in_array($extension, ['rar', 'zip']))
                            @if($extension == 'rar')
                                <div class="zip-icon">
                                    <div class="zip-top"></div>
                                    <div class="zip-body">
                                        <span class="zip-label">RAR</span>
                                    </div>
                                </div>
                                
                            @else
                                <div class="zip-icon">
                                    <div class="zip-top"></div>
                                    <div class="zip-body">
                                        <span class="zip-label">ZIP</span>
                                    </div>
                                </div>
                            @endif
                        @else
                        <!-- For non-image files, use an iframe or another viewer -->
                        <iframe src="{{ \Storage::disk('public')->url(str_replace('public/', '', $file->file)) }}" style="width:100%; height:200px;"></iframe>
                        @endif
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
