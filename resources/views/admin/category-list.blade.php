@extends('master')
@section('content')
    <h1>Category</h1>

    @if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p> 
  @endif

    <a href="{{route('create.category')}}"><button type="button" class="btn btn-primary">Create Category</button></a><br><br>
<div class="container">
    <table class="table table-light" style="width:80%">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Details</th>
            <th scope="col">Action</th>
           
          </tr>
        </thead>
        <tbody>
          @foreach($categorylist as $key=>$category)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$category->name}}</td>   
            <td>{{$category->details}}</td>
           <td>
            <a class="btn btn-info" href="{{route('edit.category',$category->id)}}">Edit</a><br><br>
            <a class="btn btn-danger" href="{{route('delete.category',$category->id)}}">Delete</a>
          </td>
          </tr>
          @endforeach
        </tbody>
        
      </table>
      

    </div>
@endsection