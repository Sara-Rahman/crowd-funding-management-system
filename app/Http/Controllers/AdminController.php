<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cause;
//use App\Models\Crisis;
use App\Models\Report;
use App\Models\Category;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\AssignVolunteer;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function dashboard()
    {
        $count['cause']=Cause::all()->count();
        $count['donor']=User::where('role','user')->count();
        $count['volunteer']=User::where('role','volunteer')->count();
        $count['donation']=Donation::sum('amount');
        return view('admin.fixed.dashboard',compact('count'));
    }
    public function Cause()
    {
        $key=null;
        if(request()->search){
            $key=request()->search;
            $crisislist = Cause::with('category')
                ->where('name','LIKE','%'.$key.'%')
                ->get();
            return view('admin.cause',compact('crisislist','key')); 
        }
        // $donationlist=Donation::with('donation')->where('amount')->get();
        // dd($donationlist);
        // $donationlist=Donation::find($id);
        $crisislist=Cause::with(['category','donation'])->get();
     
       
        return view('admin.cause',compact('crisislist','key'));
    }

    public function CreateCause()
    {                             
        $categorylist = Category::all();
        return view('admin.create-cause',compact('categorylist'));
    }

    public function StoreCause(Request $request)
    {
        $image_name=null;
        if($request->hasFile('cause_image'))
        {
            $image_name=date('Ymdhis').'.'.$request->file('cause_image')->getClientOriginalExtension();
            $request->file('cause_image')->storeAs('/causes',$image_name);
        }

       
        //dd($request->all());
        $request->validate([
            'name'=>'required',
            
            'amount'=>'required',
            'details'=>'required',
            'location'=>'required',



        ]);
        Cause::create([
            'name'=>$request->name,
            'category_id'=>$request->category,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,
            'raised_amount'=>$request->raised_amount,
            'image'=>$image_name,
           
           




        ]);
        return redirect()->back()->with('success','Cause has been created successfully.');
    }
    public function CauseView($cause_id) 
    {
        $cause=Cause::find($cause_id);
        return view('admin.cause_view_details',compact('cause'));
    
    }

    public function CauseDelete($cause_id)
    {
        Cause::find($cause_id)->delete();
        return redirect()->back()->with('success',"Cause has been deleted.");
    }
    public function CauseEdit($cause_id)
    {
        $cause=Cause::find($cause_id);
        $categorylist=Category::all();

        return view('admin.edit-cause',compact('cause','categorylist'));

    }

   
    public function CauseUpdate(Request $request,$cause_id)
    {


        $cause=Cause::find($cause_id);

//        Product::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$cause->image;
//              step 1: check image exist in this request.
        if($request->hasFile('cause_image'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $request->file('cause_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $request->file('cause_image')->storeAs('/causes',$image_name);

        }


        $cause->update([
            // field name from db || field name from form
            'name'=>$request->name,
            'category_id'=>$request->category,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,
            'raised_amount'=>$request->raised_amount,
            'image'=>$image_name,

        ]);
        return redirect()->route('cause')->with('success','Cause Updated Successfully.');

    }

    public function AssignVolunteer($cause_id)
    {

    $cause=Cause::find($cause_id);
    $assignedVolunteer = AssignVolunteer::where('cause_id',$cause_id)->get();
    // dd($assignedVolenteer);
    $assigned = $assignedVolunteer->pluck('volunteer_id');
    $userlist=User::where('role','volunteer')->whereNotIn('id',$assigned)->get();
    return view('admin.assign-volunteer',compact('userlist','cause'));
    }

    public function storeAssignVolunteer(Request $request,$cause_id)
    {
        // dd($request->volunteer_name);
        // dd($cause_id);
        // AssignVolunteer::create([
            
            foreach($request->volunteer_name as $name){
                // dd($name);
                // $assignedVolenteer = User::where('id','!=',$name)->get();
                $assignedVolunteer = User::where([
                    ['id','!=',$name],
                    ['role','volunteer']
                ])->get();
                // dd($assignedVolenteer);
                if($assignedVolunteer)
                AssignVolunteer::create([
                    'volunteer_id'=>$name,
                    'cause_id'=>$cause_id
                ]);
                
                else{  
                return redirect()->back()->with('error','Volunteer is already assigned!');
                }


            }
            
            return redirect()->back()->with('success','Volunteer has been assigned successfully.');
            
            // 'volunteer_id'=>Auth::user()->id,
            // 'volunteer_name'=>$request->volunteer_name,
            // 'cause_id'=>$request->cause_id
        // ]);
    }

    public function viewAssignVolunteer($cause_id)
    {
        // dd($cause_id);
        $cause=Cause::find($cause_id);
        // dd($cause);
        $view=AssignVolunteer::with(['volunteer','bringCause'])->get();
       
        return view('admin.assign-volunteer-list',compact('view','cause'));
    }






    public function report()
    {

        // $reports=Donation::all();
     

        $reports=[];
        
        if(request()->has('fromdate'))
        {
            $from_date=request()->fromdate;
            $to_date=request()->todate;
        
        $reports=Donation::where('status','Success')
        ->whereDate('created_at','>=',$from_date)
        ->whereDate('created_at','<=',$to_date)
        ->get();
        // $reports=Donation::whereBetween('created_at',[request()->$from_date,request()->to_date])->get();
        }
        return view('admin.report',compact('reports'));
    }







    

    // public function CategoryList()
    // {
    //     return view('admin.category-list');
    // }
}


