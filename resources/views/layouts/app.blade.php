<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>

</head>
<body>
<div class="container-fluid">
    <div class="row" style="height: 100vh;">
    <div class="col-1 d-flex justify-content-around" style="transform-origin: 0 0; transform: scale(1);">
        <ul class="nav flex-column nav-pills align-items-center " >
            <li class="nav-item" >
                <img style="max-width: 6vh;" src="https://cdn-icons-png.flaticon.com/256/2370/2370264.png">
            </li>
            <br>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <br>
            <li class="nav-item">
                <a class="nav-link" href="#">Agendamentos</a>
            </li>
            <br>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <br>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        </div>
        <div class="col-11 d-flex justify-content-start flex-column align-items-center" style="background-color:rgb(32, 32, 32, 1);">
    @yield('content')
        </div>
    </div>
</body>
</html>