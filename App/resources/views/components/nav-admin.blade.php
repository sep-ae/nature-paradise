<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand text-warning" href="#" > 
            <img src="{{ asset('img/icon.png') }}" alt="Icon" width="30" height="30">
            Nature Paradise
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="/admin-home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-primary" aria-current="page" href="/events">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="/destinasis">Destinasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="/kuliners">Kuliner</a>
                </li>
                @auth
                    <li class="nav-item">
                        <p class="nav-link text-primary">{{ Auth::user()->name }}</p>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-danger" type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
