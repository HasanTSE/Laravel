@extends('layout')

@section('title')
Create Party
@endsection  

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Create Party</h3>
       
                
                <form method="POST" action="{{ route('party.store') }}">
                    @csrf
                    <div class="row">
                            <div class="col-md-4">
                                <label>Party Name</label>
                                <input type="text" class="form-control" name="party_name">
                            </div>

                            <div class="col-md-4">
                                <label>Mobile No</label>
                                <input type="text" class="form-control" name="mobile_no">
                            </div>

                             <div class="col-md-4">
                                <label>Opening Date</label>
                                <input type="date" class="form-control" name="opening_date" value="{{ now()->timezone('Asia/Dhaka')->format('Y-m-d') }}">
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-md-4">
                                <label>Short Name</label>
                                <input type="text" class="form-control" name="short_name">
                            </div>

                            <div class="col-md-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email_address">
                            </div>

                             <div class="col-md-4">
                                <label>Opening Balance</label>
                                <input type="integer" class="form-control" name="opening_balance">
                            </div>

                     </div>

                    
                      <div class="row">
                            <div class="col-md-4">
                                <label>Party Code</label>
                                <input type="text" class="form-control" name="party_code">
                            </div>

                            <div class="col-md-4">
                                <label>Web Address</label>
                                <input type="text" class="form-control" name="web_address">
                            </div>

                            <div class="col-md-4">
                               <label>Party Type</label>
                               <br>
                                <input type="radio" name="party_type" value="C" checked>   
                                <label>Customer</label>                                     
                                <input type="radio" name="party_type" value="LC">
                                <label>Lead Customer</label>
                                <input type="radio" name="party_type" value="S">
                                <label>Supplier</label>
                            </div>

                     </div>


                     <div class="row">
                         
                            <div class="col-md-4">
                                <label>Active Status</label>
                               <br>
                                <input type="radio" name="is_active" value="1" checked>   
                                <label>Active</label>                                 
                                <input type="radio" name="is_active" value="0">
                                <label>InActive</label>
                            </div>

                            <div class="col-md-4">                      
                                <label >Company</label>
                                    <br>
                                <input type="text" name="company_id" class="form-control" readonly>
                            </div>
                     </div>

                     <div class="row">
                           <div class="col-md-4">
                                <label>Address</label>
                                <textarea type="text" class="form-control" name="present_address" rows="5" cols="52"></textarea>
                            </div>
                     </div>

                    <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Create" >
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