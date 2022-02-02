<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function viewExpense()
    {
        $data=Expense::all();
        return view('website.pages.view-expense',compact('data'));
    }
}
