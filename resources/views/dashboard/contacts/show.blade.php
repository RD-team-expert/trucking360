<!-- resources/views/dashboard/contacts/show.blade.php -->

@extends('layouts.dashboard')

@section('title', 'Contact Details')

@section('content')
    <h1>Contact Details</h1>

    <div class="card mt-4">
        <div class="card-header">
            <strong>{{ $contact->first_name }} {{ $contact->last_name }}</strong>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Subject:</strong> {{ $contact->subject ?? 'N/A' }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $contact->message }}</p>
        </div>
    </div>

    <a href="{{ route('dashboard.contacts.index') }}" class="btn btn-primary mt-3">Back to Contacts</a>
@endsection
