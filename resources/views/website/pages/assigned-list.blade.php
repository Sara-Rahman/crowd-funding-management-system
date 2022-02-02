@extends('website.master')

@section('content')



 <h1>Your Assigned Causes</h1><br>

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
      <th scope="col">Volunteer Name</th>
      <th scope="col">Cause Name</th>
      <th scope="col">Location</th>
      <th scope="col">Action</th>
     

    </tr>
  </thead>
  <tbody>
    @foreach($view as $key=>$item)
   
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->bringCause->id}}</td>
      <td>
          @foreach ($item->volunteer as $users)
            <p style="color: black">{{$users->user->name}}</p>
          @endforeach
      </td>
      {{-- relationtionship --}}
      <td>{{$item->bringCause->name}}</td>
      <td>{{$item->bringCause->location}}</td>
      <td>

        <a class="btn btn-primary" href="{{route('create.expense',$item->id)}}">Add Expenses</a><br><br>
        <a class="btn btn-info" href="{{route('vol.view.expense',$item->id)}}">View Expenses</a><br><br>
        
      </td>
      

     
      
     
      
    </tr>
    @endforeach
  </tbody>
  
</table>
@endsection