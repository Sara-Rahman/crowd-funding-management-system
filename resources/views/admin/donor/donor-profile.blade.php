@extends('master')

@section('content')

<div class="container">

 <h1>Donor List</h1>

 <hr>
 @if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p>
  @endif

 {{-- <a href="{{route('create.donor')}}"><button type="button" class="btn btn-primary">Create Donor</button></a><br><br> --}}

 <form action="{{route('donor.profile')}}" method="GET">
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
       Found: {{$userlist->count()}}
  </h5>
@endif

 <table class="table table-light" style="width:80%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Gender</th>
        <th scope="col">Occupation</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($userlist as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->city}}</td>
        <td>{{$item->phn_number}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->occupation}}</td>
        <td><img src="{{url('/uploads/donors/'.$item->image)}}" style="border-radius: 4px;" width= "100px;" alt="donor image"> </td>
        <td>
          <a class="btn btn-primary" href="{{route('view.donorprofile',$item->id)}}">View</a><br><br>
          <a class="btn btn-info" href="{{route('edit.donor',$item->id)}}">Edit</a><br><br>
        <a class="btn btn-danger" href="{{route('delete.donorprofile',$item->id)}}">Delete</a>
        </td>
        
      </tr>
      @endforeach
    </tbody>
    
  </table>
  {{-- {{$userlist->links()}} --}}

</div>
 @endsection