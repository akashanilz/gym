@extends('shop-header')
@section('head')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style1.css">
    <title>Document</title>
</head>
<body>
    <style>
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}
    </style>
       @if (auth()->user()->cart->count() >0)
    <table class="table" style="text-align: center;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
              @foreach ($carts->cart as $tt=> $cart)

<td>{{ $tt+1 }}</td>
            <td>{{$cart->product->name}}</td>
            <td><img class="tb-img" src="{{asset('uploads/productimages/'. $cart->product->image)}}" width ="100px"  alt=""></td>
            <td>₹ {{$cart->product->price}}</td>
            <td><a  onclick="return confirm('Are you sure?')" href="{{route('cartdel',$cart->id)}}"><button  class="btn btn-danger">Remove</button></td></a>
          </tr>
          @endforeach

        </tbody>
      </table>

     <div class="row text-center bg bg-secondary">
        <div class="col-md-6 col-sec">
          <p>Total price : ₹ {{auth()->user()->cart->sum(function($cart){
              return $cart->product->price;
          })
          }}</p>
        </div>



        <div class="col-md-6 col-sec">
            <a href="{{route('checking',auth()->user()->id)}}"> <button class="btn btn-success btn-lg">Checkout</button></a>
           </div>



    </div>
    @else
    <img class="center" src="{{ asset('images/box.svg') }}"/>
    <h1 style="text-align: center">Cart is empty</h1>
    @endif


</body>
</html>
@endsection
