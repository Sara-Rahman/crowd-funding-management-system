@extends('website.master')
@section('content')

<div class="container">
<h1>Cause Details</h1>

<p style="font-size: 20px; font-family:serif">Cause Name: {{$cause->name}}</p>
<p style="font-size: 20px; font-family:serif">Category: {{optional($cause->category)->name}}</p>
<p style="font-size: 20px; font-family:serif">Description: {{$cause->details}}</p>
<p style="font-size: 20px; font-family:serif">Location: {{$cause->location}}</p>
<p style="font-size: 20px; font-family:serif">Contact Number: {{$cause->phn_number}}</p>
<p style="font-size: 20px; font-family:serif">Target Amount: {{$cause->amount}}</p>
    <p>
        <img src="{{url('/uploads/causes/'.$cause->image)}}" style="border-radius:4px" width="200px" alt="cause image">
    
    </p>
    <a href="{{route('create.donation')}}"><button type="button" class="btn_1">Donate Now</button></a><br><br>
</div>
@endsection