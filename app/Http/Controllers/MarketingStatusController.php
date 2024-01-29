<?php

namespace App\Http\Controllers;

use App\Models\MarketingStatus;
use Illuminate\Http\Request;

class MarketingStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $query = MarketingStatus::query();

       $status_lists = $query->latest()->get();
       return view('listStatus', compact('status_lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('createStatus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $status = new MarketingStatus;

       $status->company_name = $request->company_name;
       $status->mkt_status = $request->mkt_status;
       $status->is_active = $request->is_active;
       

        $status->save();
        return redirect()->route('listStatus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $status_show = MarketingStatus::where('id', $id)->first();
         return view('showStatus', compact('status_show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $status_edit = MarketingStatus::where('id', $id)->first();
         return view('editStatus', compact('status_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $status = MarketingStatus::where('id', $id)->first();

            $status->company_name = $request->company_name;
            $status->mkt_status = $request->mkt_status;
            $status->is_active = $request->is_active;

        $status->save();
        
        return redirect()->route('listStatus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         MarketingStatus::where('id', $id)->delete();
         return redirect()->back();
    }
}
