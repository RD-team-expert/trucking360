@extends('layouts.dashboard')

@section('title', 'Client info')

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="sortable-table">
            <thead class="bg-light sticky-top">
                <tr class="text-center">
                    <th>ID <span class="sort-icons" data-column="0">⬆️⬇️</span></th>
                    <th>EIN <span class="sort-icons" data-column="1">⬆️⬇️</span></th>
                    <th>Account # <span class="sort-icons" data-column="2">⬆️⬇️</span></th>
                    <th>Routing # <span class="sort-icons" data-column="3">⬆️⬇️</span></th>
                    <th>Checking/Saving <span class="sort-icons" data-column="4">⬆️⬇️</span></th>
                    <th>Bank Name <span class="sort-icons" data-column="5">⬆️⬇️</span></th>
                    <th>Name on Account <span class="sort-icons" data-column="6">⬆️⬇️</span></th>
                    <th>Legal Business Name <span class="sort-icons" data-column="7">⬆️⬇️</span></th>
                    <th>CSAC Code <span class="sort-icons" data-column="8">⬆️⬇️</span></th>
                    <th>Dispatch <span class="sort-icons" data-column="9">⬆️⬇️</span></th>
                    <th>Fleet <span class="sort-icons" data-column="10">⬆️⬇️</span></th>
                    <th>Hiring <span class="sort-icons" data-column="11">⬆️⬇️</span></th>
                    <th>HR <span class="sort-icons" data-column="12">⬆️⬇️</span></th>
                    <th>Bundle <span class="sort-icons" data-column="13">⬆️⬇️</span></th>
                    <th>Created At <span class="sort-icons" data-column="14">⬆️⬇️</span></th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($clientInfos->isEmpty())
                    <tr>
                        <td colspan="16" class="text-center text-muted py-3">
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
                            <td class="text-center">{!! $clientInfo->dispatch ? '<span class="text-success">✔</span>' : '<span class="text-danger">X</span>' !!}</td>
                            <td class="text-center">{!! $clientInfo->fleet ? '<span class="text-success">✔</span>' : '<span class="text-danger">X</span>' !!}</td>
                            <td class="text-center">{!! $clientInfo->hiring ? '<span class="text-success">✔</span>' : '<span class="text-danger">X</span>' !!}</td>
                            <td class="text-center">{!! $clientInfo->hr ? '<span class="text-success">✔</span>' : '<span class="text-danger">X</span>' !!}</td>
                            <td class="text-center">{!! $clientInfo->bundle ? '<span class="text-success">●</span>' : '<span class="text-secondary">-</span>' !!}</td>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const table = document.getElementById("sortable-table");
            const headers = table.querySelectorAll(".sort-icons");

            headers.forEach((header) => {
                header.addEventListener("click", function() {
                    const columnIndex = this.getAttribute("data-column");
                    const tbody = table.querySelector("tbody");
                    const rows = Array.from(tbody.querySelectorAll("tr"));
                    const isAscending = this.classList.contains("asc");

                    rows.sort((a, b) => {
                        const aText = a.children[columnIndex].textContent.trim();
                        const bText = b.children[columnIndex].textContent.trim();

                        if (!isNaN(aText) && !isNaN(bText)) {
                            return isAscending ?
                                aText - bText :
                                bText - aText; // Numeric Sort
                        }
                        return isAscending ?
                            aText.localeCompare(bText) :
                            bText.localeCompare(aText); // String Sort
                    });

                    rows.forEach((row) => tbody.appendChild(row)); // Re-attach rows in new order

                    this.classList.toggle("asc", !isAscending); // Toggle the sort direction
                });
            });
        });
    </script>


    {{-- The same CSS from your snippet to keep the table header fixed --}}
    <style>
        .sort-icons {
            cursor: pointer;
            margin-left: 5px;
            font-size: 12px;
            color: #6c757d;
            user-select: none;
            display: inline-block;
            transition: color 0.3s ease;
        }

        .sort-icons:hover {
            color: #007bff;
        }

        .sort-icons.asc::after {
            content: "▲";
            /* Ascending Indicator */
            margin-left: 5px;
        }

        .sort-icons:not(.asc)::after {
            content: "▼";
            /* Descending Indicator */
            margin-left: 5px;
        }

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
