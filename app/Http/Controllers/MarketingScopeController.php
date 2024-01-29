<?php

namespace App\Http\Controllers;

use App\Models\MarketingScope;
use App\Models\Department;
use App\Models\MarketingStatus;
use Illuminate\Http\Request;

class MarketingScopeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // scope_lists
        $query = MarketingScope::query();
        $scope_lists = $query->latest()->get();
        return view('listScope', compact('scope_lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $scope_company = MarketingStatus::all();
        $scope_dept = Department::all();
        return view('createMktScope', compact('scope_company', 'scope_dept'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $scope = new MarketingScope;

       $scope->company_id = $request->company_id;
       $scope->dept_id = $request->dept_id;
       $scope->scope_name = $request->scope_name;
       $scope->is_active = $request->is_active;

        $scope->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $show_Scopes = MarketingScope::where('id', $id)->first();
         return view('showScope', compact('show_Scopes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {  
        //  $edit_Scopes = MarketingScope::where('id', $id)->first();
         $edit_Scopes = MarketingScope::find($id);

    //      if (!$edit_Scopes) {
    //     // Handle the case where the record is not found, for example:
    //     return redirect()->route('listScope.index')->with('error', 'Record not found');
    // }

         $scope_company = MarketingStatus::all();
         $scope_dept = Department::all();
         
         return view('editScope', compact('edit_Scopes', 'scope_company', 'scope_dept'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
          $scope = MarketingScope::where('id', $id)->first();

       $scope->company_id = $request->company_id;
       $scope->dept_id = $request->dept_id;
       $scope->scope_name = $request->scope_name;
       $scope->is_active = $request->is_active;
        
      
        $scope->save();
        return redirect('listScope');
        //return redirect()->back('listScope.index');
        //return redirect()->route('listScope.index')->with('Record not found');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         MarketingScope::where('id', $id)->delete();
         return redirect()->back();
    }
}
