<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function show($slug)
{
    $settings = GeneralSetting::first();
    $service = Service::where('slug', $slug)->with('faqs')->firstOrFail();

    return view('services.show', compact('service', 'settings'));
}
}
