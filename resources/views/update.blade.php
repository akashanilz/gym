<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input name="name" type="text" class="form-control" value="{{$update->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Upload Image</label>
            <input name="image" type="file" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input name="price" type="text" class="form-control" value="{{$update->price}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="price">

          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">discription</label>
            <input name="discription" type="text" class="form-control" value="{{$update->discription}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="discription">

          </div>

          <div class="form-group">
            Supplement
          <select name="supplement">
              <option value="{{$update->supplement->id}}">{{$update->supplement->name}}</option>
              @foreach (\App\Models\Supplement::all() as $supplement)
              <option value="{{$supplement->id}}" >{{$supplement->name}}</option>

              @endforeach
          </select>
        </div>


        <div class="form-group">
            Brand
          <select name="brand">
              <option value="{{$update->brand->id}}">{{$update->brand->name}}</option>
              @foreach (\App\Models\Brand::all() as $brand)
              <option value="{{$brand->id}}" >{{$brand->name}}</option>

              @endforeach
          </select>
        </div>

        <div class="form-group">
            Merchant
          <select name="merchant">
              <option value="{{$update->merchant->id}}">{{$update->merchant->name}}</option>
              @foreach (\App\Models\Merchant::all() as $merchant)
              <option value="{{$merchant->id}}" >{{$merchant->name}}</option>

              @endforeach
          </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Quantity</label>
            <input name="quantity" type="text" class="form-control" value="{{$update->quantity}}" id="exampleInputPassword1" placeholder="quantity">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
