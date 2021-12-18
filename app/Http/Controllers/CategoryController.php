<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CreateCategory()
    {
      
        return view('admin.category-create');
    }

    public function CategoryList()
    {
        $categorylist = Category::all();
        return view('admin.category-list',compact('categorylist'));
    }

    public function StoreCategory(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'details'=>'required',



        ]);


        Category::create([

            'name'=>$req->name,
            
            'details'=>$req->details,

        ]);

        return redirect()->back()->with('success','Category has been created');

    }
}
