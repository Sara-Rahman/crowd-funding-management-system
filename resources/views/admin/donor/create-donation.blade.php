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

        <div class="form-group">
          <label for="name" style="font-size:20px;"><b>Full Name</label></b>
          <input type="text" class="form-control" id="name"  placeholder="Enter Full Name" name="name">
          </div>

        <div class="form-group">
          <label for="email" style="font-size:20px;"><b>Email Address</label></b>
          <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
          <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="address" style="font-size:20px;"><b>Address</label></b>
          <input type="text" class="form-control" id="address"  placeholder="Enter Address" name="address">
         
        </div>

        <div class="form-group">
          <label for="phn_number" style="font-size:20px;"><b>Phone Number</label></b>
          <input type="number" class="form-control" id="phn_number"  placeholder="Enter Phone Number" name="phn_number">
         
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
      <label for="amount" style="font-size:20px;"><b>Donation Amount</label></b>
      <input type="number" class="form-control" id="amount"  placeholder="Enter Donation amount" name="amount">
     
    </div>

  


    
     
    <button type="submit" class="button btn-submit">Submit</button>
     
    </div>
   
</form>   
<br> 
</body>
</html>


  
  
 
     
@endsection
  