@extends('trainer.header')

 @section('header')
 @if ($reg==null)
 <h1 style="text-align: center">No Data</h1>
 @else

<h1 style="text-align: center">Members present on {{$reg->date}}</h1>
 <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>



      </tr>
    </thead>
    <tbody>


        @foreach ($reg->user_id as $user)

        <tr>

          <th  scope="row">{{\App\Models\user::find($user)->id}}</th>

          <td>{{\App\Models\user::find($user)->name}}</td>
          <td>
              {{\App\Models\user::find($user)->email}}
          </td>

        </tr>



    @endforeach

  </tbody>
</table>
@endif
@endsection



