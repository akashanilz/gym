
            <!DOCTYPE html>
            <html>
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
            height: 80%;
            width: 50%;
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
        .recp h1{
            font-size: 2.2rem;
            text-shadow: 0 0 3px #ff6600, 0 0 5px #ff6600;
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
            .recp h1{
                font-size: 1.6rem;
            }
        }
            </style>
            </head>
            <body>

            <h2 style="text-align: center">Gym Payment Gateway</h2>
            <br><br>
            <div class="container">

                <div class="recp">
                    <h1>Gym Payment Gateway</h1>
                    <h2>Pay fees of {{$date}}</h2>
                    <p class="para">Click below to pay <br><i class="far fa-hand-point-down bounce-bottom"></i></p>
                    <form action="{{route('user.paymonth')}}" method="POST">
                        <input type="hidden" name="user_id" value="{{$user->id}}">

                        <input type="hidden" name="date" value="{{$date}}">
                        <script     src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_IHMVXVPgvdVv7Q"
                        Enter the Test API Key ID generated from Dashboard → Settings → API Keys    data-amount="{{$user->amount*100}}"
                        Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
                           data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
                           //Replace with the order_id generated by you in the backend.

                               data-name="Gym"    data-description="Payment"
                                  data-image=""    data-prefill.name="{{$user->name}}"  data-prefill.contact="{{$user->mobile}}"  data-prefill.email="{{$user->email}}"
                                    data-theme.color="#363945" ></script><input type="hidden" custom="Hidden Element" name="hidden" id="{{$user->id}}" >

                                </form>




                </div>
            </div>
            <script src="https://kit.fontawesome.com/3e9cd5b5ed.js"></script>


            </body>
            </html>

