@extends('layout')

@section('title')
Marketing_Source
@endsection

@section('content')
<br>
<div class="container">
      <h1>Marketing Source</h1>


<form method="POST" action="{{ route('createSource.store') }}">
  @csrf
<div class="row justify-content-md-center">

<br>
    <div class="col-4">

        <label>Company</label>
        <br>
        <select name="company_id" class="form-control" style="height:35px; width:395px;">
        <option value="">Select Your Company</option>
        @foreach($source_company as $company)
            <option value="{{$company->id}}">{{$company->company_name}}</option>
        @endforeach                             
        </select>
        <br>
         <label>Market Source</label>
        <input type="text" class="form-control" name="mkt_source">
        <br>
        <label>Short No.</label>
        <input type="number" class="form-control" name="short_no">
        <br>
        <label>Active Status</label>
        <input type="radio" name="is_active" value="1" checked>   
        <label>Active</label>        
        <input type="radio" name="is_active" value="0">
        <label>In active</label>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Create">

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
