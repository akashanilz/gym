@extends('shop-header')
@section('head')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">



    <!-- Bootstrap core CSS -->



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">

    <h2>Order summery</h2>
    <p class="lead">Oder will be delivered to the below details</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">

      {{--<button type="button" class="btn btn-primary">
      Items <span class="badge badge-light">{{auth()->user()->cart->count()}}</span>
      </button>--}}
      <ul class="list-group mb-3">
          @foreach ($carts->cart as $item)


        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{$item->product->name}}</h6>
           <img width="50px;" src="{{asset('uploads/productimages/'. $item->product->image)}}" alt="">
          </div>
          <span class="text-muted">₹ {{$item->product->price}}</span>
        </li>
        @endforeach
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input name="total" value="Total Price:₹  {{auth()->user()->cart->sum(function($cart){
            return $cart->product->price;
        })}}" type="text" class="form-control" readonly >
          <div class="input-group-append">

          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form method="POST" >
          @csrf
          <input type="hidden" name="total" value="{{auth()->user()->cart->sum(function($cart){
            return $cart->product->price;
        })}}">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="{{auth()->user()->name}}" value="" readonly>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Email</label>
            <input type="text" class="form-control" id="lastName" placeholder="Email" value="{{auth()->user()->email}}" readonly>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>


        <div class="mb-3">
            <div class="col-md-6 mb-3">
                <label for="lastName">Mobile</label>
                <input type="number" class="form-control" id="lastName" name="mobile" placeholder="Mobile" value="{{auth()->user()->mobile}}" required >
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
          <label for="address">Address</label>
          <input type="text" class="form-control"  placeholder="Address" name="address" value="{{auth()->user()->address}}" required >
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>
<input type="hidden" name="user" value="{{auth()->user()->id}}">

        <div class="row">


          <div class="col-md-3 mb-3">
            <label for="zip">Pin</label>
            <input type="text" class="form-control" id="zip" placeholder="Pincode" required>
            <div class="invalid-feedback">
              Pin code required.
            </div>
          </div>
        </div>
        <hr class="mb-4">

        <hr class="mb-4">




        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Confirm order and pay </button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>

</html>

@endsection
