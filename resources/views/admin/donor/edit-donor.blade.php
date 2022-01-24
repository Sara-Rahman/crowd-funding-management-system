@extends('master')
@section('content')
    <h1><b>Donor Registration Form</b></h1>
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
    

    <form action="{{route('update.donor',$donor->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
      @csrf
        <div class="form-group">
          <label for="name" style="font-size:20px;"><b>Full Name</label></b>
          <input type="text" class="form-control" id="name" value="{{$donor->name}}" placeholder="Enter Full Name" name="name">
        </div>
        
        <div class="form-group">
          <label for="email" style="font-size:20px;"><b>Email Address</label></b>
          <input type="email" class="form-control" id="email" value="{{$donor->email}}" placeholder="Enter Email" name="email">
          <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <label for="address" style="font-size:20px;"><b>Address</label></b>
          <input type="text" class="form-control" id="address" value="{{$donor->address}}" placeholder="Enter Address" name="address">
         
        </div>

        <div class="form-group">
            <label for="city" style="font-size:20px;"><b>City</label></b>
            <input type="text" class="form-control" id="city" value="{{$donor->city}}"  placeholder="Enter City" name="city">
           
          </div>

        <div class="form-group">
          <label for="phn_number" style="font-size:20px;"><b>Phone Number</label></b>
          <input type="number" class="form-control" id="phn_number" value="{{$donor->phn_number}}" placeholder="Enter Phone Number" name="phn_number">
         
        </div>

        
       

          <div class="form-group">
            <label for="occupation" style="font-size:20px;"><b>Occupation</label></b>
            <input type="text" class="form-control" id="occupation" value="{{$donor->occupation}}" placeholder="Enter Occupation" name="occupation">

          </div>
         

          <div class="mb-3">
            <label for="donor_image" class="form-label" style="font-size:20px;"><b>Insert Image</b></label>
            <input class="form-control" type="file" id="donor_image" name="donor_image">
          </div>

          {{-- <div class="form-group">
            <label for="password"><b>Password</label></b>
            <input type="text" class="form-control" id="password"  placeholder="Enter Password">
           
          </div> --}}


        
        <button type="submit" class="btn btn-success">Register</button>
      
        {{-- <div class="form-group">
            <p><b>Already have an account? </b><a href="#"><button type="submit" class="btn btn-info">Sign In</button></a>.</p>
          </div>
   --}}
  
</form> 
@endsection