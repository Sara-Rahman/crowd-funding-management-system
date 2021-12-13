@extends('website.master')
@section('content')

<h1>Cause Details</h1>

    
 <table class="table table-light" style="width:80%">
    <thead>
      <tr>
       
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Location</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Target Amount</th>
      
  
      </tr>
    </thead>
    <tbody>
      @foreach($crisislist as $item)
      <tr>
        
        <td>{{$item->name}}</td>
        <td>{{$item->details}}</td>
        <td>{{$item->location}}</td>
        <td>{{$item->phn_number}}</td>
        <td>{{$item->amount}}</td>

       
        
      </tr>
      @endforeach
    </tbody>
    
  </table>
@endsection