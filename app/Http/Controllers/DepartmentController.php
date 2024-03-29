<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\MarketingStatus;
use Illuminate\Http\Request;

class DepartmentController extends Controller
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
           $dept_info = MarketingStatus::all();
        return view('createDept', compact('dept_info'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $dept = new Department;

            $dept->company_id = $request->company_id;
            $dept->dept_name = $request->dept_name;
            $dept->is_active = $request->is_active;

        $dept->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        //
    }
}
