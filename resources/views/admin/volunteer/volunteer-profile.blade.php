@extends('master')

@section('content')



 <h1>Voluteer Register</h1><br>

 <a href="{{route('create.volunteer')}}"><button type="button" class="btn btn-primary">Create Volunteer</button></a><br><br>

 <table class="table table-light" style="width:80%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">City</th>
        <th scope="col">Address</th>
        <th scope="col">Gender</th>
        <th scope="col">Age</th>
        <th scope="col">Occupation</th>
        <th scope="col">Educational Background</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
    <tbody>
      @foreach($volunteerlist as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->city}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->gender}}</td>
        <td>{{$item->age}}</td>
        <td>{{$item->occupation}}</td>
        <td>{{$item->education}}</td>
        <td>{{$item->phn_number}}</td>
       
        <td><img src="{{url('/uploads/volunteers/'.$item->image)}}" style="border-radius:4px" width="100px" alt="volunteer image"></td>

        
        
      </tr>
      @endforeach
    </tbody>
    
  </table>
 @endsection