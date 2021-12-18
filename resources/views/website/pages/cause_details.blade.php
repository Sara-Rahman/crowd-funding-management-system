@extends('website.master')
@section('content')


<h1>Cause Details</h1>

<p><b>Cause Name: {{$cause->name}}</b></p>
<p><b>Category: {{optional($cause->category)->name}}</b></p>
<p><b>Description: {{$cause->details}}</b></p>
<p><b>Location: {{$cause->location}}</b></p>
<p><b>Contact Number: {{$cause->phn_number}}</b></p>
<p><b>Target Amount: {{$cause->amount}}<b></p>
    <a href="#"><button type="button" class="btn btn-primary">Donate Now</button></a><br><br>
@endsection