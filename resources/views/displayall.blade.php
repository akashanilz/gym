<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .card {
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
          transition: 0.3s;
          width: 40%;
        }

        .card:hover {
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
          padding: 2px 16px;
        }
        </style>



        @foreach ($request as $item)


        @if ($item->product->count())
        @foreach ($item->product as $product)


    <div class="card">
        <img src="{{asset('uploads/productimages/'. $product->image)}}" alt="Avatar" style="width:20%">
        <div class="container">
          <h4><b>Name:{{$product->name}}</b></h4>

          <p>Price:Rs.{{$product->price}}</p>
          <p>Details:{{$product->discription}}</p>


          <p>Brand:{{$product->brand->name}}</p>
          <p>Seller:{{$product->merchant->name}}</p>

        </div>
      </div>
      @endforeach
      @endif
      @endforeach

</body>
</html>
