@extends('website.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donor Profile</title>
</head>
<style>
    body {
    background: #ffff;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(22, 107, 67);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
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
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
<body>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                {{-- <img class="rounded-circle mt-5" width="150px" src="{{url('/uploads/donors/'.$user->image)}}"> --}}
                <img class="rounded-circle mt-5" width="150px" src="{{url('/uploads/donors/'.$user->image)}}"><span class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
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
          <input type="text" value="{{auth()->user()->address}}" class="form-control" id="address"  placeholder="Enter Address" name="address">
        </div>
                    <div class="col-md-12">
                        <label for="city" style="font-size:20px;"><b>City</label></b>
                        <input type="text" value="{{auth()->user()->address}}" class="form-control" id="city"  placeholder="Enter City" name="city">
                    </div>
                    <div class="col-md-12">
                        <label for="phn_number" style="font-size:20px;"><b>Phone Number</label></b>
                        <input type="number" value="{{auth()->user()->phn_number}}" class="form-control" id="phn_number"  placeholder="Enter Phone Number" name="phn_number">
                    </div><br>
                   
                    <div class="col-md-12">
                        <label for="occupation" style="font-size:20px;"><b>Occupation</label></b>
                        <input type="text" value="{{auth()->user()->occupation}}" class="form-control" id="occupation"  placeholder="Enter Occupation" name="occupation">
                    </div>
                    <div class="col-md-12">
                        <label for="occupation" style="font-size:20px;"><b>Password</label></b>
                        <input type="password" name="password" class="form-control" id="occupation"  placeholder="Enter Password" name="occupation">
                    </div>
                   
                <div class="mt-5 text-center">
                    <button class="btn btn-success profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
       
    </div>
</div>
</div>
</div>
</body>
</html>
      
   


@endsection