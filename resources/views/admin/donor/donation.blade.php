@extends('master')

@section('content')
<h1>Create Donation</h1>
<hr>
@if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p>
  @endif
<a href="{{route('create.donation')}}"><button class="btn btn-primary">Create Donation</button></a>


<table class="table table-light" style="width:80%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Cause Type</th>
        <th scope="col">Donation Amount</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($donationlist as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->phn_number}}</td>
        <td>{{optional($item->category)->name}}</td> 
        <td>{{$item->amount}}</td>
        <td>
        <a class="btn btn-primary" href="{{route('view.donation',$item->id)}}">View</a><br><br>
        <a class="btn btn-danger" href="{{route('delete.donation',$item->id)}}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
    
  </table>
@endsection