<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      body {  background-color: darkslategray;
              background: url('https://storge.pic2.me/cm/1920x1080/669/622a77b7360bd7.30049156.jpg');
             /* background-repeat: no-repeat;*/
             /* background-attachment: fixed;*/ /* Фиксируем фон веб-страницы */ }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="{{ URL::asset('resources/js/jquery.min.js') }}" ></script>
     <script src="{{ URL::asset('resources/js/bootstrap.min.js') }}" ></script> 
     <link href="{{ URL::asset('resources/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ URL::asset('resources/css/starter-template.css') }}" rel="stylesheet" type="text/css">
     <link href="{{ URL::asset('resources/css/custom.css') }}" rel="stylesheet" type="text/css">
    
  
    <title>Главная</title>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand">
            <h2 style="color: bisque">Рататуй</h2>
            <img src= "{{ URL::asset('resources/img/shop.svg') }}" alt="" width="30" height="24">
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
            <h3 style="margin:0px 35px 0px 0px" >1000.00 </h3>
        </div>
       
    </nav>

    <div class="alert alert-danger mt-3" role="alert">
      Внимание! Это сообщение для разработчиков!
    </div>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>