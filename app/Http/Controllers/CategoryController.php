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
    public function editCategory($category_id)
    {
        $category=Category::find($category_id);
        

        return view('admin.edit-category',compact('category'));

    }

    public function updateCategory(Request $req,$category_id)
    {


        $category=Category::find($category_id);
        $category->update([
            // field name from db || field name from form
            'name'=>$req->name,
            
            'details'=>$req->details,

        ]);
        return redirect()->route('category.list')->with('success','Category Updated Successfully.');
    }

    public function deleteCategory($category_id)
    {
        Category::find($category_id)->delete();
        return redirect()->back()->with('success',"Cause has been deleted.");
    }
}
