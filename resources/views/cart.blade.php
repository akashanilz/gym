@extends('shop-header')
@section('head')



<body>
    <table class="table" style="text-align: center;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Remove</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>mm</td>
            <td><img class="tb-img" src="./12.jpg" width ="100px"  alt=""></td>
            <td>₹ 3000</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>
          <tr>
            <td>Bag</td>
            <td><img class="tb-img" src="./13.jpg" width ="100px"  alt=""></td>
            <td>₹ 1000</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>
          <tr>
            <td>Nitro</td>
            <td><img class="tb-img" src="./12.jpg" width ="100px"  alt=""></td>
            <td>₹ 3000</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>
          <tr>
            <td>Bag</td>
            <td><img class="tb-img" src="./13.jpg" width ="100px"  alt=""></td>
            <td>₹ 1000</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>
          <tr>
            <td>Nitro</td>
            <td><img class="tb-img" src="./12.jpg" width ="100px"  alt=""></td>
            <td>₹ 3000</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>
          <tr>
            <td>Bag</td>
            <td><img class="tb-img" src="./13.jpg" width ="100px"  alt=""></td>
            <td>₹ 1000</td>
            <td><button class="btn btn-danger">Remove</button></td>
          </tr>

        </tbody>
      </table>
      <div class="row text-center row-sec">
          <div class="col-md-6 col-sec">
            <p>Total price :</p>
          </div>
          <div class="col-md-6 col-sec">
            <button class="btn btn-primary btn-lg">Checkout</button>
          </div>
      </div>


</body>
@endsection
