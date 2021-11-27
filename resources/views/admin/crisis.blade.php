@extends('master')

@section('content')



 <h1>Crisis List</h1><br>

 <a href="{{url('/create/crisis')}}"><button type="button" class="btn btn-primary">Create Crisis</button></a><br><br>

 <table class="table table-light" style="width:80%">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Description</th>
      <th scope="col">Location</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Target Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach($crisislist as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->type}}</td>
      <td>{{$item->details}}</td>
      <td>{{$item->location}}</td>
      <td>{{$item->phn_number}}</td>
      <td>{{$item->amount}}</td>
      
    </tr>
    @endforeach
  </tbody>
  
</table>
@endsection