<!-- resources/views/home.blade.php -->

@extends('layouts.website.app')

@section('title', 'Trucking360 - Home')

@section('content')
    @include('components.website.hero')
    @include('components.website.whyus')
    {{-- @include('components.website.services') --}}
    {{-- @include('components.website.about') --}}
    {{-- @include('components.website.clients') --}}
    {{-- @include('components.website.stats') --}}
    @include('components.website.calltoaction')
    {{-- @include('components.website.testimonials') --}}
    @include('components.website.faq')
    @include('components.website.contact')
@endsection
