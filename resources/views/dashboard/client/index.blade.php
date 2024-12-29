@extends('layouts.dashboard')

@section('title', 'Client info')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="bg-light sticky-top">
                <tr class="text-center">
                    <th>ID</th>
                    <th>EIN</th>
                    <th>Account #</th>
                    <th>Routing #</th>
                    <th>Checking/Saving</th>
                    <th>Bank Name</th>
                    <th>Name on Account</th>
                    <th>Legal Business Name</th>
                    <th>CSAC Code</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($clientInfos->isEmpty())
                    <tr>
                        <td colspan="11" class="text-center text-muted py-3">
                            No records found. Please check back later.
                        </td>
                    </tr>
                @else
                    @foreach ($clientInfos as $clientInfo)
                        <tr>
                            <td>{{ $clientInfo->id }}</td>
                            <td>{{ $clientInfo->ein }}</td>
                            <td>{{ $clientInfo->account_number }}</td>
                            <td>{{ $clientInfo->routing_number }}</td>
                            <td>{{ $clientInfo->checking_saving_acc }}</td>
                            <td>{{ $clientInfo->name_of_bank }}</td>
                            <td>{{ $clientInfo->name_on_acc }}</td>
                            <td>{{ $clientInfo->legal_b_name }}</td>
                            <td>{{ $clientInfo->csac_code }}</td>
                            <td>{{ $clientInfo->created_at }}</td>
                            <td>
                                <a href="{{ route('zolo-clientinfo.edit', $clientInfo->id) }}"
                                    class="btn btn-primary btn-sm">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>


    {{-- The same CSS from your snippet to keep the table header fixed --}}
    <style>
        /* REMOVE or COMMENT OUT THIS */
        .table-fixed tbody {
            height: 300px;
            overflow-y: auto;
            width: 100%;
        }

        .table-fixed thead,
        .table-fixed tbody,
        .table-fixed tr,
        .table-fixed td,
        .table-fixed th {
            display: block;
        }

        .table-fixed tbody td,
        .table-fixed tbody th,
        .table-fixed thead>tr>th {
            float: left;
            position: relative;
        }

        .table-fixed tbody td::after,
        .table-fixed tbody th::after,
        .table-fixed thead>tr>th::after {
            content: '';
            clear: both;
            display: block;
        }


        /* Set a maximum height for the table container */
        .table-responsive {
            max-height: 400px;
            overflow-y: auto;
        }

        /* Ensure the header row is sticky */
        thead.sticky-top th {
            position: sticky;
            top: 0;
            z-index: 1020;
            background-color: #f8f9fa;
            /* Matches Bootstrap's default background */
        }

        /* Add some padding for better readability on smaller screens */
        table th,
        table td {
            padding: 0.75rem;
            white-space: nowrap;
            /* Prevent text wrapping in narrow columns */
        }

        /* Adjust font size for better responsiveness */
        .table th,
        .table td {
            font-size: 0.9rem;
            /* Slightly smaller text for better fit */
        }
    </style>
@endsection
