<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function Donation()
    {
        return view('donor.donation');
    }

    public function DonorProfile()
    {
        return view('donor.donor-profile');
    }

    public function CreateDonation()
    {
        return view('donor.create-donation');
    }
   
}
