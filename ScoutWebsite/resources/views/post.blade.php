@extends('layouts.base')

@section('pageTitle')
What we've done recently
@endsection

@section('content')
@parent

@foreach ($posts as $post)
    <!-- Blog Post -->
    <div class="col-sm-2">
    </div>
    <div class="card mb-4">
        <img class="card-img-top" src="{!!$post['post_images'][0]['image_path']!!}" alt="NO IMAGE">
        <div class="card-body">
            <h2 class="card-title">{{$post['post_title']}}</h2>
            <p class="card-text">{{$post['post_content']}}</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            {{$post['post_date']}}
            @if(Auth::user()->can('update'))
            <div class="float-right">
                <form action="{{route('posts.destroy', $post['post_id'])}}" method="post" id="deletePost">
                    @method('DELETE')
                    @csrf
                    <button type="submit" value="{{$post['post_id']}}" name="deleteID" class="btn-danger">Delete</button>
                </form>
            </div>
        @endif
        </div>
    </div>
@endforeach

@if(Auth::user()->can('update'))
    @include('adminPages.editPost')
@endif

@endsection
