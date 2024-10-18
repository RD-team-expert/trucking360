@extends('layouts.dashboard')

@section('title', 'Add New FAQ')

@section('content')
<h1 class="mb-4">Add New FAQ</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input:
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('dashboard.faqs.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="question" class="form-label">Question</label>
        <input type="text" class="form-control" id="question" name="question" value="{{ old('question') }}" required>
    </div>

    <div class="mb-3">
        <label for="answer" class="form-label">Answer</label>
        <textarea class="form-control" id="answer" name="answer" required>{{ old('answer') }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Add FAQ</button>
</form>
@endsection
