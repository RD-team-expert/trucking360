<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceFaq;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $settings = GeneralSetting::first();
        return view('dashboard.services.index', compact('services', 'settings'));
    }

    public function create()
    {
        return view('dashboard.services.form', ['service' => null]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'nullable|string',
            'overview' => 'nullable|string',
            'features' => 'nullable|string',
            'benefits' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_url' => 'nullable|string',
            'faqs' => 'nullable|array',
            'faqs.*.question' => 'required_with:faqs|string',
            'faqs.*.answer' => 'required_with:faqs|string',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/services'), $imageName);
            $validatedData['image'] = 'images/services/' . $imageName;
        }

        // Create the service
        $service = Service::create($validatedData);

        // Handle FAQs
        if (isset($validatedData['faqs'])) {
            foreach ($validatedData['faqs'] as $faq) {
                $service->faqs()->create($faq);
            }
        }

        return redirect()->route('dashboard.services.index')->with('success', 'Service added successfully.');
    }

    public function edit(Service $service)
    {
        return view('dashboard.services.form', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'nullable|string',
            'overview' => 'nullable|string',
            'features' => 'nullable|string',
            'benefits' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_url' => 'nullable|string',
            'faqs' => 'nullable|array',
            'faqs.*.id' => 'nullable|exists:service_faqs,id',
            'faqs.*.question' => 'required_with:faqs|string',
            'faqs.*.answer' => 'required_with:faqs|string',
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/services'), $imageName);
            $validatedData['image'] = 'images/services/' . $imageName;
        }

        $service->update($validatedData);

        // Handle FAQs
        if (isset($validatedData['faqs'])) {
            // Sync FAQs
            $existingFaqIds = $service->faqs()->pluck('id')->toArray();
            $newFaqIds = [];

            foreach ($validatedData['faqs'] as $faqData) {
                if (isset($faqData['id'])) {
                    // Update existing FAQ
                    $faq = ServiceFaq::find($faqData['id']);
                    $faq->update($faqData);
                    $newFaqIds[] = $faq->id;
                } else {
                    // Create new FAQ
                    $faq = $service->faqs()->create($faqData);
                    $newFaqIds[] = $faq->id;
                }
            }

            // Delete FAQs that were removed
            $faqsToDelete = array_diff($existingFaqIds, $newFaqIds);
            ServiceFaq::destroy($faqsToDelete);
        }

        return redirect()->route('dashboard.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        // Delete image if exists
        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        $service->delete();
        return redirect()->route('dashboard.services.index')->with('success', 'Service deleted successfully.');
    }

    public function show($slug)
    {
        $settings = GeneralSetting::first();
        $service = Service::where('slug', $slug)->with('faqs')->firstOrFail();
    
        return view('services.show', compact('service', 'settings'));
    }
}
