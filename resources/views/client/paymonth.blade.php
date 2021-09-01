<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  text-align: center;
  background-color: rgb(58, 52, 52);
  margin-left: 25%;
 width: 50%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
margin-top: 100px;
  padding: 2px 16px;
}
</style>
</head>
<body>


<div class="card">
    <form method="POST">
   @csrf
  <div class="container">
    <h2 style="color:rgb(218, 213, 213)">Pay Monthly fees</h2>
    <br><br>

    <h4><b style="color: white">Select Month</b></h4>
    <br>
    <br>

    <input type="month"  name="month"
       min="2021-01" value="2021-02" required>
       <input value="{{auth()->user()->id}}" name="id"  type="hidden">
       <button type="submit" class="btn btn-success">Submit</button>
       <br><br>
  </div>
</form>
</div>

</body>
</html>

