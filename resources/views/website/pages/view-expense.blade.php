@extends('website.master')

@section('content')
@if(auth()->user())



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
      {{-- <th scope="col">Cause ID</th> --}}
      <th scope="col">Cause Name</th>
      <th scope="col">Volunteer Name</th>
      <th scope="col">Expense Details</th>
      <th scope="col">Expense Amount</th>
      <th scope="col">Created</th>
    
     

    </tr>
  </thead>
  <tbody>
    @foreach($data as $key=>$item)
  
    <tr>
      <th scope="row">{{$key+1}}</th>
      {{-- <td>{{$item->expenseCause->id}}</td>  --}} 
      <td>{{$item->expenseCause->name}}</td> 
      <td>{{$item->expenseUser->name}}</td>
      {{-- <td>{{$item->volunteer_id}}</td>  --}}
      <td>{{$item->details}}</td>
      <td>{{$item->amount}}</td>
      <td>{{$item->created_at->diffforhumans()}}</td>
     
      {{-- <td>{{$item->bringCause->location}}</td> --}}
     
      

     
      
     
      
    </tr>
    @endforeach
  </tbody> 
  
</table>
@else

<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Please Register or Login first!</strong> 
</div>

</body>

@endif
@endsection