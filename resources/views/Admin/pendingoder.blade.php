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
            <th scope="col">Date </th>
            <th scope="col">View Details</th>



          </tr>
        </thead>
        <tbody>

            @foreach (\App\Models\Oder::all() as $item)







            @if ($item->oder_delivered !==1)




            <tr>



                <td>GYM{{$item->payment_id}}</td>
                <td>{{$item->user->name}}</td>
                <td>{{$item->razorpay_id}}</td>
                <td>{{$item->date}}</td>
                <td><a href="{{route('admin.confirm',$item->id)}}"> <button class="btn btn-secondary">Full details</button></a> </td>




              </tr>

            @endif
           


          @endforeach


        </tbody>
      </table>
</body>
@endsection
