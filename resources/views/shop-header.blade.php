<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="">
    <title>Document</title>

</head>
<body>
<style>.badge:after{
    content:attr(value);
    font-size:12px;
    background: rgb(255, 253, 252);
    border-radius:50%;
    padding:3px;
    position:relative;
    left:-8px;
    top:-10px;
    opacity:0.9;
    }</style>

        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <a class="navbar-brand" href="{{ route('shoping') }}">Shoping cart</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ALL PRODUCTS
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      @foreach (\App\Models\Category::all() as $ass)
                      <a class="dropdown-item" href="{{route('cats',$ass->id)}}">{{$ass->name}}</a>
                      @endforeach
                      <a class="dropdown-item" href="{{route('shoping')}}">All products</a>
                    </div>
                  </div>
                </li>
              </ul>
              @if (auth()->check())
              <ul>
                <a class="navbar-brand" href="{{route('user.oder',auth()->user()->id)}}">My Oder</a>
              </ul>
              @endif

              @if (auth()->check())
              <a  style="color: rgb(255, 0, 47)" class="bg bg-secondary" href="{{route('carts',auth()->user()->id)}}">    <i class="fa badge" style="font-size:24px" value="{{auth()->user()->cart->count()}}">&#xf07a;</i></a>



               @else
               <a  style="color: rgb(255, 0, 47)" class="counter" href="{{route('user.login')}}">
                <i class="fa badge" style="font-size:24px" value="0">&#xf07a;</i>
                 </a>
               @endif
            </div>
          </nav>


  @yield('head')

     <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" ></script>

</body>
</html>
