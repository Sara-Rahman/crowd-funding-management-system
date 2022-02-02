<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    
    // protected $fillable = [
        
    //     'volunteer_id',
    //     'ref_id',
    //     'details',
    //     'amount',
    // ];
    use HasFactory;
    protected $guarded=[];

    public function expenseCause()
    {
        return $this->belongsTo(Cause::class,'cause_id','id');
    }
    public function expenseVolunteer()
    {
        return $this->belongsTo(Cause::class,'name','volunteer_id');
    }
    public function expenseUser()
    {
        return $this->belongsTo(User::class,'name','id');
    }
}


