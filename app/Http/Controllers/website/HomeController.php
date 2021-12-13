<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\Crisis;
use App\Models\Volunteer;
use App\Models\Cause;
use App\Models\Category;
use App\Models\Donation;

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
        $categorylist = Category::all();
        return view('admin.donor.create-donation',compact('categorylist'));

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

    public function CauseDetails()
    {
        $crisislist = Cause::all();
        return view('admin.cause_details',compact('crisislist'));
    }
    
}
