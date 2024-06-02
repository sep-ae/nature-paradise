<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Admin | Login</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 350px;
        }
        .card-body {
            padding: 40px;
        }
        .form-control {
            border-radius: 25px;
            border: 2px solid #ced4da;
        }
        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: none;
        }
        .btn-primary {
            border-radius: 25px;
            padding: 10px 20px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .text-muted {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle mb-3 mx-auto d-block" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
            <h2 class="text-center mb-4" style="font-family: 'Bebas Neue', sans-serif;">Admin Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            {{-- <div class="text-muted">
                <small>Belum Punya Akun? <a href="{{ route('register') }}">Registrasi</a></small>
            </div> --}}
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
