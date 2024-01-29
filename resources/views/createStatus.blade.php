@extends('layout')

@section('title')
Marketing_status
@endsection

@section('content')
<br>
<div class="container">
      <h1>Marketing Status</h1>


<form method="POST" action="{{ route('createStatus.store') }}">
  @csrf
<div class="row justify-content-md-center">

<br>
    <div class="col-4">

        <label>Company</label>
        <input type="text" class="form-control" name="company_name">
        <br>
        <label>Marketing Status</label>
        <input type="text" class="form-control" name="mkt_status">
        <br>
        <label>Active Status</label>
        <input type="radio" name="is_active" value="1" checked>   
        <label>Is active</label>        
        <input type="radio" name="is_active" value="0">
        <label>In active</label>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Create" >
         <a href="listStatus" class="btn btn-secondary">List Page</a>

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