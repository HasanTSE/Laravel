<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MktLead;
use App\Models\MktLeadDetail;
use App\Models\MarketingScope;
use App\Models\Party;
use App\Models\MktSource;



class MktLeadController extends Controller
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
        $lead_scope = MarketingScope::all();
        $customerId = Party::all();
        $sourceId = MktSource::all();
        return view('createLeadGen', compact('lead_scope', 'customerId', 'sourceId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $mkt_Lead = new MktLead;

             $mkt_Lead->lead_id = $request->lead_id;
             $mkt_Lead->customer_id = $request->customer_id;
             $mkt_Lead->lead_gen_date = $request->lead_gen_date;
             $mkt_Lead->scope_id = $request->scope_id;
             $mkt_Lead->focus_scope_id = $request->focus_scope_id;
             $mkt_Lead->source_id = $request->source_id;
             $mkt_Lead->budget_approx = $request->budget_approx;
             $mkt_Lead->lead_days_approx = $request->lead_days_approx;
             $mkt_Lead->mkt_emp_id = $request->mkt_emp_id;
             $mkt_Lead->mkt_desig_id = $request->mkt_desig_id;
             $mkt_Lead->mkt_dept_id = $request->mkt_dept_id;
             $mkt_Lead->company_id = $request->company_id;
             $mkt_Lead->lead_closing_date = $request->lead_closing_date;
             $mkt_Lead->closing_reason_id = $request->closing_reason_id;
             $mkt_Lead->status = $request->status;
             $mkt_Lead->remarks = $request->remarks;

       $mkt_Lead->save(); 


            $type = $request->input('type',[]); 
            $contact_person = $request->input('contact_person',[]);
            $dept_name = $request->input('dept_name',[]);
            $desig_name = $request->input('desig_name',[]);
            $mobile = $request->input('mobile',[]);
            $email = $request->input('email',[]);       
            $image_id = $request->input('image_id',[]);

        $mkt_Lead_Detail = [];
            
// Find the maximum count among all arrays
$maxCount = max(
    count($type),
    count($contact_person),
    count($dept_name),
    count($desig_name),
    count($mobile),
    count($email),
    count($image_id)
);

// Iterate over the arrays with the maximum count

            // foreach ($type as $index => $type) {
    foreach (range(0, $maxCount - 1) as $index) {
        $mkt_Lead_Detail[] = [
            "type" => $type[$index],        
            "contact_person" => $contact_person[$index],
            "dept_name" => $dept_name[$index],
            "desig_name" => $desig_name[$index],
            "mobile" => $mobile[$index],
            "email" => $email[$index],
            "image_id" => $image_id[$index],         
        ];  
    }     
        MktLeadDetail::insert($mkt_Lead_Detail);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(MktLead $mktLead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MktLead $mktLead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MktLead $mktLead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MktLead $mktLead)
    {
        //
    }
}
