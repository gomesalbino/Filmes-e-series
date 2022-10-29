<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/Favicon 0.jpg') }}" type="image/x-icon">
     <title>
    {{ $title }}
    </title>
   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container mt-3">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" class=" mt-2 mb-4">
                    <img src="{{ asset('img/A.jpg ') }}" width="100px" alt="">
                </x-nav-link>
                <x-nav-link :href="route('dashboard')" class="btn btn-info btn-lg mt-4 mb-4 ms-4 w-20">
                   <i class="fa-solid fa-house-user"></i>
                </x-nav-link>
                <x-nav-link :href="route('series.index')" class="btn btn-outline-success mt-4 mb-4 ms-4">
                    {{ __('Minhas Séries') }}
                </x-nav-link>
            </div>
            <nav class="navbar bg-light">
            <div class="container-fluid">
                <form action="{{ route('series.index') }}" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2 w-35" type="search" name="search" id="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </nav>
    <div class="container mt-4">

        <h1 class="text-secondary mt-5">{{ $title }}</h1>
        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
        @endisset
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{ $slot }}

    </div>
</body>

</html>
