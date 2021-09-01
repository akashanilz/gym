<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


   <title>Torc Infotech</title>
</head>
<body>
    <style>
        .reg{
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 9%;
        }
        .reg h1{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 35px;
            text-align: center;
        }
        body{
            padding: 0;
            margin: 0;
            background-image:linear-gradient(rgba(255,255,255,0.2),rgba(255,255,255,0.3),rgba(255,255,255,0.4),#ff9933) ,url('/images/back.jpg');
            background-size: cover;
            min-height: 100vh;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 400px;
            background-color: rgba(0,0, 0, 0.8);
            padding: 40px;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0, 0, 0.7);
            border-radius: 10px;

        }
        .box h2{
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        .box .inputBox{
            position: relative;
        }
        .box .inputBox input{
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
            letter-spacing: 1px;
        }
        .box .inputBox label{
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 1rem;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        .box .inputBox input:focus ~ label,
        .box .inputBox input:valid ~ label
        {
            top: -18px;
            color: #03a9f4;
            left: 0;
            font-size: .9rem;

        }
        .box input[type="submit"]
        {
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        @media screen and (max-width:476px) {

              .box{
                width: 357px;
                padding: 30px;
              }

        }
    </style>
    {{--<div class="reg">
        <h1>GYM Registration</h1>
        <br><br>
    <form method="POST" >
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input  value="{{old('name')}}" type="name" class="form-control" name="name" id="inputName4" placeholder="Your Full Name">
                @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
              </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input  value="{{old('email')}}" type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
            @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Mobile</label>
            <input type="number"  value="{{old('mobile')}}" class="form-control" name="mobile" id="inputMobile4" placeholder="Enter Your Mobile Number">
            @if ($errors->has('mobile')) <p style="color:red;">{{ $errors->first('mobile') }}</p> @endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input value="{{old('password')}}" type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
            @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Confirm Password</label>
            <input  value="{{old('confirm_password')}}" type="password" class="form-control" name="confirm_password" id="inputPassword5" placeholder="Confirm Your Password">
            @if ($errors->has('confirm_password')) <p style="color:red;">{{ $errors->first('confirm_password') }}</p> @endif
          </div>
        </div>




<br>

<br>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
      <br>
      <a href="{{route('user.login')}}">Click here to login?</a>
    </div>
    <br>
    <br>
    <br>--}}




    <div class="box">
        <h2>Register</h2>
        <form method="POST">
            @csrf
            <div class="inputBox">

                <input  value="{{old('name')}}" type="name" class="form-control" name="name" id="inputName4" >
                @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
                <label for="">name</label>

            </div>
            <div class="inputBox">
                <input  value="{{old('email')}}" type="email" class="form-control" name="email" id="inputEmail4" >
                @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif
                <label for="">email</label>
            </div>
            <div class="inputBox">
                <input type="number"  value="{{old('mobile')}}" class="form-control" name="mobile" id="inputMobile4" >
                @if ($errors->has('mobile')) <p style="color:red;">{{ $errors->first('mobile') }}</p> @endif
                <label for="">mobile no:</label>
            </div>

            <div class="inputBox">
                <input value="{{old('password')}}" type="password" class="form-control" name="password" id="inputPassword4" >
                @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif
                <label for="">Password</label>
            </div>
            <div class="inputBox">
                <input  value="{{old('confirm_password')}}" type="password" class="form-control" name="confirm_password" id="inputPassword5" >
                @if ($errors->has('confirm_password')) <p style="color:red;">{{ $errors->first('confirm_password') }}</p> @endif
                <label for="">Confirm Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</body>
</html>
