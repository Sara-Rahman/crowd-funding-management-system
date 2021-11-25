<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Crisis()
    {
        return view('admin.crisis');
    }
    public function CreateCrisis()
    {
        return view('admin.create-crisis');
    }
}
