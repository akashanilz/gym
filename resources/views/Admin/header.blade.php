<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('adminsidenav.css')}}">
    <link rel="stylesheet" href="{{asset('style/admin/dash.css')}}">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <nav id="navbar1"  class="navbar sticky-top navbar-expand-lg navbar-light bg-danger">
        <img src="" width="25px";>
        <a class="navbar-brand" id="text1" href="{{ route('home') }}">GYM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="collapse navbar-collapse" class="text" id="navbarNavDropdown">
          <ul class="navbar-nav">

           @if (auth()->check())

           <li class="nav-item">
            <a id="text" class="nav-link">hi {{(auth()->user()->name)}}</a>
          </li>
           @else
           <li class="nav-item">
            <a id="text" class="nav-link"  href="">Login</a>
          </li>
           @endif
           <li class="nav-item active">
            <a id="text" class="nav-link" href="">Home <span class="sr-only"></span></a>
          </li>

            <li class="nav-item">
              <a  id="text" class="nav-link" href="{{route('admin.logout')}}">Logout</a>
            </li>
           <!-- <li class="nav-item dropdown">
              <a id="text" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catagories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="#">Electronics </a>
                <a class="dropdown-item" href="#">Home Appliances</a>
                <a class="dropdown-item" href="#">Fashion</a>

              </div>
            </li>-->

            {{--<li class="nav-item dropdown">

                <a id="text" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">


                <a class="dropdown-item" href="" >hai</a>
                <a class="dropdown-item" href="" >hai</a>
                  </div>

            </li>--}}




          </ul>









        </div>


      </nav>
      @yield('header')
</body>
</html>
