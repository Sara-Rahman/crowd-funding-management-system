<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\Crisis;
use App\Models\Volunteer;
use App\Models\Cause;

class HomeController extends Controller
{
    public function Home()
    {
        $crisislist=Cause::all();
        $volunteerlist=Volunteer::all();
        return view('website.fixed.home',compact('crisislist','volunteerlist'));
    }



    public function CreateDonor()
    {
        return view('admin.donor.create-donor');
    }

    public function CreateDonation()
    {
        return view('admin.donor.create-donation');

    }

    public function CreateVolunteer()
    {
        return view('admin.volunteer.create-volunteer');
    }

    // public function ShowCrisis()
    // {
    //     $crisislist=Crisis::all();
    //     $volunteerlist=Volunteer::all();
    //     return view('website.fixed.home',compact('crisislist','volunteerlist'));
    // }
    
}
