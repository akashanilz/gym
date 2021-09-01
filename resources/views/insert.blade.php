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
    <title>Document</title>
</head>
<body>
<div style="text-align: center" class="form">
    <h1 style="text-align: center">Insert product</h1>

 <form method="POST"  enctype="multipart/form-data">
     @csrf
<input name="name" type="text" placeholder="product name">
<input class="btn btn-primary" name="image" type="file" placeholder="upload">

<select  name="supplement">
    <option value="">SELECT</option>
    @foreach (\App\Models\Supplement::all() as $suppli)
    <option value="{{$suppli->id}}" >{{$suppli->name}}</option>

    @endforeach
</select>
<select name="material">
    <option value="">SELECT</option>
    @foreach (\App\Models\Material::all() as $material)
    <option value="{{$material->id}}" >{{$material->name}}</option>

    @endforeach
</select>
<select name="brand">
    <option value="">SELECT</option>
    @foreach (\App\Models\Brand::all() as $brand)
    <option value="{{$brand->id}}" >{{$brand->name}}</option>

    @endforeach
</select>
<select name="merchant">
    <option value="">SELECT</option>
    @foreach (\App\Models\Merchant::all() as $merchant)
    <option value="{{$merchant->id}}" >{{$merchant->name}}</option>

    @endforeach
</select>
<input name="discription" type="text" placeholder="discription">
<input name="price" type="text" placeholder="price">
<input name="quantity" type="text" placeholder="Quantity(in Gram & KG)">
<a type="submit"><button>Submit</button></a>

 </form>
</div>



<div style="text-align: center" class="form" >
    <h1 style="text-align: center">Insert Supplement</h1>

 <form method="POST" action="{{route('suppliinsert')}}" >
     @csrf
<input name="name" type="text" placeholder="Spplement name">


<a type="submit"><button>Submit</button></a>

 </form>
</div>


<div style="text-align: center" class="form" >
    <h1 style="text-align: center">Insert Brands</h1>

 <form method="POST" action="{{route('brandinsert')}}" >
     @csrf
<input name="name" type="text" placeholder="Brand name">


<a type="submit"><button>Submit</button></a>

 </form>
</div>


<div style="text-align: center" class="form" >
    <h1 style="text-align: center">Insert Material</h1>

 <form method="POST" action="{{route('materialinsert')}}" >
     @csrf
<input name="name" type="text" placeholder="Material name">


<a type="submit"><button>Submit</button></a>

 </form>
</div>

<div style="text-align: center" class="form" >
    <h1 style="text-align: center">Insert Merchant</h1>

 <form method="POST" action="{{route('merchantinsert')}}" >
     @csrf
<input name="name" type="text" placeholder="Material name">


<a type="submit"><button>Submit</button></a>

 </form>
</div>


<a  href="{{route('display')}}">Display all</a>

<a href="{{route('suppli')}}">Suppliments</a>




<!-- Default dropright button -->
<div style="text-align: center" class="btn-group dropright">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Suppliments
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach (\App\Models\Supplement::all() as $suppliment)
        <a class="dropdown-item" href="{{route('items',$suppliment->id)}}">{{$suppliment->name}}</a>
        @endforeach
      </div>
  </div>


</body>
</html>
