@extends('shop-header')
@section('head')

<br>
@include('sortby')
<style>
    .card{
        border: none !important;
    }
   .card:hover
   {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
   }
    .car-img
    {
        width: 50%;
        margin-left: auto;
        margin-right: auto;
        padding-top: 3%;
    }
    .card-tit
    {
        color: #000;

    }
    .card-tit:hover
    {
        text-decoration: none;
        color: #000;
    }
    .card-text i{
        color: rgb(236, 214, 14);
    }
    .off
    {
        font-size:.8rem;
        color: rgb(18, 238, 165);
        font-style: italic;
    }
</style>
</head>
<body>
<div class="container-fluid">
    <div class="row text-center p-3">

        @foreach ($group as $item)

        @if ($item->admin_confirm==1)

        <div class="col-lg-3 col-md-4 col-sm-6 p-3">
            <div class="card" style="width: 18rem;">
                <a href="" class="card-tit">
                <img src="{{asset('uploads/productimages/'. $item->image)}}" class="car-img" alt="...">
                </a>
                <div class="card-body">
                <a href="" class="card-tit">
                  <h5 class="card-title">{{$item->name}}</h5>
                </a>
                  <p class="card-text">
                    {{$item->quantity}}<br>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                     <span>&nbsp;(1000)</span>
                     <br>
                     ₹{{$item->price}}<span class="off"></span>
                     <span></span>
                  </p>
                  {{--<a href="#" class="btn btn-primary"><i class="bi bi-cart-check"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg></i>
                  Buy
                  </a>--}}
                  <br>
                  @if (auth()->user())
                  <form action="{{route('carting')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="product_id">
                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                <button type="submit" class="btn btn-primary"><i class="bi bi-cart4"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg></i> Add to cart</button>
              </form>
                  @else

                  <a href="{{route('user.login')}}" type="submit" class="btn btn-primary"><i class="bi bi-cart4"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                  </svg></i> Add to cart</a>
                  @endif

                </div>
              </div>
        </div>
        @endif
        @endforeach

        </div>


    </div>
</div>
@endsection

