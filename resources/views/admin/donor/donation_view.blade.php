@extends('master')
@section('content')
   <h1>Donation List</h1> 
   <hr>

   {{-- <p><b>Donor Name: {{$donation->bringUser->name}}</b></p> --}}
   <p><b>Transaction ID: {{$donation->transaction_id}}</b></p>
  
   <p><b>Cause Type: {{optional($donation->cause)->name}}</b></p>
   <p><b>Donation Amount: {{$donation->amount}}<b></p>
 
  

@endsection