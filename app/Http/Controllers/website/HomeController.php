<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Crisis;
use App\Models\Volunteer;

class HomeController extends Controller
{
    public function Home()
    {
        return view('website.fixed.home');
    }



    public function CreateDonor()
    {
        return view('donor.create-donor');
    }

    public function CreateDonation()
    {
        return view('donor.create-donation');

    }

    public function CreateVolunteer()
    {
        return view('volunteer.create-volunteer');
    }

    public function ShowCrisis()
    {
        $crisislist=Crisis::all();
        $volunteerlist=Volunteer::all();
        return view('website.fixed.home',compact('crisislist','volunteerlist'));
    }
    
}
