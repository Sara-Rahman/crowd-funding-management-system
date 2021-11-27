<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crisis;


class AdminController extends Controller
{
    public function Crisis()
    {
         $crisislist=Crisis::all();
       
        return view('admin.crisis',compact('crisislist'));
    }
    public function CreateCrisis()
    {
        //$crisislist=Crisis::all();
        return view('admin.create-crisis');
    }

    public function StoreCrisis(Request $request)
    {
       
        //dd($request->all());
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'amount'=>'required',
            'details'=>'required',
            'location'=>'required',



        ]);
        Crisis::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'details'=>$request->details,
            'location'=>$request->location,
            'phn_number'=>$request->phn_number,
            'amount'=>$request->amount,




        ]);
        return redirect()->back()->with('success','Crisis has been created successfully.');
    }

    // public function ShowCrisis()
    // {
       
    //     return view('admin.crisis',compact('crisislist'));
    // }

}
