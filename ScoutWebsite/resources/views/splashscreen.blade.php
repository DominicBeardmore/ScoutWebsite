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

    <body>
        <div class="container col-12">
            <div class="row d-flex justify-content-around">
                <div class="card-sm col-3 border rounded">
                <img class="img-fluid border-bottom" src="{{url('images/Scouts_Logo_Stack_Purple.jpg')}}" alt="">
                    <div class="card-body d-flex justify-content-center">
                        <a href="posts">
                            <button class="btn-lg btn-primary rounded">Gallery</button>
                        </a>
                    </div>
                </div>

                <div class="card-sm col-3 border rounded">
                    <img class="img-fluid border-bottom" src="{{url('images/Scouts_Logo_Stack_Purple.jpg')}}" alt="">
                    <div class="card-body d-flex justify-content-center">
                        <a href="about">
                            <button class="btn-lg btn-primary rounded">About Us</button>
                        </a>
                    </div>
                </div>

                <div class="card-sm col-3 border rounded">
                    <img class="img-fluid border-bottom" src="{{url('images/Scouts_Logo_Stack_Purple.jpg')}}" alt="">
                    <div class="card-body d-flex justify-content-center">
                        <a href="timeline">
                            <button class="btn-lg btn-primary rounded">Timeline</button>
                        </a>
                    </div>
                </div>
            </div>
            @if (Auth::user() && !Auth::user()->can('authorized'))
                @include('adminPages.notAuthModal')
            @endif
        </div>
    </body>
</div>
@endsection
