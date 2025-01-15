<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Artesaos\SEOTools\Facades\SEOTools;


class PricingController extends Controller
{
    public function index()
    {

        $settings = GeneralSetting::first();
        // Set SEO meta tags
        SEOTools::setTitle('Trucking 360 - Pricing');
        SEOTools::setDescription('You can find everything you need about pricing in this page');
        // Set Open Graph meta tags
        SEOTools::opengraph()->setTitle('Trucking 360 - Pricing');
        SEOTools::opengraph()->setDescription('You can find everything you need about pricing in this page');
        return view('pricing.show', compact('settings'));
    }
}
