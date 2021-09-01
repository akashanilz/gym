@include('Admin.header')

@extends('layouts.adminsidenav')


 @section('sidenav')




    <style>
        .container
        {
            padding: 3% 0;
        }
        .heading{
            border:1px solid rgb(13, 35, 230);
            padding: .5%;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            margin-top: 1%;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px 20px;
            color: rgb(74, 231, 26);
        }
        #tittle,#summary,#des,#cat,#price,#Quan,#Brand,#stat{
            border: none !important;
        }
        label
        {
            color:red;
        }
        .fo
        {
            border-bottom: 1px solid rgb(13, 35, 230);
            border-radius: 2px;
        }
        .form-group
        {
            margin-top: 20px;
        }
        a{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="heading">
        <h3>Add Product</h3>
    </div>
    <div class="container">


        <form enctype="multipart/form-data" method="POST">
            @csrf
              <div class="form-group fo">
                <label for="tittle">Title Name</label>
                <input name="name" type="text" class="form-control" id="tittle" placeholder="Product name">
              </div>
              <div class="form-group fo">
                <label for="summary">Summary</label>
                <textarea name="summary" class="form-control" id="summary" rows="3"></textarea>
              </div>
              <div class="form-group fo">
                <label for="des">Description</label>
                <textarea name="disc" class="form-control" id="des" rows="3"></textarea>
              </div>
              <div class="form-group fo">
                <label for="cat">Category</label>
                <select name="category" class="form-control" id="cat">
                    <option  value="">SELECT</option>
                    @foreach (\App\Models\Category::all() as $catt)
                    <option value="{{$catt->id}}" >{{$catt->name}}</option>

                    @endforeach

                </select>
              </div>
              <div class="form-group fo">
                <label for="price">Price</label>
                <input name="price" type="text" class="form-control" id="price" placeholder="enter Price">
              </div>
              <div class="form-group fo">
                <label for="Quan">Quantity</label>
                <select name="quantity" class="form-control" id="Quan">
                  <option>Choose Quantity</option>
                  <option value="1 Lbs">1 Lbs</option>
                  <option value="2.5 Lbs">2.5 lbs</option>
                  <option value="3.5 Lbs">3 5 lbs</option>
                  <option value="5 Lbs">5. Lbs</option>
                </select>
              </div>
              <div class="form-group fo">
                <label for="Brand">Brand</label>
                <select name="brand" class="form-control" id="Brand">

                  <option value="">SELECT</option>
                  @foreach (\App\Models\Brand::all() as $brand)
                  <option value="{{$brand->id}}" >{{$brand->name}}</option>

                  @endforeach
                </select>
              </div>

            <div class="form-group">

                <label for="images1">Choose Image</label>
                <input name="image" type="file"  class="form-control-file" id="images1">


            </div>

            <div class="form-group fo">
                <label for="stat">Status</label>
                <select name="status" class="form-control" id="stat">
                  <option value="1">In stock</option>
                  <option value="0">Out of Stock</option>

                </select>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>

    </div>
</body>
@endsection
