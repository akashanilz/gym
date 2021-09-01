<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cal.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



    <title>Gym</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="#">
              <img src="images/logo.png" class="d-inline-block" alt="" loading="lazy">
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tid" aria-controls="tid" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="tid">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
              </li>

              {{--<li class="nav-item">
                <a class="nav-link" href="gallery.html"></a>
              </li>--}}
              @if (auth()->check())
              <li class="nav-item">
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    hi {{auth()->user()->name}}
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      @if (auth()->user()->register_check==0)
                      <a style="color: black !important;" class="dropdown-item" href="{{route('user.logout')}}">Logout</a>

                      @else
                      <a style="color: black !important;" class="dropdown-item" href="{{route('user.monthly')}}">Pay Monthly fees</a>
                      <a style="color: black !important;" class="dropdown-item" href="{{route('user.logout')}}">Logout</a>
                      @endif



                  </div>
                </div>
              </li>
              @if (auth()->user()->group==2)
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.traindash')}}">Dashboard</a>
              </li>
              @endif
              @if (auth()->user()->group==1)
              <li class="nav-item">
                <a class="nav-link" href="{{route('user.merdash')}}">Dashboard</a>
              </li>

              @endif

              @else
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('user.login')}}">Login</a>
                    </li>
                  @endif





              <li class="nav-item">
                  <a class="nav-link" href="{{ route('diet') }}">Diet</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('shoping')}}">Shop</a>
                  </li>


                {{--<li class="nav-item">
                    <div class="dropdown">
                      <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a style="color: black !important;" class="dropdown-item" href="#">Suppliments</a>
                        <a style="color: black !important;" class="dropdown-item" href="#">Accesories</a>

                      </div>
                    </div>
                  </li>--}}
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
          </div>

        </nav>

@yield('header')

        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Navigation</h3>
                            <ul>
                                <li><a href="#">Join</a></li>
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>About</h3>
                            <ul>
                                <li><a href="#">One</a></li>
                                <li><a href="#">Two</a></li>
                                <li><a href="#">Three</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>IRON GYM</h3>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam minima quia maiores ex adipisci natus vel harum dolore dolorem commodi! Sint fugiat quo non. Asperiores esse quas delectus modi earum?</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-instagram"></i></a><a href="#"><i class="fab fa-youtube"></i></a></div>
                    </div>
                    <p class="copyright">Company Name © 2020</p>
                </div>
            </footer>
        </div>
</body>
<script src="javascript/cal.js"></script>
<script src="javascript/index.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
<script src="javascript/index.js"></script>
<script src="https://pagead2.googlesyndication.com/pagead/js/r20210202/r20190131/show_ads_impl_fy2019.js" id="google_shimpl"></script><script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

</html>
