@extends('Admin.header')

 @section('header')



   @include('layouts.adminsidenav')

    <div class="container">
        <div class="card">
          <div class="circle">
            <h1>1</h1>
          </div>
            <div class="content">
              <h2>
                click here to view users
              </h2>
              <a href="{{route('admin.regis')}}">Click here</a>
          </div>

        </div>
        <div class="card">
          <div class="circle">
            <h1>2</h1>
          </div>
            <div class="content">
              <h2>
                click here to view registered gym members
              </h2>
              <a href="{{route('admin.member')}}">Click here</a>
            </div>


        </div>
        <div class="card">
          <div class="circle">
            <h1>3</h1>
          </div>
            <div class="content">
              <h2>
                click here to view monthly fee details
              </h2>
              <a href="{{route('admin.monthly')}}">Click here</a>

          </div>

        </div>
       {{-- <div class="card">
            <div class="circle">
              <h1>3</h1>
            </div>
              <div class="content">
                <h2>
                  click here to add products
                </h2>
                <a href="{{route('admin.pro')}}">Click here</a>

            </div>

          </div>--}}
          <div class="card">
            <div class="circle">
              <h1>3</h1>
            </div>
              <div class="content">
                <h2>
                    Pending oders
                </h2>
                <a href="{{route('admin.pend')}}">Click here</a>

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
                <a href="{{route('admin.deliver')}}">Click here</a>

            </div>

          </div>
          <div class="card">
            <div class="circle">
              <h1>3</h1>
            </div>
              <div class="content">
                <h2>
                  Confim Products
                </h2>
                <a href="{{route('admin.prdconfirm')}}">Click here</a>

            </div>

          </div>

        <div>

        </div>


        </div>
        @endsection

