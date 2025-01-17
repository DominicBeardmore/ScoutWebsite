<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset("images/favicon.ico")}}" type="image/x-icon"/>
    <title>2nd Southwark</title>
    </head>
    <body>
        @include('partials.navbar')
        <!-- Page Content -->
        <div class="container" style="margin-top: 50">
            <div class="row justify-content-center">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <!-- Blog Entries Column -->
                <div class="col-md-11">
                    <h1 class="my-4">@yield('pageTitle')</h1>
                    @yield('content')
                </div>
            </div>
            <!-- /.row -->

        </div>

        @include('partials.footer')

    </body>
</html>
