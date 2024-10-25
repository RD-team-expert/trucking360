@extends('layouts.website.app')

@section('title', 'Book A Meeting')

@section('content')
<style>
    .custom-iframe {
        margin-top: 50px; /* Adjust as needed */
        margin-bottom: 10px; /* Adjust as needed */
        height: 750px;
    }

 
</style>
<div class="flex justify-center">
    <iframe class="custom-iframe w-full md:w-3/4" src="https://trucking360.zohobookings.com/portal-embed#/4685732000000039054" frameborder="0" allowfullscreen></iframe>
</div>
@endsection
