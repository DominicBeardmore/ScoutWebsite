<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light border-bottom bg-scout-purple fixed-top" style="margin-bottom: 300">
    <div class="container">
        <a class="navbar-brand text-white" href="/home">2nd Southwark</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="/home">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/about">About Us</a>
            </li>
            @if (Auth::check())
                @if (Auth::user()->can('authorized'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="/timeline">Events</a>
                </li>

                @if(Auth::user()->can('update'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="/authorize">Authorize Users</a>
                </li>
                @endif
            @endif
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('logout') }}">Logout</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text-white" href="/login">Login</a>
                </li>
            @endif
        </ul>
        </div>
    </div>
</nav>
