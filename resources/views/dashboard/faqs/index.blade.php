@extends('layouts.dashboard')

@section('title', 'FAQs Management')

@section('content')
<h1 class="mb-4">Manage FAQs</h1>

<a href="{{ route('dashboard.faqs.create') }}" class="btn btn-primary mb-4">Add New FAQ</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-striped" id="faqs-table">
        <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
                <th>Order</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="faq-list">
            @foreach($faqs as $faq)
            <tr data-id="{{ $faq->id }}">
                <td>{{ $faq->question }}</td>
                <td>{{ \Illuminate\Support\Str::limit($faq->answer, 50) }}</td>
                <td>{{ $faq->order }}</td>
                <td>
                    <a href="{{ route('dashboard.faqs.edit', $faq->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dashboard.faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                    </form>
                    <i class="bi bi-list move-icon" style="cursor: move;"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Include jQuery and jQuery UI for sortable functionality -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include jQuery UI -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
    integrity="sha256-l2XJFOLePz2UyRmMFKEKGxBFgix3SyN4q3GUpHvt2+Y=" crossorigin="anonymous"></script>

<script>
    $(function() {
        $('#faq-list').sortable({
            handle: '.move-icon',
            update: function(event, ui) {
                var order = $(this).sortable('toArray', { attribute: 'data-id' });
                $.ajax({
                    url: '{{ route("dashboard.faqs.updateOrder") }}',
                    method: 'POST',
                    data: {
                        order: order,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
        });
    });
</script>

@endsection
