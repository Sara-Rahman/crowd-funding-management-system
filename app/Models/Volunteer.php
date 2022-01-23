<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $guarded=[];

   public function user()
   {
       return $this->belongsTo(User::class,'name','id');
   }
   public function bringCause()
   {
       return $this->belongsTo(Cause::class,'cause_location','id');
   }

}
