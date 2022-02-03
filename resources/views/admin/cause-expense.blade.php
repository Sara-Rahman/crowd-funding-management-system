@extends('master')

@section('content')


<div class="container"> 
 <h1>Expenses List</h1><br>

 @if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p> 
  @endif

 {{-- <a href="{{route('create.cause')}}"><button type="button" class="btn btn-primary">Create Cause</button></a><br><br> --}}
 

 

 <table class="table table-light" style="width:90%">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cause ID</th>
      <th scope="col">Cause Name</th>
      <th scope="col">Expense Details</th>
      <th scope="col">Expense Amount</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>
    
     

    </tr>
  </thead>
  <tbody>
    @foreach($cause_expense as $key=>$item)
   
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->expenseCause->id}}</td> 
      <td>{{$item->expenseCause->name}}</td> 
      <td>{{$item->details}}</td>
      <td>{{$item->amount}}</td>
      <td>{{$item->created_at->diffforhumans()}}</td>
     
      {{-- <td>{{$item->bringCause->location}}</td> --}}
     <td> 
         <a class="btn btn-primary" href="{{route('edit.cause.expense',$item->id)}}">Edit</a><br><br>
     <a class="btn btn-danger" href="{{route('delete.cause.expense',$item->id)}}">Delete</a>
    </td>

     
      

     
      
     
      
    </tr>
    @endforeach
  </tbody> 
  
</table>
</div>
@endsection