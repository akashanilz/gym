@extends('Admin.header')

 @section('header')




<body>
    <style>
  </style>
    <table  id="tabb" class="table table-striped">
        <thead>


          <tr>
            <th scope="col">Payment id</th>
            <th scope="col">Full Name</th>
            <th scope="col">Razorpay id</th>
            <th scope="col">Date</th>
            <th scope="col">View Details</th>



          </tr>
        </thead>
        <tbody>

            @foreach (\App\Models\Product::all() as $item)
            @if ($item->admin_confirm==0)



           
            <tr>



                <td>{{$item->name}}</td>
                <td>{{$item->discription}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>
                <td><img width="100px;" src="{{asset('uploads/productimages/'. $item->image)}}" alt=""></td>
                <td><a href="{{route('admin.prdconfirmm',$item->id)}}"> <button class="btn btn-secondary">Confirm</button></a> </td>




              </tr>

         
            @endif

          @endforeach


        </tbody>
      </table>
</body>
@endsection
