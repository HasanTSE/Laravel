@extends('layout')

@section('title')
Marketing_status
@endsection

@section('content')
<br>
<div class="container">
      <h1>Update Marketing Status</h1>


<form method="POST" action="{{ route('updateStatus.update', $status_edit->id) }}">
  @csrf
  @method('PUT')

<div class="row justify-content-md-center">
<br>
    <div class="col-4">
        <label>Company</label>
        <input type="text" class="form-control" name="company_name" value="{{ $status_edit->company_name}}">
        <br>
        <label>Marketing Status</label>
        <input type="text" class="form-control" name="mkt_status" value="{{ $status_edit->mkt_status}}">
        <br>
        <label>Active Status</label>
        <input type="radio" name="is_active" value="1" {{ $status_edit->is_active ==1 ? 'checked' : ''}}>   
        <label>Is active</label>        
        <input type="radio" name="is_active" value="0" {{ $status_edit->is_active ==2 ? 'checked' : ''}}>
        <label>In active</label>
        <br>
        <br>
        <input type="submit" class="btn btn-primary" value="Upadate">
         <a href="listStatus" class="btn btn-secondary">Back to List Page</a>

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