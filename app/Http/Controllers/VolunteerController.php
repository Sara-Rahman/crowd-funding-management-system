<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function VolunteerProfile()
    {
        $volunteerlist=Volunteer::all();
        return view('admin.volunteer.volunteer-profile',compact('volunteerlist'));
    }

    public function CreateVolunteer()
    {
        $categorylist=Volunteer::all();
        return view('admin.volunteer.create-volunteer',compact('categorylist'));
    }

    public function StoreVolunteer(Request $req)
    {

       // dd($req->all());
        //step 1: check image exist in this request.
        $image_name=null;

        if($req->hasFile('volunteer_image'))
        {
              // step 2: generate file name
            $image_name=date('Yhmdis').'.'.$req->file('volunteer_image')->getClientOriginalExtension();

             //step 3 : store into project directory

            $req->File('volunteer_image')->storeAs('/volunteers',$image_name);
        }


        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'age'=>'required',
            'occupation'=>'required',
            'phn_number'=>'required',
            


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
            'image'=>$image_name,


        ]);
        return redirect()->back()->with('success','Volunteer has registered successfully.');
    }

    // public function Distribution()
    // {
    //     return view('volunteer.distribution');
    // }
}
