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
        <th scope="col">Payment Method</th>
        <th scope="col">Transaction ID</th>
        <th scope="col">Remark</th>
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
        <td>{{$item->payment_method}}</td>
        <td>{{$item->transaction_id}}</td>
        <td>{{$item->remark}}</td>
        {{-- <td>{{optional($item->category)->name}}</td>  --}}
        <td>{{$item->amount}}</td>
        <td>
          
          @if ($item->status==0)
            <a class="btn btn-warning" href="#">Pending</a>
          @else($item->status==1)
          <a class="btn btn-success" href="#">Approved</a>
          @endif
        </td>


        
          
        
        
      </tr>
  
      @endforeach

      
    </tbody>
    
  </table>



@endsection
