<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Faq;
use App\Models\Feature;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\Contact;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {

        $settings = GeneralSetting::first();

        // $carousels = Carousel::all();
        $contacts = Contact::all();
        $about = AboutUs::first();
        $features = Feature::all();
        $faqs = Faq::all(); 
        // $teamMembers = TeamMember::all();
        $settings = GeneralSetting::first();
        $contactus = Contact::all();
        $services = Service::all(); 
        
        

        return view('home', compact(['settings','contacts','about','features',"contactus",'services','faqs']));
    }
}