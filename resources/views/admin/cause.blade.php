@extends('master')

@section('content')



 <h1>Causes List</h1><br>

 @if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p> 
  @endif

 <a href="{{route('create.cause')}}"><button type="button" class="btn btn-primary">Create Cause</button></a><br><br>
 

 <form action="{{route('cause')}}" method="GET">
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control">
      </div>
      <div class="col-md-4">
          <button type="submit" class="btn btn-success">Search</button><br><br>
      </div>
  </div>
  </form>

  @if($key)
  <h5>
       Searching for: {{$key}}<br>
       Found: {{$crisislist->count()}}
  </h5>
@endif

 <table class="table table-light" style="width:90%">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Location</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Target Amount</th>
      <th scope="col">Raised Amount</th>
      <th scope="col">Image</th>
      <th scope="col">Created</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($crisislist as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      {{-- relationtionship --}}
      <td>{{optional($item->category)->name}}</td> 
      <td>{{$item->details}}</td>
      <td>{{$item->location}}</td>
      <td>{{$item->phn_number}}</td>
      <td>{{$item->amount}}</td>
      <td>{{$item->donation->sum('amount')}}</td>

      <td><img src="{{url('/uploads/causes/'.$item->image)}}" style="border-radius:4px" width="100px" alt="cause image"></td>
      <td>{{$item->created_at->diffforhumans()}}</td>

      <td>
        <a class="btn btn-primary" href="{{route('view.cause',$item->id)}}">View</a><br><br>
        <a class="btn btn-info" href="{{route('cause.edit',$item->id)}}">Edit</a><br><br>
        <a class="btn btn-danger" href="{{route('delete.cause',$item->id)}}">Delete</a>
    </td>
     
     
      
    </tr>
    @endforeach
  </tbody>
  
</table>
@endsection