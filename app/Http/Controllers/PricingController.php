<?php 

namespace App\Http\Controllers;

use App\Models\GeneralSetting;


class PricingController extends Controller
{
    public function index()
    {

        $settings = GeneralSetting::first(); 
        return view('pricing.show', compact('settings'));

    }
}