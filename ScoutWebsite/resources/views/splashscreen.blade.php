@extends('layouts.base')

@section('content')
<div class="contianer">
    <div class="row justify-content-center">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">2nd Southwark</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
                @if (!Auth::user())
                    <p>
                        <a href="register" class="btn btn-primary my-2">Sign Up</a>
                        <a href="login" class="btn btn-secondary my-2">Login</a>
                    </p>
                @endif
            </div>
        </section>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-around">
            <div class="col-md-4 col-sm-10 mb-4">
                <div class="card border">
                <img class="card-img-top" src="{{url('images/boy-and-girl-cubs-laughing.jpg')}}" alt="">
                    <div class="card-body d-flex justify-content-center">
                        <a href="posts">
                            <button class="btn-md btn-primary rounded">Photos</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-10 mb-4">
                <div class="card border">
                    <img class="card-img-top" src="{{url('images/two-cubs-leaping-into-water-jpg.jpg')}}" alt="">
                    <div class="card-body d-flex justify-content-center">
                        <a href="about">
                            <button class="btn-md btn-primary rounded">About Us</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-10 mb-4">
                <div class="card border">
                    <img class="card-img-top" src="{{url('images/cubs-crate-stacking-jpg.jpg')}}" alt="">
                    <div class="card-body d-flex justify-content-center">
                        <a href="timeline">
                            <button class="btn-md btn-primary rounded">Events</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @if (Auth::user() && !Auth::user()->can('authorized'))
            @include('adminPages.notAuthModal')
        @endif
    </div>
</div>
@endsection
