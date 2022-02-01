<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Donor;
use App\Models\Category;
use App\Models\Donation;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function Donation()
    {
        $donationlist=Donation::paginate(3);
        // dd($donationlist);
        return view('admin.donor.donation',compact('donationlist'));
    }

    public function StoreDonation($id)
    {
        $image_name=null;
        if(request()->hasFile('receipt_image'))
        {
            $image_name=date('Ymdhis').'.'.request()->file('receipt_image')->getClientOriginalExtension();
            request()->file('receipt_image')->storeAs('/donations',$image_name);
        }
        request()->validate([
            'payment_method'=>'required',
            'transaction_id'=>'required',
            // 'cause_id'=>'required',
            // 'category'=>'required',
            'amount'=>'required',


        ]);

        

       Donation::create([
            'donor_id'=>Auth::user()->id,
            'payment_method'=>request()->payment_method,
            'transaction_id'=>request()->transaction_id,
            'receipt_image'=>$image_name,
            'remark'=>request()->remark,
            'cause_id'=>$id,
            'amount'=>request()->amount,


       ]);

       return redirect()->back()->with('success','Thanks For Your Donation.');
    }

    // public function DonorProfile()
    // {
    //     $userlist = User::all();
    //     return view('admin.donor.donor-profile',compact('userlist'));
    // }

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
    // } b

        
    

    public function CreateDonation()
    {
        return view('admin.donor.create-donation');
    }
    public function DonationView($donation_id)
    {
          $donation= Donation::find($donation_id);
          $userlist=User::where('role','user')->get();
          
          return view('admin.donor.donation_view',compact('donation','userlist'));


    }
    public function DonationDelete($donation_id)
    {
        Donation::find($donation_id)->delete();
        return redirect()->back()->with('success','Donation info has been deleted');

    }

    // public function UpdateDonationStatus($donation_id)
    // {
    //     //dd($donation_id);
    //     $data = Donation::where('id',$donation_id)->first();
    //     //dd($data->all());
    //     $data->update([
    //         'status'=>request()->status
    //     ]);
    //     return redirect()->back();
    // }
    // public function DonorView($donor_id)
    // {
    //     $donor=Donor::find($donor_id);
    //     return view('admin.donor.donor-profile-view',compact('donor'));

    // }
    // public function DonorDelete($donor_id)
    // {
    //     Donor::find($donor_id)->delete();
    //     return redirect()->back()->with('success','Donor profile has been deleted');
    // }
   
}
