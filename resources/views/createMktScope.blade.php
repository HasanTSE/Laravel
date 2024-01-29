@extends('layout')

@section('title')
Marketing Scope
@endsection

@section('content')
<br>
<div class="container">
    <h1>Marketing Scope</h1>


<form method="POST" action="{{ route('createScope.store') }}">
  @csrf
<div class="row justify-content-md-center">

<br>
    <div class="col-4">

        <label>Company</label>
        <br>
        <select name="company_id" class="form-control" style="height:35px; width:395px;">
        <option value="">Select Your Company</option>
        @foreach($scope_company as $company)
            <option value="{{$company->id}}">{{$company->company_name}}</option>
        @endforeach                             
        </select>
        <br>
        <label>Department</label>
        <br>
        <select name="dept_id" class="form-control" style="height:35px; width:395px;">
        <option value="">Select Your Department</option>
        @foreach($scope_dept as $dept)
            <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
        @endforeach                             
        </select>
        <br>
        <label>Product</label>
        <input type="text" class="form-control" name="scope_name">
        <br>
        <label>Active Status</label>
        <input type="radio" name="is_active" value="1" checked>   
        <label>Active</label>        
        <input type="radio" name="is_active" value="0">
        <label>In active</label>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Create">
        <a href="listScope" class="btn btn-secondary">List Page</a>

    </div>
</div>
</form>
</div>

@endsection 
@push('css')
    <style>
         .container{
            text-align: center;
        }
        .row{
            text-align: left;
        }
    </style>
@endpush
