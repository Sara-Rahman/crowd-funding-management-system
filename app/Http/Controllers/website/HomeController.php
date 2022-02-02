<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Models\Cause;

use App\Models\Category;
use App\Models\Donation;
//use App\Models\Crisis;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Models\AssignVolunteer;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    public function Home()
    {
    
        $count['cause']=Cause::all()->count();
        $count['donor']=User::where('role','user')->count();
        $count['volunteer']=User::where('role','volunteer')->count();
        $count['donation']=Donation::sum('amount');
        $crisislist=Cause::all();
        $volunteerlist=Volunteer::all();
        return view('website.fixed.home',compact('crisislist','volunteerlist','count'));
    }

    public function Contact()
    {
        return view('website.fixed.contact');
    }


    public function profileOfDonor()
    {
         $user=User::where('id',auth()->user()->id)->first();
        // $donor=User::find();
        return view('website.pages.profile-donor',compact('user'));
    }

    // public function profileOfDonor2()
    // {
    //      $user=User::where('id',auth()->user()->id)->first();
    //     // $donor=User::find();
    //     return view('website.pages.profile2-donor',compact('user'));
    // }

    public function update(Request $req)
    {
        $user=User::where('id',auth()->user()->id)->first();

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$user->image;
//              step 1: check image exist in this request.
        if($req->hasFile('donor_image'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $req->file('donor_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $req->file('donor_image')->storeAs('/donors',$image_name);

        }


        $user->update([
            // field name from db || field name from form
              
            

                'name'=>$req->name,
                'email'=>$req->email, 
                'address'=>$req->address,
                'city'=>$req->city,    
                'phn_number'=>$req->phn_number,
                'gender'=>$req->gender,
                'occupation'=>$req->occupation,
                'password'=>bcrypt($req->password),
                'image'=>$image_name,
              
    
            
        ]);
        return redirect()->route('profile.donor')->with('success','Profile Updated Successfully.');

    }


    
    public function updatePassDonor()
    {
        return view('website.pages.update-pass-donor');
    }
     
    public function storePasswordform(Request $request)
    {
      $request->validate([
        'current_password' => ['required', new MatchOldPassword],
        'new_password' => ['required'],
        'new_confirm_password' => ['same:new_password'],
    ]);
    User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
    }

    // public function update(Request $request)
    // {
    //     // dd($request->all());
    //     $id = auth()->user()->id;
    //     $user = User::find($id);
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->address = $request->input('address');
    //     $user->city = $request->input('city');
    //     $user->phn_number = $request->input('phn_number');
    //     $user->gender = $request->input('gender');
    //     $user->occupation = $request->input('occupation');
    //     $user->image = $request->input('donor_image');
    //     $user->save();
    //     return redirect()->route('profile.donor');
    // }




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

    
    public function profileOfVolunteer()
    {
        $volunteer=Volunteer::where('name',auth()->user()->id)->first();
  
        return view('website.pages.profile-volunteer',compact('volunteer'));
    }

    public function updateProfileVolunteer(Request $req)
    {
    //  dd($req->all());

        $id = auth()->user()->id;
        $user = User::where('id',$id)->first();
        

        $volunteer= Volunteer::where('name',$id)->first();
        // dd($volunteer);
       

        $image_name=$volunteer->image;
        // dd($image_name);

     
//              step 1: check image exist in this request.

        if($req->hasFile('volunteer_image')){
            // dd('inif');
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $req->file('volunteer_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $req->file('volunteer_image')->storeAs('/volunteers',$image_name);

        }
        


        $user->update([
            
            // field name from db || field name from form
             
                'name'=>$req->name,
                'email'=>$req->email, 
                 
                
                'password'=>bcrypt($req->password),
                
               
        ]);
        //dd($user);

        
  
    $volunteer->update([
                'name'=>$user->id,
                'address'=>$req->address,
                'city'=>$req->city,   
                'phn_number'=>$req->phn_number,
                // 'gender'=>$req->gender,
                'occupation'=>$req->occupation,
                'age'=>$req->age,
                'education'=>$req->education,
                'image'=>$image_name,

        ]);
        
       
        return redirect()->route('profile.volunteer.list')->with('success','Profile Updated Successfully.');

    }

    //update pass volunteer
    public function updatePassVolunteer()
    {
        return view('website.pages.update-pass-donor');
    }
     
    public function storePasswordformVolunteer(Request $request)
    {
      $request->validate([
        'current_password' => ['required', new MatchOldPassword],
        'new_password' => ['required'],
        'new_confirm_password' => ['same:new_password'],
    ]);
    User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
   
    }


    public function AssignedList()
    {
        
        // dd($cause);
        
        $view=AssignVolunteer::with(['volunteer','bringCause'])->where('volunteer_id',auth()->user()->id)->get();
        return view('website.pages.assigned-list',compact('view'));
    }
    

    // public function updateProfileVolunteer(Request $request)
    // {
    //     // dd($request->all());
    //     $id = auth()->user()->id;
    //     $user = Volunteer::where('name',$id)->first();
    //     // dd($user);
    //     $user->name = $request->input('name');
    //     $user->email = $request->input('email');
    //     $user->address = $request->input('address');
    //     $user->city = $request->input('city');
    //     $user->phn_number = $request->input('phn_number');
    //     //$user->gender = $request->input('gender');
    //     $user->occupation = $request->input('occupation');
    //     $user->age = $request->input('age'); 
    //     $user->education = $request->input('education'); 
    //     $user->image = $request->input('volunteer_image');
    //     $user->save();
    //     return redirect()->route('profile.volunteer.list');

    // }
    
    
}
