@extends('master')

@section('content')
<h1>Donation</h1>
<hr>
@if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p>
  @endif
{{-- <a href="{{route('create.donation',$donationlist->id)}}"><button class="btn btn-primary">Create Donation</button></a> --}}


<table class="table table-light" style="width:80%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Donor ID</th>
        <th scope="col">Cause ID</th>
        <th scope="col">Cause Name</th>
       
        <th scope="col">Transaction ID</th>
       
        {{-- <th scope="col">Cause Type</th> --}}
        <th scope="col">Donation Amount</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($donationlist as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$item->id}}</td>
        <td>{{optional($item->cause)->id}}</td> 
        <td>{{optional($item->cause)->name}}</td> 
       
        <td>{{$item->transaction_id}}</td>

        <td>{{$item->amount}}</td>
        
        <td>
          {{$item->status}}
          
        </td>
        <td>
        <a class="btn btn-primary" href="{{route('view.donation',$item->id)}}">View</a><br><br>
        <a class="btn btn-danger" href="{{route('delete.donation',$item->id)}}">Delete</a><br><br>
        
        {{-- @if($item->status!=1)

        <form action="{{route('update.donation.status',$item->id)}}" method="POST">
          @csrf
          <div class="form-group">
            <button class="btn btn-primary" name="status" value="1">Approve</button>
        </form>
        @endif --}}
        </td>
       
      </tr>
      @endforeach
    </tbody>
    
  </table>
  {{$donationlist->links()}}

  
@endsection