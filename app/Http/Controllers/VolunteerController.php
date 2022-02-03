<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cause;
use App\Models\Expense;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use App\Models\AssignVolunteer;
use App\Models\Donation;
use PhpParser\Node\Expr\Assign;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    public function VolunteerProfile()
    {
      
        //$volunteerlist=Volunteer::all();
        $volunteerlist=Volunteer::with('bringCause')->get();
        return view('admin.volunteer.volunteer-profile',compact('volunteerlist'));
    }

    public function CreateVolunteer()
    {
        $crisislist=Cause::all();
        return view('admin.volunteer.create-volunteer',compact('crisislist'));
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
            'email'=>'email:rfc,dns',
            'address'=>'required',
            'age'=>'required',
            'occupation'=>'required',
            'phn_number'=>'required|digits:11',
            


        ]);
        $last_user=User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->pass),
            'role'=>'volunteer',
        ]);
       
        Volunteer::create([
            'name'=>$last_user->id,   
            'email'=>$req->email,
            'city'=>$req->city,
            'address'=>$req->address,
            'gender'=>$req->gender,
            'age'=>$req->age,
            'occupation'=>$req->occupation,
            'education'=>$req->education,
            'phn_number'=>$req->phn_number,
            'cause_location'=>$req->cause_location,
            'image'=>$image_name,
            
        ]);
        return redirect()->back()->with('success','Volunteer has registered successfully.');
    }
    public function VolunteerView($volunteer_id)
    {
        $volunteer=Volunteer::find($volunteer_id);
        return view('admin.volunteer.volunteer-profile-view',compact('volunteer'));

    }
    public function VolunteerEdit($volunteer_id)
    {
        $volunteer=Volunteer::find($volunteer_id);
        return view('admin.volunteer.edit-volunteer',compact('volunteer'));

    }
    public function VolunteerUpdate(Request $req,$volunteer_id)
    {


        $volunteer=Cause::find($volunteer_id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$volunteer->image;
//              step 1: check image exist in this request.
        if($req->hasFile('volunteer_image'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $req->file('volunteer_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $req->file('volunteer_image')->storeAs('/volunteers',$image_name);

        }


        $volunteer->update([
            // field name from db || field name from form
              
            'email'=>$req->email,
            'city'=>$req->city,
            'address'=>$req->address,
            'gender'=>$req->gender,
            'age'=>$req->age,
            'occupation'=>$req->occupation,
            'education'=>$req->education,
            'phn_number'=>$req->phn_number,
            'cause_location'=>$req->cause_location,
            'image'=>$image_name,
            
        ]);
        return redirect()->route('volunteer.profile')->with('success','Volunteer Updated Successfully.');

    }
    public function VolunteerDelete($volunteer_id)
    {
        Volunteer::find($volunteer_id)->delete();
        return redirect()->back()->with('success','Volunteer profile has been deleted.');
    }

    
    public function createExpense($id)
    {  
        $cause = AssignVolunteer::find($id);
        $donation=Donation::where('cause_id',$cause->cause_id)->get();
        $expense=Expense::where('cause_id',$cause->cause_id)->get();
    //    dd($cause);
        $available=$donation->sum('amount')-$expense->sum('amount');
      //  dd($cause);
        return view('website.pages.expenses.create-expense',compact('cause','available'));
    }

    public function storeExpense(Request $req)
    {
        // dd($req->all());
        $donation=Donation::where('cause_id',$req->cause_id)->get();
        $expense=Expense::where('cause_id',$req->cause_id)->get();
       
        $available=$donation->sum('amount')-$expense->sum('amount');
      
        if($available>0 && $req->amount<=$available)
        {
            Expense::create([
               
                'cause_id'=>$req->cause_id,
                'volunteer_id'=>Auth::user()->id,
                'ref_id'=>$req->ref_id,
                'details'=>$req->details,
                'amount'=>$req->amount,
    
            ]);
            return redirect()->back()->with('success','Expenses have been added successfully');
            
        }
        return redirect()->back()->with('success','Insufficient balance.');

     
    }

    public function volViewExpense()
    {
        $expense_view=Expense::where('volunteer_id',auth()->user()->id)->get();
        return view('website.pages.expenses.expense-list',compact('expense_view'));
    }

    // public function Distribution()
    // {
    //     $crisislist=Cause::with('category')->get();
    //     $volunteerlist=Volunteer::all();
    //     return view('admin.volunteer.distribution',compact('crisislist','volunteerlist'));
    // }
}
