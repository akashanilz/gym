<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<h2>Three Equal Columns</h2>

<div class="row">
    @foreach ($request->product as $suppli)


  <div class="column" style="background-color:#aaa;">
    <img src="{{asset('uploads/productimages/'. $suppli->image)}}" alt="Avatar"  style="width:20%">
    <h2>{{$suppli->name}}</h2>
    <p>{{$suppli->price}}</p>
    <p>{{$suppli->discription}}</p>

    <div class="container">
  </div>


</div>
@endforeach
</div>

</body>
</html>
