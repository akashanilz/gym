<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>gym</title>

  </head>
<body>
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #03a9f4;
            transition: .5s;
        }

        .container {
            position: absolute;
            width: 800px;
            height: 550px;
            margin: 10px;


        }

        .blueBg {
            width: 100%;
            position: absolute;
            top: 40px;
            height: 500px;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 8px 10px 5px rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .blueBg .box {
            display: flex;
            width: 50%;
            height: 100%;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .blueBg .box h2 {
            color: #fff;
            font-size: 1.2rem;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .blueBg .box button {
            cursor: pointer;
            padding: 10px 20px;
            border: none;
            color: #333;
            background: #fff;
            font-size: 1rem;
            font-weight: 500;
        }

        .formBx {
            height: 100%;
            width: 50%;
            position: absolute;
            top: 0;
            left: 0;
            background: #fff;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0.25);
            transition: 0.5s ease-in-out;
            overflow: hidden;
        }

        .formBx.active {
            left: 50%;
        }

        body.active {
            background: #ff6600;;
        }

        .formBx .form {
            position: absolute;
            left: 0;
            padding: 50px;
            width: 100%;
            transition: .5s;
        }

        .formBx .signForm {
            transition-delay: .25s;
        }

        .formBx.active .signForm {
            left: -100%;
            transition-delay: 0s;
        }

        .formBx .signupForm {
            left: 100%;
            transition-delay: 0s;
        }

        .formBx.active .signupForm {
            left: 0;
            transition-delay: .25s;
        }

        .formBx .form form {
            width: 100%;
            display: flex;
            flex-direction: column;

        }

        .formBx .form form h3 {
            color: #333;
            font-size: 1.5rem;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .formBx .form form input {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            outline: none;
            font-size: 1rem;
            border: 1px solid #333;
        }

        .formBx .form form input[type="submit"] {
            color: #fff;
            background: #03a9f4;
            border: none;
            max-width: 100px;
            cursor: pointer;

        }

        .formBx .form form .forget {
            color: #333;
        }

        .formBx .signupForm form input[type="submit"] {
            background: #ff6600;
        }
    @media screen and (max-width:991px){
    .container {
            max-width: 400px;
            height: 650px;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .container .blueBg {
            top: 0;
            height: 100%;

        }

        .formBx {
            width: 100%;
            height: 500px;
            box-shadow: none;

        }

        .blueBg .box {
            position: absolute;
            width: 100%;
            height: 130px;
            bottom: 0;
        }

        .box.signin {
            top: 0;
        }

        .formBx.active {
            left: 0;
            top: 150px;
        }

        .formBx .signupForm {}
        }
    </style>

    {{--<div class="login">
        <h1 style="text-align: center" >Gym Login</h1>
        <br><br>
        @if ($errors->has('passwords')) <p style="color:red;">{{ $errors->first('passwords') }}</p> @endif <br>
    <form method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input value="{{old('email')}}" type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br>
      <a  href="{{route('user.signup')}}">Cick here to register?.</a>
    </div>--}}

    {{--<div class="box">
        <h2>Login</h2>

        <form method="POST" autocomplete="off">
            @csrf
            @if ($errors->has('passwords')) <p style="color:red;">{{ $errors->first('passwords') }}</p> @endif
            <div class="inputBox">

                <input autocomplete="off" required value="{{old('email')}}" type="name"  name="email"   >

                <label for="">Email address</label>
            </div>
            <div class="inputBox">
                <input required type="password" class="form-control" name="password" id="exampleInputPassword1" >

                <label for="">Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
        <br>
        <a  href="{{route('user.signup')}}">Cick here to register?.</a>
    </div>--}}
    @include('sweetalert::alert')
    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already have an account ?</h2>
                <button class="signInBtn">Sign In</button>
            </div>
            <div class="box signup">
                <h2>Don't have an account ?</h2>
                <button class="signupBtn">Sign Up</button>
            </div>

        </div>
        <div class="formBx">
            <div class="form signForm">
                <form action="{{ route('user.login') }}" id="" method="POST">
                    @csrf

                    <h3>Sign In</h3>
                    @if ($errors->has('passwords')) <p style="color:red;">{{ $errors->first('passwords') }}</p> @endif <br>
                    <input type="text" name="email" value="{{old('email')}}" placeholder="Email">
                    <input type="Password" name="password" placeholder="Password">
                    <input type="submit" >
                    <a href="#" class="forget">Forget Password</a>
                </form>
            </div>
            <div class="form signupForm">
                <form action="{{ route('user.signup') }}" method="POST">
                    @csrf
                    <h3>Sign Up</h3>
                    <input value="{{old('name')}}" type="text" required name="name" placeholder="Name">
                    @if ($errors->has('name')) <p style="color:red;">{{ $errors->first('name') }}</p> @endif
                    <input value="{{old('email')}}" type="email" required name="email" placeholder="Email">
                    @if ($errors->has('email')) <p style="color:red;">{{ $errors->first('email') }}</p> @endif
                    <input type="number" value="{{old('mobile')}}" required name="mobile" placeholder="Mobile number">
                    @if ($errors->has('mobile')) <p style="color:red;">{{ $errors->first('mobile') }}</p> @endif
                    <input type="Password" value="{{old('password')}}" required name="password" placeholder="Password">
                    @if ($errors->has('password')) <p style="color:red;">{{ $errors->first('password') }}</p> @endif
                    <input type="Password" value="{{old('confirm_password')}}" required name="confirm_password" placeholder="Confirm Password">
                    @if ($errors->has('confirm_password')) <p style="color:red;">{{ $errors->first('confirm_password') }}</p> @endif
                    <input type="submit" >

                </form>
            </div>

        </div>
    </div>

    <script>
        const signInBtn = document.querySelector('.signInBtn');
        const signupBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
        const body = document.querySelector('body')

        signupBtn.onclick = function () {
            formBx.classList.add('active')
            body.classList.add('active')
        }
        signInBtn.onclick = function () {
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
    </script>

</body>


</html>

