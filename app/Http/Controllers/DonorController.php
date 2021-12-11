<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function Donation()
    {
        $donationlist=Donation::all();
        return view('admin.donor.donation',compact('donationlist'));
    }

    public function StoreDonation(Request $req)
    {
        //dd($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'phn_number'=>'required',
            'type'=>'required',
            'amount'=>'required',


        ]);

        

       Donation::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phn_number'=>$req->phn_number,
            'type'=>$req->type,
            'amount'=>$req->amount,


       ]);

       return redirect()->back()->with('success','Thanks For Your Donation.');
    }

    public function DonorProfile()
    {
        $donorlist = Donor::all();
        return view('admin.donor.donor-profile',compact('donorlist'));
    }

    public function CreateDonor()
    {
        return view('admin.donor.create-donor');
    }

    public function StoreDonor(Request $req)
    {

        $image_name=null;
        //step 1: check image exist in this request.
        if($req->hasFile('donor_image'))
         // step 2: generate file name
        {
            $image_name=date('Ymdhis').'.'. $req->file('donor_image')->getClientOriginalExtension();
             //step 3 : store into project directory
            $req->file('donor_image')->storeAs('/donors',$image_name);
        }

       // dd($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required',
            'occupation'=>'required',
            'phn_number'=>'required',
           


        ]);

        Donor::create([

            'name'=>$req->name,
            'email'=>$req->email, 
            'address'=>$req->address,
            'city'=>$req->city,    
            'phn_number'=>$req->phn_number,
            'gender'=>$req->gender,
            'occupation'=>$req->occupation,
            'image'=>$image_name,
          


        ]);
        return redirect()->back()->with('success','Donor has registered successfully.');
    }

        
    

    public function CreateDonation()
    {
        return view('admin.donor.create-donation');
    }
   
}
