<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function VolunteerProfile()
    {
        $volunteerlist=Volunteer::all();
        return view('volunteer.volunteer-profile',compact('volunteerlist'));
    }

    public function CreateVolunteer()
    {
        return view('volunteer.create-volunteer');
    }

    public function StoreVolunteer(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'age'=>'required',
            'occupation'=>'required',
            'phn_number'=>'required',
            'type'=>'required',


        ]);

        Volunteer::create([

            'name'=>$req->name,
            'email'=>$req->email,
            'city'=>$req->city,
            'address'=>$req->address,
            'gender'=>$req->gender,
            'age'=>$req->age,
            'occupation'=>$req->occupation,
            'education'=>$req->education,
            'phn_number'=>$req->phn_number,
            'type'=>$req->type,


        ]);
        return redirect()->back()->with('success','Volunteer has registered successfully.');
    }

    // public function Distribution()
    // {
    //     return view('volunteer.distribution');
    // }
}
