<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crisis;
use App\Models\Category;


class AdminController extends Controller
{
    public function Crisis()
    {
         $crisislist=Crisis::with('category')->get();
       
        return view('admin.crisis',compact('crisislist'));
    }

    public function CreateCrisis()
    {
        $categorylist = Category::all();
        return view('admin.create-crisis',compact('categorylist'));
    }

    public function StoreCrisis(Request $request)
    {
       
        //dd($request->all());
        $request->validate([
            'name'=>'required',
            
            'amount'=>'required',
            'details'=>'required',
            'location'=>'required',



        ]);
        Crisis::create([
            'name'=>$request->name,
            'category_id'=>$request->category,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,
           




        ]);
        return redirect()->back()->with('success','Crisis has been created successfully.');
    }

    

    // public function CategoryList()
    // {
    //     return view('admin.category-list');
    // }
}


