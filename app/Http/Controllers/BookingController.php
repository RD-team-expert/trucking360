<?php
namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use App\Mail\BookingConfirmed;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;



class BookingController extends Controller
{
    // Customer-facing function to show the booking form
    public function create()
    {
        $settings = GeneralSetting::first();

        return view('bookings.create', compact('settings'));
    }

    // Customer-facing function to handle booking form submissions
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:15',
            'domicile' => 'required|string|max:255',
            'description' => 'required|string',
            // 'address' => 'required|string',
        ]);
    
        // Create or find the customer
        $customer = Customer::firstOrCreate(
            ['email' => $request->email],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                // 'address' => $request->address, 
            ]
        );
    
        // Create the booking
        $booking = Booking::create([
            'customer_id' => $customer->id,
            'date' => $request->date,
            'domicile' => $request->domicile,
            'description' => $request->description,
            // 'address' => $request->address, 
            'is_confirmed' => "pending", // Set the initial status to pending
        ]);
    
        // Create the notification
        $users = User::all();

        // Loop through each user and create a notification
        foreach ($users as $user) {
            Notification::create([
                'user_id' => $user->id, // Assign the notification to each user
                'type' => 'New Booking',
                'title' => 'New Booking Created',
                'message' => 'A new booking has been created for ' . $customer->first_name . ' ' . $customer->last_name . '.',
                'url' => route('dashboard.bookings.index'),
                'notifiable_type' => User::class,
                'notifiable_id' => $user->id, // The ID of each notifiable entity (the user)
            ]);
        }

        Mail::to($customer->email)->send(new BookingConfirmed($booking, $customer));
        
    
        // Redirect to the notification page with a success message
        return redirect()->route('message')->with([
            'success' => true,
            'title' => 'Booking Successful',
            'header' => 'Meeting Booked',
            'message' => 'Your meeting has been booked successfully. We will contact you soon with more details.',
            'breadcrumb' => 'Booking Confirmation'
        ]);
    }

    // Dashboard-facing function to list all bookings
    public function index()
    {
        $settings = GeneralSetting::first();
        $bookings = Booking::with('customer')->latest()->get();
        SEOTools::setTitle('Trucking 360 - Bookings');
        // Set Open Graph meta tags
        SEOTools::opengraph()->setTitle('Trucking 360 - Bookings');
        return view('dashboard.bookings.index', compact('bookings','settings'));
    }

    // Dashboard-facing function to show the edit form for a booking
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        return view('dashboard.bookings.edit', compact('booking'));
    }

    // Dashboard-facing function to update a booking
    public function update(Request $request, $id)
    {
        $request->validate([
            'domicile' => 'required|string|max:255',
            'date' => 'required|date',
            'is_confirmed' => 'required|string|in:pending,confirmed,canceled',
        ]);

        $booking = Booking::findOrFail($id);

        $booking->update([
            'domicile' => $request->domicile,
            'date' => $request->date,
            'is_confirmed' => $request->is_confirmed,
        ]);

        return redirect()->route('dashboard.bookings.index')->with('success', 'Booking updated successfully.');
    }

    // Dashboard-facing function to delete a booking
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('dashboard.bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
