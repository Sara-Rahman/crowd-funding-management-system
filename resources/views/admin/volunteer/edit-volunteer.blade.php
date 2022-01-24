@extends('master')

@section('content')


<div class="container">
    <h1><b>Volunteer Update Form</b></h1>
   
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
    

    <form action="{{route('update.volunteer',$volunteer->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
      @csrf
        <div class="form-group">
          <label for="name" style="font-size:20px;"><b>Full Name</b></label>
          <input type="text" class="form-control" value="{{$volunteer->user->name}}" id="name"  placeholder="Enter Full Name" name="name">
         
        </div>
        <div class="form-group">
          <label for="email" style="font-size:20px;"><b>Email Address</label></b>
          <input type="email" class="form-control" id="email" value="{{$volunteer->user->email}}" placeholder="Enter Email" name="email">
          <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="city" style="font-size:20px;"><b>City</label></b>
            <input type="text" class="form-control" id="city" value="{{$volunteer->city}}" placeholder="Enter City" name="city">
           
          </div>

        <div class="form-group">
          <label for="address" style="font-size:20px;"><b>Address</label></b>
          <input type="text" class="form-control" id="address" value="{{$volunteer->address}}" placeholder="Enter Address" name="address">
         
        </div>

          
      

        <div class="form-group">
            <label for="age" style="font-size:20px;"><b>Age</label></b>
            <input type="number" class="form-control" id="age" value="{{$volunteer->age}}"  placeholder="Enter Age" name="age">
           
          </div>

          <div class="form-group">
            <label for="occupation" style="font-size:20px;"><b>Occupation</label></b>
            <input type="text" class="form-control" id="occupation" value="{{$volunteer->occupation}}"  placeholder="Enter Occupation" name="occupation">
           
          </div>

          <div class="form-group">
            <label for="education" style="font-size:20px;"><b>Educational Background</label></b>
            <input type="text" class="form-control" id="education" value="{{$volunteer->education}}" placeholder="Enter Educational Background" name="education">
           
          </div>



        <div class="form-group">
          <label for="phn_number" style="font-size:20px;"><b>Phone Number</label></b>
          <input type="number" class="form-control" id="phn_number" value="{{$volunteer->phn_number}}"  placeholder="Enter Phone Number" name="phn_number">
         
        </div>

  


       


        
   

    <div class="mb-3">
        <label for="volunteer_image" class="form-label" style="font-size:20px;"><b>Insert Image</b></label>
        <input class="form-control" type="file" id="volunteer_image" name="volunteer_image">
      </div>

      {{-- <div class="form-group">
        <label for="password"><b>Password</label></b>
        <input type="text" class="form-control" id="password"  placeholder="Enter Password">
       
      </div> --}}


           
      <button type="submit" class="button btn-success">Update</button>

      
  
</form> 
</div>
  

  
@endsection
  