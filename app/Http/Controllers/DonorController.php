<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donor;
use App\Models\Category;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function Donation()
    {
        $donationlist=Donation::with('category')->get();
        return view('admin.donor.donation',compact('donationlist'));
    }

    public function StoreDonation(Request $req)
    {
        //dd($req->all());
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'phn_number'=>'required',
            'category'=>'required',
            'amount'=>'required',


        ]);

        

       Donation::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'address'=>$req->address,
            'phn_number'=>$req->phn_number,
            'category_id'=>$req->category,
            'amount'=>$req->amount,


       ]);

       return redirect()->back()->with('success','Thanks For Your Donation.');
    }

    public function DonorProfile()
    {
        $donorlist = Donor::all();
        return view('admin.donor.donor-profile',compact('donorlist'));
    }

    // public function CreateDonor()
    // {
    //     $categorylist = Category::all();
    //     return view('admin.donor.create-donor',compact('categorylist'));
    // }

    // public function StoreDonor(Request $req)
    // {

    //     $image_name=null;
    //     //step 1: check image exist in this request.
    //     if($req->hasFile('donor_image'))
    //      // step 2: generate file name
    //     {
    //         $image_name=date('Ymdhis').'.'. $req->file('donor_image')->getClientOriginalExtension();
    //          //step 3 : store into project directory
    //         $req->file('donor_image')->storeAs('/donors',$image_name);
    //     }

    //    // dd($req->all());
    //     $req->validate([
    //         'name'=>'required',
    //         'email'=>'required',
    //         'address'=>'required',
    //         'city'=>'required',
    //         'occupation'=>'required',
    //         'phn_number'=>'required',
           


    //     ]);

    //     Donor::create([

    //         'name'=>$req->name,
    //         'email'=>$req->email, 
    //         'address'=>$req->address,
    //         'city'=>$req->city,    
    //         'phn_number'=>$req->phn_number,
    //         'gender'=>$req->gender,
    //         'occupation'=>$req->occupation,
    //         'password'=>bcrypt($req->password),
    //         'image'=>$image_name,
          


    //     ]);
    //     return redirect()->back()->with('success','Donor has registered successfully.');
    // }

        
    

    public function CreateDonation()
    {
        return view('admin.donor.create-donation');
    }
    public function DonationView($donation_id)
    {
          $donation= Donation::find($donation_id);
          return view('admin.donor.donation_view',compact('donation'));


    }
    public function DonationDelete($donation_id)
    {
        Donation::find($donation_id)->delete();
        return redirect()->back()->with('success','Donation info has been deleted');

    }
    public function DonorView($donor_id)
    {
        $donor=Donor::find($donor_id);
        return view('admin.donor.donor-profile-view',compact('donor'));

    }
    public function DonorDelete($donor_id)
    {
        Donor::find($donor_id)->delete();
        return redirect()->back()->with('success','Donor profile has been deleted');
    }
   
}
