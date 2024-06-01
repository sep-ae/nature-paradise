<x-app-user>
    <style>
        .card {
            margin: 2rem auto; /* Centers the card and adds margin to the top and bottom */
            width: 70%; /* Sets the card width to 70% of the page */
            position: relative; /* Ensures the back-button is positioned relative to the card */
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow to the card */
            border-radius: 10px; /* Add border radius to the card */
            overflow: hidden; /* Hide any overflow content */
        }
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1; /* Ensures the button is on top of other elements */
        }
        .card-img-top {
            width: 100%;
            height: auto;
            max-width: 400px; /* Optional: Set a max-width for the image */
            border-top-left-radius: 10px; /* Add border radius to the top-left corner of the image */
            border-top-right-radius: 10px; /* Add border radius to the top-right corner of the image */
            margin-top: 20px; /* Add margin to the top of the image */
        }
        .card-body {
            width: 100%;
            padding: 1rem;
            text-align: justify;
            background-color: #fff; /* Set background color for the card body */
            border-bottom-left-radius: 10px; /* Add border radius to the bottom-left corner of the card body */
            border-bottom-right-radius: 10px; /* Add border radius to the bottom-right corner of the card body */
        }
        .card-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        .card-text {
            font-size: 1rem;
            color: #666;
        }
    </style>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary back-button">Kembali</a>
                    <img src="{{ asset('storage/kuliners/'.$kuliner->image) }}" class="card-img-top" alt="{{ $kuliner->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $kuliner->title }}</h5>
                        @php
                        $words = explode(' ', strip_tags($kuliner->description));
                        $paragraphs = array_chunk($words, 100);
                        @endphp
                        @foreach ($paragraphs as $paragraph)
                            <p class="card-text">{{ implode(' ', $paragraph) }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-user>
