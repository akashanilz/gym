@extends('Admin.header')

 @section('header')



   @include('layouts.adminsidenav')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            background: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.9),rgba(0,0,0,0.9),rgba(0,0,0,0.9),rgb(209, 158, 90));
        }
        .container
        {

            min-height: 100vh;
        }
        .heading
        {
            color:#fff;
            text-align: center  ;
            text-transform: uppercase;
        }
        .ss
        {

            border: 3px solid transparent;
            border-image: linear-gradient(to right, green, lightgreen);
            border-image-slice: 1;

            padding: 2%;
            background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2));
            color: #fff !important;

        }
        .form-group,.form-row
        {
            margin-top: 17px;
        }
        @media only screen and (max-width: 600px)
        {
            .ss
            {

                border: none;
            }
            .container
            {
                padding: 7%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-6 mx-auto ss">
            <div class="heading">
                <h3>Add Trainer</h3>
            </div>
            <form method="POST">
                @csrf
                <div class="form-row">
                    <div class="col">
                      <input type="text" name="name" class="form-control" placeholder="Full name">
                    </div>

                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" class="form-control" id="age">
                  </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="height">Height</label>
                      <input type="text" name="height" class="form-control" id="height">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="weight">Weight</label>
                      <input type="text" name="weight" class="form-control" id="weight">
                    </div>
                  </div>
                  {{--<div class="form-group">
                    <div class="form-check">
                      <input name="prevexp" value="1" class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Previous Expeience
                      </label>
                    </div>
                  </div>--}}
                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <input name="email" type="email" class="form-control" id="Email1">

                  </div>
                  <div class="form-group">
                    <label for="Password">Password</label>
                    <input name="password" type="password" class="form-control" id="Password">
                  </div>
                  <div class="form-group">
                    <label for="cPassword">Confirm Password</label>
                    <input name="cpassword" type="password" class="form-control" id="cPassword">
                  </div>
                  <input type="hidden" name="group" value="2">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>

            </form>

        </div>
    </div>
</body>
</html>
@endsection
