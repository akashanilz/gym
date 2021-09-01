
      <!DOCTYPE html>
      <html lang="en">

      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <style>
              * {
                  padding: 0;
                  margin: 0;
                  box-sizing: border-box;
              }

              body {
                  min-height: 100vh;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  background-color: rgba(0,0,0,0.1);
              }

              .container {
                  position: absolute;
                  width: 800px;
                  height: 500px;
                  margin: 10px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  top: 50px;

                  color: #fff;
              }

              .recp {
                  height: 100%;
                  width: 70%;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  flex-direction: column;
                  background-color: #333;
                  border-radius: 10px;
                  box-shadow: 0 5px 5px rgba(0,0,0,0.5);

              }

              .recp h1 {
                  font-size: 1.5rem;
                  margin-bottom: 30px;
                  margin-top: 30px;
                  text-shadow: 0 0 3px #ff6600, 0 0 5px #ff6600;
              }

              .recp p {
                  margin-bottom: 40px;
                  font-size: 1rem;
                  margin-top: 10px;
              }

              .recp a {
                  padding: 15px 70px;
                  background-color: green;
                  color: #fff;
                  text-decoration: none;

              }

              .recp a:hover {
                  text-decoration: none;
                  color: #fff;
              }

              .recp button {
                  margin-bottom: 40px;
              }

              .para {
                  text-align: center;
                  text-shadow: 0 0 3px #ff6600, 0 0 5px #ff6600;
              }

              .para i {
                  padding-top: 8px;
                  font-size: 2rem;
                  color:#ff6600;
                  text-shadow: none;
              }
              .bounce-bottom {
                  -webkit-animation: bounce-bottom 2s ease-in-out infinite both;
                          animation: bounce-bottom 2s ease-in-out infinite both;
              }

              @keyframes bounce-bottom {
                  0% {
                  -webkit-transform: translateY(30px);
                          transform: translateY(30px);
                  -webkit-animation-timing-function: ease-in;
                          animation-timing-function: ease-in;
                  opacity: 1;
                  }
                  24% {
                  opacity: 1;
                  }
                  40% {
                  -webkit-transform: translateY(24px);
                          transform: translateY(24px);
                  -webkit-animation-timing-function: ease-in;
                          animation-timing-function: ease-in;
                  }
                  65% {
                  -webkit-transform: translateY(12px);
                          transform: translateY(12px);
                  -webkit-animation-timing-function: ease-in;
                          animation-timing-function: ease-in;
                  }
                  82% {
                  -webkit-transform: translateY(6px);
                          transform: translateY(6px);
                  -webkit-animation-timing-function: ease-in;
                          animation-timing-function: ease-in;
                  }
                  93% {
                  -webkit-transform: translateY(4px);
                          transform: translateY(4px);
                  -webkit-animation-timing-function: ease-in;
                          animation-timing-function: ease-in;
                  }
                  25%,
                  55%,
                  75%,
                  87% {
                  -webkit-transform: translateY(0px);
                          transform: translateY(0px);
                  -webkit-animation-timing-function: ease-out;
                          animation-timing-function: ease-out;
                  }
                  100% {
                  -webkit-transform: translateY(0px);
                          transform: translateY(0px);
                  -webkit-animation-timing-function: ease-out;
                          animation-timing-function: ease-out;
                  opacity: 1;
                  }
              }
              @media screen and (max-width:991px){
                  .container{
                      width: 100%;
                  }
                  .recp{
                      width: 90%;
                  }
                  .recp p{
                      text-align: center;
                  }
              }
          </style>

      </head>


      <body>
        <div class="container">
          <div class="recp">
              <h1>Thank You {{$user->user->name}}!</h1>
              <p>Your payment was succesful</p>
              <a href="{{route('user.ppdf',$user->id)}}"><i class="fas fa-download"></i> &nbsp;Download Pdf</a>
              <br>
              <a style="background-color: red" href="{{route('home')}}"><i ></i> Go to home</a>


              <p>have a trouble.Contact Us</p>



          </div>
      </div>
      <script src="https://kit.fontawesome.com/3e9cd5b5ed.js"></script>
      </body>

      </html>
