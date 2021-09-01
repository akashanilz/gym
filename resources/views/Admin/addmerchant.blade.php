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
            top:5px;
            padding: 2%;
            background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2));
            color: #fff !important;

        }
        @media only screen and (max-width: 600px)
        {
            .ss
            {
                top: 39px;
                border: none;
            }

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-6 mx-auto ss">
            <div class="heading">
                <h3>Add Merchant</h3>
            </div>
            <form method="POST">
                @csrf
                
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
                  <div class="form-group">
                    <label for="tittle">Company</label>
                    <input name="company" type="text" class="form-control" id="tittle" placeholder="Company name">
                  </div>
                  <div class="form-group">
                    <label for="tittle">Company Details</label>
                    <input name="company_details" type="text" class="form-control" id="tittle" placeholder="Compant Details">
                  </div>
                  <input type="hidden" name="group" value="1">
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>

        </div>
    </div>
</body>
</html>
@endsection
