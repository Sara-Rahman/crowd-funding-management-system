
@extends('website.master')
@section('content')
   <h1>Donation List</h1>
   <hr>

   <table class="table table-light" style="width:80%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Cause ID</th>
        <th scope="col">Cause Name</th>
       
       
        <th scope="col">Transaction ID</th>
      
        {{-- <th scope="col">Cause Type</th> --}}
        <th scope="col">Donation Amount</th>
        <th scope="col">Status</th>
       
      </tr>
    </thead>
    <tbody>
     
     
      @foreach($donationlist as $key=>$item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{optional($item->cause)->id}}</td> 
        <td>{{optional($item->cause)->name}}</td>
        
       
        
        <td>{{$item->transaction_id}}</td>
        
        {{-- <td>{{optional($item->category)->name}}</td>  --}}
        <td>{{$item->amount}}</td>
        <td>
          
          @if ($item->status=='Success')
            <a class="btn btn-success" href="#">Approved</a>
          @elseif($item->status=='Pending')
          <a class="btn btn-warning" href="#">Pending</a>
          @elseif($item->status=='Failed')
          <a class="btn btn-danger" href="#">Rejected</a>
          @endif
        </td>
        
        
      </tr>
  
      @endforeach

      
    </tbody>
    
  </table>



@endsection
