
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
width: 40%;
height: 10%;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
z

<div class="jumbotron text-center">
    <h1 class="display-3">Hi {{$user->name}}!</h1>
    <p class="lead"><strong>Your payment was succesful</strong></p>
   <a  href="{{route('invo',$user->id)}}"> <button style="background-color: rgb(21, 133, 11)"  class="btn btn-primary">Download Invoice</button></a>
<br>
<br>
<br>
   <div style="text-align: center">


    <p>
      Having trouble? <a href="">Contact us</a>
    </p>

  </div>


