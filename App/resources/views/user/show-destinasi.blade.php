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
            border-radius: 0.5rem;
        }
        .card-body {
            width: 100%;
            padding: 1rem;
            text-align: justify;
        }
        .card-title {
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
                    <a href="#" class="btn btn-secondary back-button">Kembali</a>
                    <img src="your-image-url.jpg" class="card-img-top" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Article Title</h5>
                        <p class="card-text">This is a brief excerpt of the article. It gives an overview of the main content and entices the reader to continue reading. You can customize the length and content of this text as per your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-user>
