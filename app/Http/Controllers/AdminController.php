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
         $crisislist=Cause::with('category')->get();
       
        return view('admin.cause',compact('crisislist'));
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

    

    // public function CategoryList()
    // {
    //     return view('admin.category-list');
    // }
}


