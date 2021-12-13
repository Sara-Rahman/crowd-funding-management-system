@extends('master')
@section('content')
<h1>Cause Details</h1>
<hr>


<p><b>Cause Name: {{$cause->name}}</b></p>
<p><b>Category: {{optional($cause->category)->name}}</b></p>
<p><b>Description: {{$cause->details}}</b></p>
<p><b>Location: {{$cause->location}}</b></p>
<p><b>Contact Number: {{$cause->phn_number}}</b></p>
<p><b>Target Amount: {{$cause->amount}}<b></p>
<p><b>Raised Amount: {{$cause->raised_amount}}</b></p>
<p>
    <img src="{{url('/uploads/causes/'.$cause->image)}}" style="border-radius:4px" width="200px" alt="cause image">

</p>

    
@endsection