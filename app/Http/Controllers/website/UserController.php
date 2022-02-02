<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function DonorRegistration()
    {
        $categorylist = Category::all();
        return view('admin.donor.create-donor',compact('categorylist'));
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
            'email'=>'email:rfc,dns',
            'address'=>'required',
            'city'=>'required',
            'occupation'=>'required',
            'phn_number'=>'required',
           


        ]);

       User::create([

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
        return redirect()->back()->with('success','Donor has registered successfully.');
    }

    public function DonorProfile()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $userlist = User::where('name','LIKE','%'.$key.'%')
                ->get();
            return view('admin.donor.donor-profile',compact('userlist','key')); 
        }
        $userlist = User::where('role','user')->get();
        return view('admin.donor.donor-profile',compact('userlist','key'));
    }


    
    public function DonorLogin(Request $request)
    {

        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');

// dd($userInfo);
        if(Auth::attempt($userInfo)){
            return redirect()->back()->with('message','Login successful.');
        }
        else{
            return redirect()->back()->with('error','Invalid user credentials');

        }
        

    }
    public function DonorLogout()
    {
        Auth::logout();
        return redirect()->route('website')->with('message','Logged out.');
    }

    public function DonorView($donor_id)
    {
        $donor=User::find($donor_id);
        return view('admin.donor.donor-profile-view',compact('donor'));

    }
    public function DonorEdit($donor_id)
    {
        $donor=User::find($donor_id);
        return view('admin.donor.edit-donor',compact('donor'));

    }
    public function DonorUpdate(Request $req,$donor_id)
    {
        $donor=User::find($donor_id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$donor->image;
//              step 1: check image exist in this request.
        if($req->hasFile('donor_image'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $req->file('donor_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $req->file('donor_image')->storeAs('/donors',$image_name);

        }


        $donor->update([
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
        return redirect()->route('donor.profile')->with('success','Donor Updated Successfully.');

    }
    public function DonorDelete($donor_id)
    {
        User::find($donor_id)->delete();
        return redirect()->back()->with('success','Donor profile has been deleted');
    }

}
