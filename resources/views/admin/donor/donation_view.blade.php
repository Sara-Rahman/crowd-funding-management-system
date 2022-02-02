@extends('master')
@section('content')
<div class="container">
   <h1>Donation List</h1> 
   <hr>

   <p><b>Donor Name: {{$donation->name}}</b></p>
   <p><b>Donor Email: {{$donation->email}}</b></p>
   <p><b>Donor Phone: {{$donation->phone}}</b></p>
   <p><b>Transaction ID: {{$donation->transaction_id}}</b></p>
  
   <p><b>Cause Type: {{optional($donation->cause)->name}}</b></p>
   <p><b>Donation Amount: {{$donation->amount}}<b></p>
 
   </div>

@endsection