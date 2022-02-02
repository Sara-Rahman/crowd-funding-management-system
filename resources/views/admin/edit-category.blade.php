@extends('master')

@section('content')
<div class="container">
<h1>Edit Cause Category</h1>
<hr>
@if(session()->has('success'))
<p class="alert alert-success">
  {{session()->get('success')}}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
      <li>
        {{$error}}
      </li>   
    @endforeach
  </ul>
</div>
@endif

<form action="{{route('update.category',$category->id)}}" method="POST">
    @method('PUT')
  @csrf


    
      <div class="form-group">
        <label for="name" style="font-size:20px;"><b>Category Name</label></b>
        <input type="text" class="form-control" id="name" value="{{$category->name}}" name="name" placeholder="Enter Catagory Name">
      </div>

  
          <div class="form-group">
            <label for="name" style="font-size:20px;"><b>Category Details</label></b>
            <input type="text" class="form-control" id="details" value="{{$category->details}}" name="details" placeholder="Enter Category Details">
            </div>
      <button type="submit" class="btn btn-success">Update</button>
      
  
      <div class="container">
    
@endsection