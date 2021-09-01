@extends('trainer.header')

 @section('header')


<form method="POST">
    @csrf
 <div  class="form-group row">
    <label style="color: red" for="example-date-input" class="col-2 col-form-label">Select Date</label>
    <div class="col-2">
      <input name="date" class="form-control bg-secondary text-white"  type="date" value="{{ date('Y-m-d') }}" id="example-date-input">
    </div>
    @if ($errors->has('date')) <p style="color:red;">{{ $errors->first('date') }}</p> @endif <br>
  </div>
 <table class="table table-striped">
    <thead>
      <tr>

        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Add Attendence</th>


      </tr>
    </thead>
    <tbody>
        @foreach (\App\Models\User::all() as $user)
          @if ($user->register_check==1)
          <tr>

            <th  scope="row">#GYM{{$user->id}}</th>
            <input type="hidden" name="uu[]" value="{{$user->id}}">
            <input type="hidden" name="name[]" value="{{$user->name}}">
            <td>{{$user->name}}</td>
            <td>
                <div class="form-check">
                    <input name="id[]" class="form-check-input" type="checkbox" value="{{$user->id}}" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                      Present
                    </label>
                  </div>
            </td>

          </tr>

          @endif

      @endforeach

    </tbody>
  </table>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
