<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Настолки Вэб</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->
        <style>
      body {  background-color: darkslategray;
             /* background: url('https://storge.pic2.me/cm/1920x1080/669/622a77b7360bd7.30049156.jpg');*/
             /* background-repeat: no-repeat;*/
             /* background-attachment: fixed;*/ /* Фиксируем фон веб-страницы */ }
    </style>
        
    </head>
    <body class="antialiased">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">
            <h2 style="color: bisque">Настолки Web</h2>
            <img src= "{{ URL::asset('resources/img/shop.svg')}}" alt="" width="30" height="24">
            </a>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="">Главная</a>
              </li>
              <li class="nav-item">

                <a class="nav-link" href="">Магазин</a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Категории</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Профиль</a>
              </li>
            </ul>
            
            </div>
            <img src= "{{ URL::asset('resources/img/kk.png') }}" alt="" width="40" height="40" style="float:right; margin: 0px 35px 0px 0px">
            <h3 style=" color: bisque; margin:0px 35px 0px 0px" >1000.00 </h3>
        </div>
       
    </nav>

    <div class="alert alert-danger mt-3" role="alert">
      Внимание! Это сообщение для разработчиков!
    </div>
    @yield('content')


    </body>
</html>
