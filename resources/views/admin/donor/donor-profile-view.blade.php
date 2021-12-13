@extends('master')
@section('content')
    <h1>Donor Profile List</h1>
    <hr>
    

    <p><b>Name: {{$donor->name}}</b></p>
    <p><b>Email: {{$donor->email}}</b></p>
    <p><b>Address: {{$donor->address}}</b></p>
    <p><b>City: {{$donor->city}}</b></p>
    <p><b>Contact Number: {{$donor->phn_number}}</b></p>
    <p><b>Gender: {{$donor->gender}}</b></p>
    <p><b>Occupation: {{$donor->occupation}}</b></p>
    <p><b>Donation Amount: {{$donor->amount}}<b></p>
        <p>
        <td><img src="{{url('/uploads/donors/'.$item->image)}}" style="border-radius:4px" width="100px" alt="cause image"></td>
        </p>
@endsection