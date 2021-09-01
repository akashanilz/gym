@extends('trainer.header')

 @section('header')

<body>

<h2 style="text-align: center">Attendance Register</h2>
<br><br>

<div class="card">
    <form method="POST">
   @csrf
  <div class="card">
    <div class="card-header">
     View Attendance
    </div>
    <div class="card-body">
      <h5 class="card-title">Select Month</h5>
      <input type="date"  class="form-control" name="date"
      min="2000-03-11" value="{{ date('Y-m-d') }}" required>
<br>
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>

</body>

@endsection

