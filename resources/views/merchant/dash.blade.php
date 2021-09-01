@extends('merchant.header')

 @section('header')


 @include('merchant.sidenav')
 <div class="container">


    @include('sweetalert::alert')
    <div class="card">
        <div class="circle">
          <h1>3</h1>
        </div>
          <div class="content">
            <h2>
              click here to add products
            </h2>
            <a href="{{route('user.pro')}}">Click here</a>

        </div>

      </div>
      <div class="card">
        <div class="circle">
          <h1>3</h1>
        </div>
          <div class="content">
            <h2>
                Pending oders
            </h2>
            <a href="{{route('user.pend')}}">Click here</a>

        </div>

      </div>
      <div class="card">
        <div class="circle">
          <h1>3</h1>
        </div>
          <div class="content">
            <h2>
              Delivered Orders
            </h2>
            <a href="{{route('user.deliver')}}">Click here</a>

        </div>

      </div>
      <div class="card">
        <div class="circle">
          <h1>3</h1>
        </div>
          <div class="content">
            <h2>
              view products
            </h2>
            <a href="{{route('user.prdd')}}">Click here</a>

        </div>

      </div>

    <div>

    </div>


    </div>
 @endsection
