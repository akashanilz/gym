@extends('Admin.header')

 @section('header')
 <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Message</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>

      </tr>
    </thead>
    <tbody>
        @foreach (\App\Models\Form::all() as $no => $item)
      <tr>
        <th scope="row">{{ $no+1 }}</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->message }}</td>
        <td>{{ $item->email}}</td>
        <td>{{ $item->mobile }}</td>
      </tr>
@endforeach
    </tbody>
  </table>

 @endsection
