<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function viewExpense($cause_id)
    {
        $data=Expense::with('expenseUser')->where('cause_id',$cause_id)->get();
    // dd($data);
        return view('website.pages.view-expense',compact('data'));
    }
}
