<style>
    body {
        padding: 1em;
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
    }
    .text-center {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 2.5em;
        margin-bottom: 20px;
    }
    #kuliner {
        padding: 50px 0;
        margin-top: 30px;
        margin-bottom: 40px;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    .card {
        width: 100%;
        height: 100%;
        max-width: 40em;
        max-height: 25em;
        display: flex;
        flex-direction: row;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1em;
        background-color: #fff;
        border: 1px solid #ddd;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }
    .card img {
        width: 40%;
        height: auto;
        object-fit: cover;
        margin: auto;
        padding: 0.5em;
        border-radius: 0.7em;
    }
    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 1em;
        width: 60%;
    }
    .text-section {
        flex-grow: 1;
    }
    .card-title {
        font-size: 1.5em;
        font-weight: bold;
        margin-bottom: 0.5em;
    }
    .card-text {
        font-size: 1em;
        color: #666;
    }
    .btn {
        align-self: flex-start;
        padding: 0.5em 1em;
        text-decoration: none;
        border-radius: 0.5em;
        transition: background-color 0.3s ease, color 0.3s ease;
        margin-top: 1em; /* Add margin on top of the button */
    }
    .btn-success {
        background-color: #28a745;
        color: #fff;
    }
    .btn-success:hover {
        background-color: #218838;
        color: #fff;
    }
    @media screen and (max-width: 475px) {
        .card {
            font-size: 0.8em;
            flex-direction: column;
        }
        .card img {
            width: 100%;
        }
        .card-body {
            width: 100%;
        }
    }
    /* New style to add spacing between rows of cards */
    .row + .row {
        margin-top: 20px;
    }
    .col-md-6 {
        margin-bottom: 20px; /* Add margin to the bottom of columns */
    }
</style>

<section id="kuliner">
    <h2 class="text-center">Kuliner</h2>
    <div class="container d-flex justify-content-center mt-5">
        <div class="row">
            @foreach($kuliners as $kuliner)
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card">
                        <img src="{{ asset('storage/kuliners/'.$kuliner->image) }}" class="card-img-top" alt="{{ $kuliner->title }}">
                        <div class="card-body">
                            <div class="text-section">
                                <h5 class="card-title">{{ $kuliner->title }}</h5>
                                @php
                                $words = explode(' ', strip_tags($kuliner->description));
                                $shortDescription = implode(' ', array_slice($words, 0, 15));
                                @endphp
                                <p class="card-text">{{ $shortDescription }}...</p>
                                <!-- Anda bisa menambahkan link ke halaman detail kuliner di sini -->
                                <a href="#" class="btn btn-success">Lanjut Baca</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
