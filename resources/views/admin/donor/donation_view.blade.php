@extends('master')
@section('content')
   <h1>Donation List</h1> 
   <hr>

   <p><b>Name: {{$donation->name}}</b></p>
   <p><b>Email: {{$donation->email}}</b></p>
   <p><b>Address: {{$donation->address}}</b></p>
   <p><b>Contact Number: {{$donation->phn_number}}</b></p>
   <p><b>Cause Type: {{optional($donation->category)->name}}</b></p>
   <p><b>Donation Amount: {{$donation->amount}}<b></p>
 
  

@endsection