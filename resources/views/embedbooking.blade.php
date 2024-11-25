@extends('layouts.website.app')

@section('title', 'Book A Meeting')

@section('content')
<div class="flex justify-center">
    <iframe
        class="custom-iframe w-full md:w-3/4 lg:w-2/3"
        src="https://trucking3601.zohobookings.com/portal-embed#/trucking360"
        frameborder="0"
        allowfullscreen
    ></iframe>
</div>

<style>
    .custom-iframe {
        margin-top: 3rem; /* Default margin for small screens */
        margin-bottom: 10px; /* Consistent bottom margin */
        height: 750px; /* Adjust height as needed */
    }

    /* Responsive Margin Top */
    @media (min-width: 768px) { /* Medium screens and up */
        .custom-iframe {
            margin-top: 10rem; /* Increase top margin */
        }
    }

    @media (min-width: 1024px) { /* Large screens and up */
        .custom-iframe {
            margin-top: 10rem; /* Further increase for large screens */
        }
    }
</style>

@endsection
