@extends('trainer.header')

 @section('header')

 <body>
    <style>
  </style>
    <table  id="tabb" class="table table-striped">
        <thead>


          <tr>
            <th scope="col">Reg:No</th>
            <th scope="col">Full Name</th>
            <th scope="col">Month Paid</th>
            <th scope="col">Date of Join</th>
            <th scope="col">Paid on</th>
            <th scope="col">Amount</th>
            <th scope="col">Payment id</th>
            <th scope="col">Razorpay id</th>


          </tr>
        </thead>
        <tbody>

            @foreach (\App\Models\Month::all() as $item)

          <tr>



            <td>GYM{{$item->user->id}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->month_and_year}}</td>
            <td>{{$item->user->created_at}}</td>
            <td>{{$item->date}}</td>
            <td>{{$item->user->amount}}</td>
            <td>{{$item->payment_id}}</td>
            <td>{{$item->razorpay_id}}</td>



          </tr>

          @endforeach


        </tbody>
      </table>
</body>
 @endsection
