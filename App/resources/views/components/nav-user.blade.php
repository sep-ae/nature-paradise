<nav class="navbar navbar-expand-lg fixed-top mb-5">
    <div class="container">
        <a class="navbar-brand text-warning" href="/" > <!-- Mengubah href menjadi "/" -->
            <img src="{{ asset('img/icon.png') }}" alt="Icon" width="30" height="30">
            Nature Paradise
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active text-warning" aria-current="page" href="/">Home</a> <!-- Mengubah href menjadi "/" -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('event') }}">Event</a> <!-- Menggunakan route() untuk link ke event -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('destinasi') }}">Destinasi</a> <!-- Menggunakan route() untuk link ke destinasi -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('kuliner') }}">Kuliner</a> <!-- Menggunakan route() untuk link ke kuliner -->
                </li>
            </ul>
        </div>
    </div>
</nav>
