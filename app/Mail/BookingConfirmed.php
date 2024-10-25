<?php
namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $customer;

    /**
     * Create a new message instance.
     */
    public function __construct($booking, $customer)
    {
        $this->booking = $booking;
        $this->customer = $customer;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.booking-confirmed')
            ->subject('Your Meeting Booking is Confirmed!')
            ->with([
                'booking' => $this->booking,
                'customer' => $this->customer,
            ]);
    }
}
