<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Party::query();
        
        // $party_lists = $query->where('id', $id)->latest()->get();
        $party_lists = $query->latest()->get();
        return view('listParty', compact('party_lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('createParty');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $party = new Party;

           $party->company_id = $request->company_id;
           $party->party_name = $request->party_name;
           $party->short_name = $request->short_name;
           $party->party_code = $request->party_code;
           $party->present_address = $request->present_address;
           $party->mobile_no = $request->mobile_no;
           $party->email_address = $request->email_address;
           $party->web_address = $request->web_address;
           $party->party_type = $request->party_type;
           $party->opening_date = $request->opening_date;          
           $party->opening_balance = $request->opening_balance;           
           $party->is_active = $request->is_active;
             
         $party->save();
          
         
          return redirect()->route('listParty.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $party_list = Party::where('id', $id)->first();
         return view('showParty', compact('party_list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit($id)
    {
         $party_list = Party::where('id', $id)->first();
         return view('editParty', compact('party_list'));
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $party = Party::where('id', $id)->first();

        $party->company_id = $request->company_id;
        $party->party_name = $request->party_name;
        $party->short_name = $request->short_name;
        $party->party_code = $request->party_code;
        $party->present_address = $request->present_address;
        $party->mobile_no = $request->mobile_no;
        $party->email_address = $request->email_address;
        $party->web_address = $request->web_address;
        $party->party_type = $request->party_type;
        $party->opening_date = $request->opening_date;          
        $party->opening_balance = $request->opening_balance;           
        $party->is_active = $request->is_active;
       
        
         $party->save();
          
          return redirect()->route('listParty.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Party::where('id', $id)->delete();
         return redirect()->back();
        // return redirect()->back()->with('success','Successfully Delete!');
        
    }
}
