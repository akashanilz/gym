@extends('merchant.header')

 @section('header')



<body>
    <style>
  </style>
    <table  id="tabb" class="table table-striped">
        <thead>


          <tr>
            <th scope="col">Payment id</th>
            <th scope="col">Full Name</th>

            <th scope="col">Date</th>
            <th scope="col">View Details</th>



          </tr>
        </thead>
        <tbody>

           
                
          
                
              @foreach ($ss as $item)
                  
            {{$item}}
          
            <tr>


                
               {{-- <td>GYM{{$item->name}}</td>
                <td>{{$item->id}}</td>
             
                <td>{{$item->uuid}}</td>
                <td><a href="{{route('user.confirm',$item->id)}}"> <button class="btn btn-secondary">Full details</button></a> </td>


--}}

              </tr>
         
              @endforeach

        </tbody>
      </table>
</body>

@endsection
