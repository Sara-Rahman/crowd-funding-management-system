<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignVolunteer extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class,'volunteer_id','id');
        //crisis->category_id,id
    }
    public function bringCause()
    {
        return $this->belongsTo(Cause::class,'cause_id','id');
    }
}

