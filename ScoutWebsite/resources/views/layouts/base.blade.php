<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @include('partials.navbar')

        <!-- Page Content -->
        <div class="container" style="margin-top: 50">

          <div class="row justify-content-center">

            <!-- Blog Entries Column -->
            <div class="col-md-11">

              <h1 class="my-4">@yield('pageTitle')</h1>

                @yield('content')

            </div>
          </div>
          <!-- /.row -->

        </div>
        <!-- /.container -->

        @include('partials.footer')
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      </body>
</html>
