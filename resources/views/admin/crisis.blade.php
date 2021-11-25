@extends('master')

@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
  
table, th, td {
  border:1px solid black;
}

.button {
  background-color: #691674;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  transition-duration: 0.4s;
  border-radius: 8px;
}
.button:hover {
  background-color: #ac4c97;
  color: white;
}

</style>
</head>
<body>

<h2>Crisis</h2>
<br>

<a href="{{url('/create/crisis')}}" class="button" style="text-decoration:none; color:white;">Create Crisis</a><br><br>
{{-- <a href="#" class="button" style="text-decoration:none; color:white;">View Crisis</a> --}}

 <h1>Crisis List</h1><br>



<table class="table" style="width:100%">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Crisis Name</th>
      <th scope="col">Crisis Type</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    {{-- @foreach($crisislist as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->type}}</td>
      <td>{{$item->amount}}</td>
    </tr>
    @endforeach --}}
   
  </tbody>
</table>
@endsection