<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\GeneralSetting;
use Artesaos\SEOTools\Facades\SEOTools;

class AboutUsController extends Controller
{
    // Display the About Us page management view
    public function index()
    {
        $about = AboutUs::first();
        $features = Feature::all();
        $settings = GeneralSetting::first();
        SEOTools::setTitle('Trucking 360 - About us');
        // Set Open Graph meta tags
        SEOTools::opengraph()->setTitle('Trucking 360 - About us');

        return view('dashboard.about', compact('about', 'features', 'settings'));
    }

    // Store or update About Us content
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'main_text' => 'required|string',
            'description_text' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'additional_image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'button_url' => 'nullable|string',
            'video_url' => 'nullable|url',
        ]);

        // Handle image uploads
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('about_images', 'public');
        }

        if ($request->hasFile('additional_image')) {
            $validatedData['additional_image'] = $request->file('additional_image')->store('additional_images', 'public');
        }

        $about = AboutUs::first();

        if ($about) {
            $about->update($validatedData);
        } else {
            AboutUs::create($validatedData);
        }

        return redirect()->route('dashboard.about')->with('success', 'About Us updated successfully.');
    }

    // Display the About Us page
    public function show()
    {
        $about = AboutUs::first();
        $features = Feature::all();
        $settings = GeneralSetting::first();

        return view('about', compact(['about', 'features', 'settings']));
    }

    // ... other methods like storeFeature, destroyFeature, etc.
}
