@extends('layouts.dashboard')

@section('title', 'Edit Client Info')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Client Info</div>
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Display validation errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('zolo-clientinfo.update', $clientInfo->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="ein">EIN</label>
                                <input type="text" class="form-control" id="ein" name="ein" 
                                       value="{{ old('ein', $clientInfo->ein) }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="account_number">Account Number</label>
                                <input type="text" class="form-control" id="account_number" name="account_number" 
                                       value="{{ old('account_number', $clientInfo->account_number) }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="routing_number">Routing Number</label>
                                <input type="text" class="form-control" id="routing_number" name="routing_number" 
                                       value="{{ old('routing_number', $clientInfo->routing_number) }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="checking_saving_acc">Checking/Saving</label>
                                <input type="text" class="form-control" id="checking_saving_acc" name="checking_saving_acc" 
                                       value="{{ old('checking_saving_acc', $clientInfo->checking_saving_acc) }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="name_of_bank">Bank Name</label>
                                <input type="text" class="form-control" id="name_of_bank" name="name_of_bank" 
                                       value="{{ old('name_of_bank', $clientInfo->name_of_bank) }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="name_on_acc">Name on Acc</label>
                                <input type="text" class="form-control" id="name_on_acc" name="name_on_acc" 
                                       value="{{ old('name_on_acc', $clientInfo->name_on_acc) }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="legal_b_name">Legal Business Name</label>
                                <input type="text" class="form-control" id="legal_b_name" name="legal_b_name" 
                                       value="{{ old('legal_b_name', $clientInfo->legal_b_name) }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="csac_code">CSAC Code</label>
                                <input type="text" class="form-control" id="csac_code" name="csac_code" 
                                       value="{{ old('csac_code', $clientInfo->csac_code) }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>

                            <!-- Optionally, add a link back to the index page -->
                            <a href="{{ route('zolo-clientinfo.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
