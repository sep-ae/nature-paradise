<style>
    .navbar {
        font-family: 'Poppins', sans-serif;
    }
    body {
        background: lightgray;
        font-family: 'Bebas Neue', sans-serif;
    }
    .card-title {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 1.5rem;
    }
    .card-text {
        font-size: 1.2rem;
    }
    .container-sm {
        margin-top: 20px;
    }
    .card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    .card-body {
        text-align: center;
    }
    .title {
        margin-top: 20px; /* Tambahkan margin atas di sini */
    }
</style>
<div class="row">
    <div class="col-12 text-center mb-4">
        <h1 class="title">Statistik Website</h1>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <h5 class="card-title">Total Events</h5>
                <p class="card-text display-4">{{ $totalEvents }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <h5 class="card-title">Total Destinasi</h5>
                <p class="card-text display-4">{{ $totalDestinasi }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body text-center">
                <h5 class="card-title">Total Kuliner</h5>
                <p class="card-text display-4">{{ $totalKuliner }}</p>
            </div>
        </div>
    </div>
</div>
