@extends('layout')

@section('title')
Edit Party
@endsection  

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Update Party</h3>
                   
                <form method="POST" action="{{ route('updateParty.update', $party_list->id) }}">
                    @csrf
                    @method('PUT')

                     
                    <div class="row">
                            <div class="col-md-4">
                                <label>Party Name</label>
                                <input type="text" class="form-control" name="party_name" value="{{ $party_list->party_name }}">
                            </div>

                            <div class="col-md-4">
                                <label>Mobile No</label>
                                <input type="text" class="form-control" name="mobile_no" value="{{ $party_list->mobile_no }}">
                            </div>

                             <div class="col-md-4">
                                <label>Opening Date</label>
                                <input type="date" class="form-control" name="opening_date" value="{{ $party_list->opening_date }}">
                            </div>

                    </div>

                    <div class="row">
                         <div class="col-md-4">
                                <label>Short Name</label>
                                <input type="text" class="form-control" name="short_name" value="{{ $party_list->short_name }}">
                            </div>

                            <div class="col-md-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email_address" value="{{ $party_list->email_address }}">
                            </div>

                             <div class="col-md-4">
                                <label>Opening Balance</label>
                                <input type="integer" class="form-control" name="opening_balance" value="{{ $party_list->opening_balance }}">
                            </div>

                    </div>

                    
                    <div class="row">
                         <div class="col-md-4">
                                <label>Party Code</label>
                                <input type="text" class="form-control" name="party_code" value="{{ $party_list->party_code }}">
                            </div>

                            <div class="col-md-4">
                                <label>Web Address</label>
                                <input type="text" class="form-control" name="web_address" value="{{ $party_list->web_address }}">
                            </div>

                          <div class="col-md-4">
                                <label>Address</label>
                                <input type="address" class="form-control" name="present_address" value="{{ $party_list->present_address }}">
                            </div>

                    </div>


                         <div class="row">
                         
                             <div class="col-md-4">
                               <label>Party Type</label>
                               <br>
                                <input type="radio" name="party_type" value="C" {{ $party_list->party_type == 'C' ? 'checked' : '' }}>   
                                <label>Customer</label>                                     
                                <input type="radio" name="party_type" value="LC" {{ $party_list->party_type == 'LC' ? 'checked' : '' }}>
                                <label>Lead Customer</label>
                                <input type="radio" name="party_type" value="S" {{ $party_list->party_type == 'S' ? 'checked' : '' }}>
                                <label>Supplier</label>
                            </div>

                              <div class="col-md-4">
                                <label>Active Status</label>
                               <br>
                                <input type="radio" name="is_active" value="1" {{ $party_list->is_active == 1 ? 'checked' : '' }}>   
                                <label>Active</label>                                 
                                <input type="radio" name="is_active" value="0" {{ $party_list->is_active == 2 ? 'checked' : '' }}>
                                <label>InActive</label>
                            </div>

                    </div>

                     <div class="row">
                         <div class="col-md-4">
                       
                           <label >Company</label>
                                 <br>
                              <input type="text" name="company_id" class="form-control" value="{{$party_list->company->company_name ?? ''}}" readonly>
                             
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Update" >
                                 <a href="{{ route('listParty.index') }}" class="btn btn-secondary">Back to List Page</a>
                            </div>
                    </div>
                </form>
    </div>
@endsection




 
@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush