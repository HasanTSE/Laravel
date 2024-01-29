<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MktSource;
use App\Models\MarketingStatus;


class MktSourceController extends Controller
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
        $source_company = MarketingStatus::all();
        return view('createSource', compact('source_company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ource = new MktSource;

            $ource->company_id = $request->company_id;
            $ource->mkt_source = $request->mkt_source;
            $ource->short_no = $request->short_no;
            $ource->is_active = $request->is_active;

        $ource->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(MktSource $mktSource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MktSource $mktSource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MktSource $mktSource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MktSource $mktSource)
    {
        //
    }
}
