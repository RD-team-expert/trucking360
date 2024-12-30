<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use App\Models\ZoloClientinfo;
use Illuminate\Http\Request;

class ZoloClientInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all client info records
        $clientInfos = ZoloClientinfo::all();
        $settings = GeneralSetting::first();

        // Return a view with these records
        return view('dashboard.client.index', compact('clientInfos', 'settings'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Find the record by ID or throw a 404
        $clientInfo = ZoloClientinfo::findOrFail($id);
        $settings = GeneralSetting::first();

        // Return a view to edit this record
        return view('dashboard.client.edit', compact('clientInfo', 'settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate if needed
        $request->validate([
            'ein'                => 'required',
            'account_number'     => 'required',
            'routing_number'     => 'required',
            'checking_saving_acc'=> 'required',
            'name_of_bank'       => 'required',
            'name_on_acc'        => 'required',
            'legal_b_name'       => 'required',
            'csac_code'          => 'required',
            'dispatch'           => 'required',
            'fleet'              => 'required',
            'hiring'             => 'required',
            'hr'                 => 'required',
            'bundle'             => 'required',

        ]);

        // Find the existing record
        $clientInfo = ZoloClientinfo::findOrFail($id);

        // Update the record with form data
        $clientInfo->update($request->all());

        // Redirect back to the index page with a success message
        return redirect()->route('zolo-clientinfo.index')->with('success', 'Record updated successfully!');
    }
}
