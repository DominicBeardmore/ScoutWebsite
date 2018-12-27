@extends('layouts.base')

@section('pageTitle')
What we've done recently
@endsection

@section('content')
@parent

@foreach ($posts as $post)
    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="{{$post['post_images'][0]['image_path']}}" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title">{{$post['post_title']}}</h2>
            <p class="card-text">{{$post['post_content']}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            {{$post['post_date']}}
        </div>
    </div>
@endforeach




@endsection
