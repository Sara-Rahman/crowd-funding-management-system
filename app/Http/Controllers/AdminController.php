<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Crisis;
use App\Models\Category;
use App\Models\Cause;


class AdminController extends Controller
{
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
        $crisislist=Cause::with('category')->get();
       
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
   

    

    // public function CategoryList()
    // {
    //     return view('admin.category-list');
    // }
}


