<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function VolunteerProfile()
    {
        return view('volunteer.create-volunteer');
    }

    public function Distribution()
    {
        return view('volunteer.distribution');
    }
}
