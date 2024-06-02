<style>
    #event {
        padding: 50px 0;
        margin-top: 40px;
        margin-bottom: 20px;
    }
    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .title {
        text-align: center;
        font-size: 32px;
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 2px;
        width: 100%;
    }
    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 16px;
        width: 250px;
        margin: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        background-color: #fff;
    }
    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }
    .month-title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 16px;
    }
    .event-list {
        flex-grow: 1;
        overflow-y: auto;
    }
    .event {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }
    .event-date {
        font-size: 20px;
        font-weight: bold;
        margin-right: 16px;
        color: #ff6347;
    }
    .event-content {
        display: flex;
        flex-direction: column;
    }
    .event-title {
        font-size: 18px;
        font-weight: bold;
    }
    .event-description {
        font-size: 14px;
        color: #555;
    }
    .carousel-indicators {
        left: 0;
        top: auto;
        bottom: -50px;
        display: flex;
        justify-content: center;
    }
    .carousel-indicators li {
        background: #000;
        margin-right: 10px;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        transition: background-color 0.3s ease;
    }

    @media screen and (max-width: 475px) {
        .card {
            font-size: 0.8em;
            flex-direction: column;
            width: 90%;
        }
    }
</style>

<section id="event">
    <div class="container">
        <div class="title">Event Tourist 2024</div>
        <div id="carouselExampleIndicators" class="carousel slide">
            <ul class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                @php
                    use Carbon\Carbon;

                    // Urutkan events berdasarkan tanggal
                    $sortedEvents = $events->sortBy(function($event) {
                        return Carbon::parse($event->tanggal);
                    });

                    // Kelompokkan events berdasarkan bulan
                    $eventsByMonth = [];
                    foreach ($sortedEvents as $event) {
                        $month = Carbon::parse($event->tanggal)->format('F');
                        if (!isset($eventsByMonth[$month])) {
                            $eventsByMonth[$month] = [];
                        }
                        $eventsByMonth[$month][] = $event;
                    }

                    $months = array_keys($eventsByMonth);
                    $slides = array_chunk($months, 4);
                @endphp
                @foreach ($slides as $slideIndex => $monthsInSlide)
                    <div class="carousel-item {{ $slideIndex === 0 ? 'active' : '' }}">
                        <div class="row">
                            @foreach ($monthsInSlide as $month)
                                <div class="card">
                                    <div class="month-title">{{ $month }}</div>
                                    <div class="event-list">
                                        @if (isset($eventsByMonth[$month]))
                                            @foreach ($eventsByMonth[$month] as $event)
                                                <div class="event">
                                                    <div class="event-date">{{ Carbon::parse($event->tanggal)->format('d') }}</div>
                                                    <div class="event-content">
                                                        <div class="event-title">{{ $event->title }}</div>
                                                        <div class="event-description">{{ $event->tempat }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="event">
                                                <div class="event-content">
                                                    <div class="event-title">No Events</div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
