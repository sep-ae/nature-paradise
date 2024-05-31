<x-app-user>
    <style>
        .carousel-item img {
        object-fit: cover;
        height: 100%;
        }
        .carousel-item {
        height: 100vh;
        min-height: 350px;
        filter: brightness(0.6);
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
    </style>

  <header>
    <div id="carouselExampleInterval" class="carousel slide mb-4" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img src="/img/bg-home/bg.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                    <h3>Event</h3>
                  <p>Ayo kunjungi Event indonesia.</p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <img src="/img/bg-home/bg1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                    <h3>Destinasi</h3>
                  <p>Jelajahi Surga Dunia Indonesia</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/img/bg-home/bg2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption">
                    <h3>Informasi</h3>
                  <p>Rencanakan Kunjungan Wisata Anda.</p>
              </div>
            </div>
          </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </header>

</x-app-user>

