<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cause extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
    {
        return $this->belongsTo(Category::class);
        //crisis->category_id,id
    }
    public function donation()
    {
        return $this->hasMany(Donation::class);

    }
    public function volunteerName()
    {
        return $this->belongsTo(User::class);
        //crisis->category_id,id
    }
    }

