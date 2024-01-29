@extends('layout')

@section('title')
Marketing Scope
@endsection

@section('content')
<br>
<div class="container">
    <h1>Update Marketing Scope</h1>


     <form method="POST" action="{{ route('updateScope.update', $edit_Scopes->id) }}">
  @csrf
  @method('PUT')
<div class="row justify-content-md-center">

<br>
    <div class="col-4">

        <label>Company</label>
        <br>
        <select name="company_id" class="form-control" style="height:35px; width:395px;">
        <option value="">Select Your Company</option>
        @foreach($scope_company as $company)
            <option value="{{$company->id}}" @if($company->id == $edit_Scopes->company_id) selected @endif>
                {{$company->company_name}}</option>
        @endforeach                             
        </select>
        <br>
        <label>Department</label>
        <br>
        <select name="dept_id" class="form-control" style="height:35px; width:395px;">
        <option value="">Select Your Department</option>
        @foreach($scope_dept as $dept)
            <option value="{{$dept->id}}" @if($dept->id == $edit_Scopes->dept_id) selected @endif>
                {{$dept->dept_name}}</option>
        @endforeach                             
        </select>
        <br>
        <label>Product</label>
        <input type="text" class="form-control" name="scope_name" value="{{ $edit_Scopes->scope_name }}">
        <br>
        <label>Active Status</label>
        <input type="radio" name="is_active" value="1" {{ $edit_Scopes->is_active == 1 ? 'checked' : '' }}> 
        <label>Active</label>          
        <input type="radio" name="is_active" value="0" {{ $edit_Scopes->is_active == 0 ? 'checked' : '' }}>
        <label>In active</label>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Update">
        <a href="{{ route('listScope.index') }}" class="btn btn-secondary">List Page</a>

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
