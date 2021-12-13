@extends('master')
@section('content')
    <h1>Volunteer Profile Details</h1>
    <hr>
    <p><b>Name: {{$volunteer->name}}</b></p>
    <p><b>Email: {{$volunteer->email}}</b></p>
    <p><b>City: {{$volunteer->city}}</b></p>
    <p><b>Address: {{$volunteer->address}}</b></p>
    <p><b>Gender: {{$volunteer->gender}}</b></p>
    <p><b>Age: {{$volunteer->age}}</b></p>
    <p><b>Occupation: {{$volunteer->occupation}}</b></p>
    <p><b>Educational Background: {{$volunteer->education}}</b></p>
    <p><b>Contact Number: {{$volunteer->phn_number}}</b></p>
        <p>
        <td><img src="{{url('/uploads/volunteers/'.$volunteer->image)}}" style="border-radius:4px" width="200px" alt="cause image"></td>
        </p>
@endsection