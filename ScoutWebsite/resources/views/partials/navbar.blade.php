<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="margin-bottom: 300">
    <div class="container">
        <a class="navbar-brand" href="/home">2nd Southwark</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>

            @if (Auth::check() && Auth::user()->can('authorized'))
                <li class="nav-item">
                    <a class="nav-link" href="/timeline">Timetable</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('logout') }}"> Logout </a>
                </li>

                @if(Auth::user()->can('update'))
                <li class="nav-item">
                    <a class="nav-link" href="/authorize">Authorize Users</a>
                </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            @endif
        </ul>
        </div>
    </div>
</nav>
