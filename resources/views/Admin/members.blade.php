@extends('Admin.header')

 @section('header')



  
<body>
    <style>

    </style>
    <table class="table table-striped">
        <thead>


          <tr>
            <th scope="col">Reg:No</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email </th>
            <th scope="col">Mobile</th>

            <th scope="col">Address</th>
            <th scope="col">Weight</th>

            <th scope="col">Height</th>
            <th scope="col">Amount</th>
            <th scope="col">Health Issue</th>
            <th scope="col">Age</th>

            <th scope="col">Date of join</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Payment Id</th>
            <th scope="col">Razorpay Id</th>

          </tr>
        </thead>
        <tbody>
            @foreach (\App\Models\User::all() as $item)
@if ($item->register_check ==1)


          <tr>
            <td>GYM{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->mobile}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->weight}}</td>
            <td>{{$item->height}}</td>
            <td>{{$item->amount}}</td>

            <td>{{$item->health}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->date}}</td>
            @if ($item->payment_done == 0)
            <td style="color: red">Not Paid</td>

            @else
            <td style="color: rgb(3, 148, 64)">Paid</td>
            @endif

            <td>{{$item->payment_id}}</td>
            <td>{{$item->razorpay_id}}</td>

          </tr>
          @endif

          @endforeach

        </tbody>
      </table>
</body>
@endsection
