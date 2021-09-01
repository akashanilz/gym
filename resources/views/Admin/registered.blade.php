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



          </tr>
        </thead>
        <tbody>

            @foreach (\App\Models\User::all() as $item)
            @if ($item->register_check ==0)
          <tr>



            <td>GYM{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->mobile}}</td>



          </tr>
          @else

          @endif

          @endforeach


        </tbody>
      </table>
</body>
@endsection
