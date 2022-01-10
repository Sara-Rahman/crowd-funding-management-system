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

    public function CreateDonation($id)
    {
        $cause = Cause::find($id);
        return view('admin.donor.create-donation',compact('cause'));

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

    public function CauseDetails($cause_id)
    {
        $cause=Cause::find($cause_id);
        $donations = Donation::
        where('status','1')
        ->where('cause_id',$cause_id)
        ->get();
        

        // // where([
        //     ['status','1'],
        //     ['cause_id',$cause_id]
        // ])->get();dd($donations);
        // return view('admin.cause_details',compact('cause'));
        return view('website.pages.cause_details',compact('cause','donations'));
        // $crisislist = Cause::all();
        // return view('admin.cause_details',compact('crisislist'));
    }

    public function DonationDetails()
    {
        $donationlist=Donation::all();
        return view('website.pages.donation-details',compact('donationlist'));
    }
    
    
}
