<x-app-user>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        .carousel-item {
            position: relative;
            height: 100vh;
            min-height: 350px;
            filter: brightness(0.6);
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-family: 'Poppins', sans-serif;
        }

        .carousel-caption h2 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .carousel-caption p {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>

    <header>
        <div id="carouselExampleInterval" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000" style="background-image: url('/img/bg-home/bg.jpg')">
                    <div class="carousel-caption">
                        <h1>Event</h1>
                        <p>Ayo kunjungi Event indonesia.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000" style="background-image: url('/img/bg-home/bg1.jpg')">
                    <div class="carousel-caption">
                        <h1>Destinasi</h1>
                        <p>Jelajahi Surga Dunia Indonesia</p>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('/img/bg-home/bg2.jpg')">
                    <div class="carousel-caption">
                        <h1>Informasi</h1>
                        <p>Rencanakan Kunjungan Wisata Anda.</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

</x-app-user>
