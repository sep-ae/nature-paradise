<style>
    body {
        color: #000;
        background: #f5f5f5;
    }

    .wrapper {
        padding: 10px 10%;
    }

    #card-area {
        padding: 50px 0;
        margin-top: 30px;
        margin-bottom: 40px;
    }

    .title {
        text-align: center;
        font-size: 32px;
        font-family: 'Bebas Neue', sans-serif;
        letter-spacing: 2px;
        margin-top: 20px;
    }

    .box-area {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 0px;
        margin-top: 30px;
    }

    .box {
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        width: 270px;
        height: 400px;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
        display: block;
        transition: transform 0.5s;
    }

    .overlay {
        height: 0;
        width: 100%;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 10px;
        position: absolute;
        left: 0;
        bottom: 0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 20px;
        text-align: center;
        font-size: 12px;
        transition: height 0.5s;
        color: #000;
    }

    .overlay h3 {
        font-weight: 500;
        margin-bottom: 5px;
        margin-top: 60%;
        font-family: 'Bebas Neue', sans-serif;
        font-size: 24px;
        letter-spacing: 2px;
    }

    .overlay p {
        margin-bottom: 10px;
    }

    .overlay a {
        margin-top: 10px;
        color: #262626;
        text-decoration: none;
        font-size: 12px;
        background: #fff;
        border-radius: 50px;
        text-align: center;
        padding: 5px 15px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .box:hover img {
        transform: scale(1.2);
    }

    .box:hover .overlay {
        height: 100%;
    }
</style>

<div id="card-area">
    <div class="wrapper">
        <div class="title">Tourist Destination</div>
        <div class="box-area">
            @foreach($destinasis as $destinasi)
            <div class="box">
                <img src="{{ asset('storage/destinasis/'.$destinasi->image) }}" alt="{{ $destinasi->title }}">
                <div class="overlay">
                    <h3>{{ $destinasi->title }}</h3>
                    <span>
                        @php
                        $words = explode(' ', strip_tags($destinasi->description));
                        $shortDescription = implode(' ', array_slice($words, 0, 15));
                        @endphp
                        {{ $shortDescription }}...
                    </span>
                    <a href="{{ route('show-destination', ['id' => $destinasi->id]) }}">Lanjut Baca</a> <!-- Mengarahkan tombol ke halaman show-destination -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
