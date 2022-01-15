<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $guarded=[];
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    //     //crisis->category_id,id
    // }
    public function cause()
    {
        return $this->belongsTo(Cause::class,'cause_                                                                                id','id');
        //crisis->category_id,id
    }
}
