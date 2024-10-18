@extends('layouts.dashboard')

@section('title', 'Edit FAQ')

@section('content')
<h1 class="mb-4">Edit FAQ</h1>

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

<form action="{{ route('dashboard.faqs.update', $faq->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="question" class="form-label">Question</label>
        <input type="text" class="form-control" id="question" name="question" value="{{ $faq->question }}" required>
    </div>

    <div class="mb-3">
        <label for="answer" class="form-label">Answer</label>
        <textarea class="form-control" id="answer" name="answer" required>{{ $faq->answer }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Update FAQ</button>
</form>
@endsection
