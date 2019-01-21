@extends('layouts.base')

@section('pageTitle'){{$title}}@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center d-flex">
            @foreach ($images as $image)
                <div class="card mb-4">
                    <img class="card-img-top" src="{!!$image->image_path!!}" alt="OPPS something isn't quite right">
                </div>
            @endforeach
        </div>
    </div>
@endsection
