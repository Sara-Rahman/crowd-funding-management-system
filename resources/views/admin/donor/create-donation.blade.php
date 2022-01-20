@if(auth()->user())
@extends('website.master')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  
  <div class="container">
    <h1><b>Donation Form</b></h1>
   
    <hr>

    @if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif

    @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>   
                  @endforeach
                </ul>
              </div>
  @endif
     

    <form action="{{route('store.donation', $cause->id)}}" method="POST">
      @csrf
      {{-- <div class="form-group">
        <label for="cause_id" style="font-size:20px;"><b>Cause ID</label></b>
        <select name="cause_id" class="form-control">
          <option>Select Cause ID</option>
    
          @foreach ($crisislist as $item)
    
    
          <option value="{{$item->id}}">{{$item->id}}</option>
          @endforeach
        </select>
     
      </div> --}}

        {{-- <div class="form-group">
          <label for="donor_id" style="font-size:20px;"><b>Donor ID</label></b>
          <input type="text" class="form-control" id="donor_id"  placeholder="Enter Donor ID" name="donor_id">
          </div> --}}

          <label for="payment_method" style="font-size:20px;"><b>Choose Payment Method</label></b>
          <select name="payment_method" class="form-control">
            <option>Select Payment Method</option>
            <option value="Credit Card">Credit Card</option>
            <option value="Bkash">Bkash</option>
            <option value="Nagad">Nagad</option>
          </select>
      

        <div class="form-group">
          <label for="transaction_id" style="font-size:20px;"><b>Transaction ID</label></b>
          <input type="number" class="form-control" id="transaction_id"  placeholder="Enter Transaction ID" name="transaction_id">
         
        </div>

        <div class="form-group">
          <label for="reciept_image" style="font-size:20px;"><b>Receipt</label></b>
          <input type="file" class="form-control" id="receipt_image"  placeholder="Enter Receipt" name="reciept_image">
         
        </div>

        
        {{-- <div class="form-group">
          <label for="category" style="font-size:20px;"><b>Select Cause Category</label></b>
          <select name="category" class="form-control">
            <option>Select Cause Category</option>
      
            @foreach ($categorylist as $item)
      
      
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
       
        </div> --}}

        <div class="form-group">
          <label for="remark" style="font-size:20px;"><b>Remark</label></b>
          <input type="text" class="form-control" id="remark"  placeholder="Enter Remark" name="remark">
         
        </div>

    <div class="form-group">
      <label for="amount" style="font-size:20px;"><b>Donation Amount</label></b>
      <input type="number" class="form-control" id="amount"  placeholder="Enter Donation amount" name="amount">
     
    </div>

  


    
     
    <button type="submit" class="button btn-submit">Submit</button>
     
  
   
</form> 
</div>  

<br> 
</body>
</html>


  
  
 
     
@endsection
@endif
  