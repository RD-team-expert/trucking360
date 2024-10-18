<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // Public method to display FAQs on the website
    public function index()
    {
        $faqs = Faq::orderBy('order')->get();
        return view('faqs.index', compact('faqs'));
    }

    // Dashboard method to list FAQs
    public function adminIndex()
    {
        $faqs = Faq::orderBy('order')->get();
        return view('dashboard.faqs.index', compact('faqs'));
    }

    // Show form to create a new FAQ
    public function create()
    {
        return view('dashboard.faqs.create');
    }

    // Store a new FAQ
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $maxOrder = Faq::max('order');
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'order' => $maxOrder + 1,
        ]);

        return redirect()->route('dashboard.faqs.index')->with('success', 'FAQ created successfully.');
    }

    // Show form to edit an existing FAQ
    public function edit(Faq $faq)
    {
        return view('dashboard.faqs.edit', compact('faq'));
    }

    // Update an existing FAQ
    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq->update($request->only('question', 'answer'));

        return redirect()->route('dashboard.faqs.index')->with('success', 'FAQ updated successfully.');
    }

    // Delete an FAQ
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('dashboard.faqs.index')->with('success', 'FAQ deleted successfully.');
    }

    // Update FAQ order via AJAX
    public function updateOrder(Request $request)
    {
        $faqOrder = $request->input('order');

        foreach ($faqOrder as $order => $id) {
            Faq::where('id', $id)->update(['order' => $order]);
        }

        return response()->json(['status' => 'success']);
    }
}
