@extends('master')

@section('content')



 <h1>Assigned Volunteer List</h1><br>

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
      <th scope="col">Volunteer Name</th>
      <th scope="col">Crisis Name</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach($view as $key=>$item)
   
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
          @foreach ($item->volunteer as $users)
            <p style="color: #868e96">{{$users->user->name}}</p>
          @endforeach
      </td>
      {{-- relationtionship --}}
      <td>{{$item->bringCause->name}}</td>
      <td>{{$item->bringCause->location}}</td>
      

     
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