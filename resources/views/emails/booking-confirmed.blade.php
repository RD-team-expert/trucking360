<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #2e368f; /* Blue (Secondary) */
            padding: 20px;
            text-align: center;
        }
        .header img {
            width: 100px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            text-align: left;
        }
        .content h1 {
            color: #e93232; /* Red (Primary) */
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            {{-- <img src="{{ asset('website/img/360logo.png') }}" alt="Company Logo"> --}}
        </div>
        <div class="content">
            <h1>Thank you, {{ $customer->first_name }} {{ $customer->last_name }}!</h1>
            <p>Your meeting has been successfully booked for {{ $booking->date }}.</p>
            <p>We will contact you shortly to set up a schedule for your meeting and provide more details.</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Trucking360. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
