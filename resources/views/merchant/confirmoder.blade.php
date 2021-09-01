@extends('merchant.header')

 @section('header')



<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Torc</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="" style="width:100%; max-width:300px;">
                            </td>

                            <td>
                                {{$data->date}}
                               <br>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                GYM.<br>
                                <br>

                            </td>



                            <td>

                             Gym<br>


                            </td>

                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Payment Method
                </td>

                <td>
                 Online Transaction
                </td>
            </tr>

            <tr class="details">

                <td>
                    Name:
                   </td>

                <td>
                   {{$data->user->name}}
                </td>
            </tr>
            <tr class="details">

                <td>
                    Address:
                   </td>

                <td>
                   {{$data->address}}
                </td>
            </tr>
            <tr class="details">

                <td>
                    Mobile number:
                   </td>

                <td>
                   {{$data->mobile}}
                </td>
            </tr>



            @foreach ($data->product as $user)
            @if ($user['merchant_id']==auth()->user()->id)
            <tr class="heading">
                <td>
                    Product
                </td>

                <td>
                    Price
                </td>
            </tr>

            <tr class="item">

                <td>
                    {{$user['name']}}
                </td>
                <td>
                    {{$user['price']}}
                </td>


            </tr>

              @endif
            @endforeach

            {{--<tr class="total">
                <td>Grand Total</td>

                <td>
                    {{$data->total}}
                </td>
            </tr>--}}
            <br>

        </table>


       {{-- @if ($data->oder_confirm==0)
<form method="POST" action="{{route('user.confirm',$data->id)}}" >
    @csrf
    <input type="hidden" name="oder" value="{{$data->id}}">
    <input type="hidden" name="val" value="0">
<button type="submit" class="btn btn-success">Confirm Oder</button>
</form>
@endif--}}


{{--@if ($data->oder_delivered==0)
<form method="POST" action="{{route('user.confirm',$data->id)}}" >
    @csrf
    <input type="hidden" name="oder" value="{{$data->id}}">
    <input type="hidden" name="val" value="4">
<button type="submit" class="btn btn-dark">Oder delivered</button>
</form>
@endif--}}
@if ($data->oder_confirm==0)
<form method="POST" action="{{route('user.confirm',$data->id)}}" >
    @csrf
    <input type="hidden" name="oder" value="{{$data->id}}">
    <input type="hidden" name="val" value="0">
<button type="submit" class="btn btn-success">Confirm Oder</button>
</form>
@endif
<br>
@if ($data->oder_confirm==1)
  <p style="color: red">Oder Confirmed</p>
@endif

<br>

@if ($data->oder_packed==0)
<form method="POST" action="{{route('user.confirm',$data->id)}}" >
    @csrf
    <input type="hidden" name="oder" value="{{$data->id}}">
    <input type="hidden" name="val" value="1">
<button type="submit" class="btn btn-primary">Oder packed</button>
</form>
@endif
<br>
@if ($data->oder_packed==1)
  <p style="color: rgb(38, 0, 255)">Oder packed</p>
@endif
<br>

@if ($data->oder_shipped==0)
<form method="POST" action="{{route('user.confirm',$data->id)}}" >
    @csrf
    <input type="hidden" name="oder" value="{{$data->id}}">
    <input type="hidden" name="val" value="2">
<button type="submit" class="btn btn-danger">Oder shipped</button>
</form>
@endif
<br>
@if ($data->oder_shipped==1)
  <p style="color: rgb(218, 214, 3)" >Oder Shipped </p>
@endif
<br>
@if ($data->oder_out_for_delivery==0)
<form method="POST" action="{{route('user.confirm',$data->id)}}" >
    @csrf
    <input type="hidden" name="oder" value="{{$data->id}}">
    <input type="hidden" name="val" value="3">
<button type="submit" class="btn btn-warning">Oder out for delevery</button>
</form>
@endif
<br>
@if ($data->oder_out_for_delivery==1)
  <p style="color: rgb(1, 150, 187)" >Oder is out for delivery </p>
@endif

@if ($data->oder_delivered==0)
<form method="POST" action="{{route('user.confirm',$data->id)}}" >
    @csrf
    <input type="hidden" name="oder" value="{{$data->id}}">
    <input type="hidden" name="val" value="4">
<button type="submit" class="btn btn-dark">Oder delivered</button>
</form>
@endif
<br>
@if ($data->oder_delivered==1)
  <p style="color: rgb(1, 175, 1)" >Oder delivered </p>
@endif

<br>




    </div>
</body>
</html>
@endsection
