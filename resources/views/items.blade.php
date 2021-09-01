<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Discription</th>
            <th scope="col">Brand</th>
            <th scope="col">Merchant Name</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($suppliment->product as $item)


          <tr>
            <th scope="row">{{$item->name}}</th>

            <td><img src="{{asset('uploads/productimages/'. $item->image)}}" alt="Avatar" style="width:70%"></td>
            <td>{{$item->price}}</td>
            <td>{{$item->discription}}</td>
            <td>{{$item->brand->name}}</td>
            <td>{{$item->merchant->name}}</td>
            <td> <a href="{{route('update',$item->id)}}"> <button class="btn btn-primary">Update</button></a> </td>
            <td> <a href="{{route('delete',$item->id)}}"> <button class="btn btn-danger">Delete</button></a> </td>
          </tr>
          @endforeach

        </tbody>
      </table>


</body>
</html>
