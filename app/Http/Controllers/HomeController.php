<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Faq;
use App\Models\Feature;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\Contact;
use App\Models\Service;
use Artesaos\SEOTools\Facades\SEOTools;

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
        SEOTools::setTitle('Trucking 360 - Home');
        // Set Open Graph meta tags
        SEOTools::opengraph()->setTitle('Trucking 360 - Home');
        

        return view('home', compact(['settings','contacts','about','features',"contactus",'services','faqs']));
    }
}
