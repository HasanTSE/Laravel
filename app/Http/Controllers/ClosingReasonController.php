<?php

namespace App\Http\Controllers;

use App\Models\ClosingReason;
use App\Models\MarketingStatus;

use Illuminate\Http\Request;

class ClosingReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $closing_info = MarketingStatus::all();
        return view('createClosing', compact('closing_info'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $closing = new ClosingReason;

       $closing->company_id = $request->company_id;
       $closing->closing_reason = $request->closing_reason;
       $closing->is_active = $request->is_active;

        $closing->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(ClosingReason $closingReason)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClosingReason $closingReason)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClosingReason $closingReason)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClosingReason $closingReason)
    {
        //
    }
}
