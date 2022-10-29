<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>404</title>
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="container mt-3">
    <div class="position-absolute top-50 start-50 translate-middle img-fluid mt-5">
   <img src="{{ asset('img/page_not_found.jpg') }}" 
   width="500px" heigth="500px" 
   class="img-fluid"
   alt="">
    </div>
    <div class="d-grid gap-2 col-6 mx-auto mt-4">
        <a class="btn btn-primary btn-lg" href="{{ route('series.index') }}" role="button">Home</a>
    </div>
</body>
</html>