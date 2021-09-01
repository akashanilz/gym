<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>



    <title>Document</title>
</head>
<body>
    <style>
        body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #8C9EFF;
    background-repeat: no-repeat
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 10%;
}
.card {
    z-index: 0;
    background-color: #ECEFF1;
    padding-bottom: 20px;
    margin-top: 90px;

    margin-bottom: 90px;
    border-radius: 10px
}

.top {
    padding-top: 40px;
    padding-left: 13% !important;
    padding-right: 13% !important
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: #455A64;
    padding-left: 0px;
    margin-top: 30px
}

#progressbar li {
    list-style-type: none;
    font-size: 13px;
    width: 25%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar .step0:before {
    font-family: FontAwesome;
    content: "\f10c";
    color: #fff
}

#progressbar li:before {
    width: 40px;
    height: 40px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    background: #C5CAE9;
    border-radius: 50%;
    margin: auto;
    padding: 0px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 12px;
    background: #C5CAE9;
    position: absolute;
    left: 0;
    top: 16px;
    z-index: -1
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    position: absolute;
    left: -50%
}

#progressbar li:nth-child(2):after,
#progressbar li:nth-child(3):after {
    left: -50%
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    position: absolute;
    left: 50%
}

#progressbar li:last-child:after {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px
}

#progressbar li:first-child:after {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #651FFF
}

#progressbar li.active:before {
    font-family: FontAwesome;
    content: "\f00c"
}

.icon {
    width: 60px;
    height: 60px;
    margin-right: 15px
}

.icon-content {
    padding-bottom: 20px
}

@media screen and (max-width: 992px) {
    .icon-content {
        width: 50%
    }
}
    </style>

@include('sweetalert::alert')
@forelse ($user as $item)


@if ($item->status==1)




<div class="container px-1 px-md-4 py-5 mx-auto">
    <div class="card">
        <div class="row d-flex justify-content-between px-3 top">
            <div class="d-flex">
                <h5>ORDER <span class="text-primary font-weight-bold">{{$item->payment_id}}</span></h5>
            </div>
            <div class="d-flex flex-column text-sm-right">
                <p class="mb-0"> <span></span></p>
                <p> Total Price <span class="font-weight-bold">{{$item->total}}</span></p>
            </div>
        </div> <!-- Add class 'active' to progress -->
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <ul id="progressbar" class="text-center">
                    @if ($item->oder_confirm==0)
                    <li class="step0"></li>
                    @else
                    <li class="active step0"></li>
                    @endif
                    @if ($item->oder_packed==0)
                    <li class="step0"></li>
                    @else
                    <li class="active step0"></li>
                    @endif
                    @if ($item->oder_shipped==0)
                    <li class="step0"></li>
                    @else
                    <li class="active step0"></li>
                    @endif

                    @if ($item->oder_delivered==0)
                    <li class="step0"></li>
                    @else
                    <li class="active step0"></li>
                    @endif

                </ul>
            </div>
        </div>
        <div class="row justify-content-between top">
            <div class="row d-flex icon-content"> <img class="icon" src="{{ asset('images/im2.png') }}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Confirmed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="{{ asset('images/im1.png') }}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Packed</p>
                </div>
            </div>
            <div class="row d-flex icon-content"> <img class="icon" src="{{ asset('images/im2.png') }}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Shipped</p>
                </div>
            </div>

            <div class="row d-flex icon-content"> <img class="icon" src="{{ asset('images/im4.png') }}">
                <div class="d-flex flex-column">
                    <p class="font-weight-bold">Order<br>Delivered</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
@empty

    <p style="text-align: center; font-size:30px;">No Orders</p>
    <img class="center" src="{{ asset('images/broke.png') }}" width="50" alt="">

@endforelse




</body>
</html>
