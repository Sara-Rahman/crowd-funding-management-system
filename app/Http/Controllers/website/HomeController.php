<?php

namespace App\Http\Controllers\website;

use App\Models\User;
use App\Models\Cause;
//use App\Models\Crisis;
use App\Models\Category;
use App\Models\Donation;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Home()
    {
        
        $crisislist=Cause::all();
        $volunteerlist=Volunteer::all();
        return view('website.fixed.home',compact('crisislist','volunteerlist'));
    }


    public function profileOfDonor()
    {
        $user=User::where('id',auth()->user()->id)->first();
        return view('website.pages.profile-donor',compact('user'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->phn_number = $request->input('phn_number');
        $user->gender = $request->input('gender');
        $user->occupation = $request->input('occupation');
        $user->image = $request->input('donor_image');
        $user->save();
        return redirect()->route('profile.donor');
    }




    public function CreateDonor()
    {
        return view('admin.donor.create-donor');
    }

   

    // public function CreateDonation($id)
    // {
    //     $cause = Cause::find($id);
    //     return view('admin.donor.create-donation',compact('cause'));

    // }

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
        where('status','Success')
        ->where('cause_id',$cause_id)
        ->get();
        

        // // where([w
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
        // dd(auth()->user());
         $donationlist=Donation::where('donor_id',auth()->user()->id)->get();
         
         
        return view('website.pages.donation-details',compact('donationlist'));
    }

    
    public function assignedVolunteerList()
    {
        $volunteer=User::where('id',auth()->user()->id)->first();
        return view('website.pages.listof-assigned-volunteer',compact('volunteer'));
    }
    
    
}
