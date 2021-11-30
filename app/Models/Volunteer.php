<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category()
{
    return $this->belongsTo(Category::class);
    //volunteer->category_id,id
}
}
