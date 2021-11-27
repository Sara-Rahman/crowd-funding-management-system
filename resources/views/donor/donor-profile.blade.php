@extends('master')

@section('content')



 <h1>Donor Register</h1><br>

 <a href="{{route('create.donor')}}"><button type="button" class="btn btn-primary">Create Donor</button></a><br><br>
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
      </tr>
    </thead>
    <tbody>
      @foreach($donorlist as $key=>$item)
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
        
        
      </tr>
      @endforeach
    </tbody>
    
  </table>
 @endsection