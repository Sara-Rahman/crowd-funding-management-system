@extends('master')

@section('content')

<h1>Distribution</h1>
    <hr>
   
   
   <table class="table table-light" style="width:80%">
    <thead>
      <tr>
        
        <th scope="col">Cause Name</th>
        <th scope="col">Cause Category</th>
        <th scope="col">Cause Description</th>
        <th scope="col">Location</th>
        <th scope="col">Volunteer Name</th>
        <th scope="col">Volunteer's City</th>

      </tr>
    </thead>
    <tbody>
      @foreach($crisislist as $key=>$item)
      <tr>
        <td>{{$item->name}}</td>
      {{-- relationtionship --}}
      <td>{{optional($item->category)->name}}</td> 
      <td>{{$item->details}}</td>
      <td>{{$item->location}}</td>
      
      @endforeach

      @foreach($volunteerlist as $key=>$item)
     
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      
        
      </tr>
      @endforeach
    </tbody>
    
  </table>



@endsection
