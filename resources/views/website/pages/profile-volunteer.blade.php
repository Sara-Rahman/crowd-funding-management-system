


    {{-- <h1>Volunteer Profile</h1>
    <hr>
    <p><b>Name: {{$volunteer->name}}</b></p>
    <p><b>Email: {{$volunteer->email}}</b></p>
    <p><b>City: {{$volunteer->city}}</b></p>
    <p><b>Address: {{$volunteer->address}}</b></p>
    <p><b>Gender: {{$volunteer->gender}}</b></p>
    <p><b>Age: {{$volunteer->age}}</b></p>
    <p><b>Occupation: {{$volunteer->occupation}}</b></p>
    <p><b>Educational Background: {{$volunteer->education}}</b></p>
    <p><b>Contact Number: {{$volunteer->phn_number}}</b></p>
    <p><b>Cause Location: {{$volunteer->location}}</b></p>
        <p>
        <td><img src="{{url('/uploads/volunteers/'.$volunteer->image)}}" style="border-radius:4px" width="200px" alt="cause image"></td>
        </p> --}}



        @extends('website.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volunteer Profile</title>
</head>
<style>
    body {
    background: #ffff;
}

.form-control:focus {
    box-shadow: none;
    border-color: #339e7b
}

.profile-button {
    background: rgb(22, 107, 67);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #168f4c
}

.profile-button:focus {
    background: #277340;
    box-shadow: none
}

.profile-button:active {
    background: #fafafa;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}


.labels {
    font-size: 11px;
}


</style>
<body>
    <form action="{{route('update.volunteer.profile')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(session()->has('success'))
                  <p class="alert alert-success">
                    {{session()->get('success')}}
                  </p> 
  @endif
        <div class="row">
        <div class="col-md-3 border-right ms-5">
            <div class="card shadow-lg mt-5 d-flex flex-column align-items-center text-center p-3 py-5">
                {{-- <img class="rounded-circle mt-5" width="150px" src="{{url('/uploads/donors/'.$user->image)}}"> --}}
                <img class="figure-img img-fluid rounded" width="100%" height="100%" src="{{url('/uploads/volunteers/'.$volunteer->image)}}">
                <span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span>  
                    <input class="form-control" type="file" name="volunteer_image" id="volunteer_image"></span></div>
               
        </div>
        <div class="col-md-5 ms-5 border-right">
            
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-center">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <label for="name" style="font-size:20px;"><b>Full Name</label></b>
                    <input type="text" class="form-control" id="name" 
                    value="{{auth()->user()->name}}" name="name">
                    
                </div>
                <div class="row mt-3">
                    <label for="email" style="font-size:20px;"><b>Email Address</label></b>
          <input type="email" class="form-control" value="{{auth()->user()->email}}" id="email" placeholder="Enter Email" name="email">
        </div>
                    <div class="col-md-12">
                        <label for="address" style="font-size:20px;"><b>Address</label></b>
          <input type="text" value="{{$volunteer->address}}" class="form-control" id="address"  placeholder="Enter Address" name="address">
        </div>
                    <div class="col-md-12">
                        <label for="city" style="font-size:20px;"><b>City</label></b>
                        <input type="text" value="{{$volunteer->city}}" class="form-control" id="city"  placeholder="Enter City" name="city">
                    </div>
                    <div class="col-md-12">
                        <label for="phn_number" style="font-size:20px;"><b>Phone Number</label></b>
                        <input type="number" value="{{$volunteer->phn_number}}" class="form-control" id="phn_number"  placeholder="Enter Phone Number" name="phn_number">
                    </div><br>
                   
                    <div class="col-md-12">
                        <label for="occupation" style="font-size:20px;"><b>Occupation</label></b>
                        <input type="text" value="{{$volunteer->occupation}}" class="form-control" id="occupation"  placeholder="Enter Occupation" name="occupation">
                    </div>
                    <div class="col-md-12">
                        <label for="age" style="font-size:20px;"><b>Age</label></b>
                        <input type="text" value="{{$volunteer->age}}" class="form-control" id="occupation"  placeholder="Enter Occupation" name="age">
                    </div>
                    <div class="col-md-12">
                        <label for="education" style="font-size:20px;"><b>Education</label></b>
                        <input type="text" value="{{$volunteer->education}}" class="form-control" id="occupation"  placeholder="Enter Occupation" name="education">
                    </div><br>
                    {{-- <div class="col-md-12">
                        <label for="occupation" style="font-size:20px;"><b>Password</label></b>
                        <input type="password" name="password" class="form-control" id="occupation"  placeholder="Enter Password" name="occupation">
                    </div> --}}
                    <div class="col-md-12">
                        <a href="{{route('update.pass.volunteer')}}" type="button" class="btn btn-success">Update Password</a>
                    </div>
                   
                <div class="mt-5 text-center">
                    <button class="btn btn-success profile-button" type="submit">Save Profile</button>
                </div>
                <div class="mt-5 text-center">
                    <a href="{{route('assigned.list')}}" class="btn btn-success" type="button">Assigned causes</a>
                </div>
            </div>
        </div>
       
    </div>
</form>
</div>
</div>
</div>
</body>
</html>
      
   


@endsection

    