@extends('layout')

@section('title')
Prty Profile
@endsection  

@section('content')
    <div class="container">
        <div class="mt-5">
          
        </div>

        <div class="form-area" action="{{ route('showParty.show', $party_list->id) }}">
            <h1>Party Profile</h1>

            <!-- Display user details -->
            <div class="row">
                
                <div class="col-8">
                    <p><strong>Party Name:</strong> {{ $party_list->party_name }}</p>
                    <p><strong>Short Name:</strong> {{ $party_list->short_name }}</p>
                    <p><strong>Party Code:</strong> {{ $party_list->party_code }}</p>
                    <p><strong>Addres:</strong> {{ $party_list->present_address }}</p>
                    <p><strong>Mobile No.:</strong> {{ $party_list->mobile_no }}</p>
                    <p><strong>Email Address:</strong> {{ $party_list->email_address }}</p>
                    <p><strong>Create At:</strong> {{ $party_list->created_at }}</p>
                    <p><strong>Update At:</strong> {{ $party_list->updated_at }}</p>
                   
                    
                </div>

                <div class="col-4">

                    <p><strong>Web Address:</strong> {{ $party_list->web_address }}</p>
                    
               <p><strong>Party Type:</strong> 
    {{ $party_list->party_type == 'C' ? 'Customer' : ($party_list->party_type == 'LC' ? 'Lead Customer' : 'Supplier') }}
               </p>

                    <p><strong>Is Active:</strong> {{ $party_list->is_active == 1 ? 'Active' : 'Inactive' }}</p>
                    <p><strong>Company:</strong> {{ $party_list->company_id }}</p>       
                    <p><strong>Opening Date:</strong> {{ $party_list->opening_date }}</p>
                    <p><strong>Opening Balance:</strong> {{ $party_list->opening_balance }}</p>                
                    <p><strong>Insert by Emp Id:</strong> {{ $party_list->insert_by_emp_id }}</p>
                    <p><strong>Update by Emp Id:</strong> {{ $party_list->update_by_emp_id }}</p>
                </div>
                
            </div>

            <a href="{{ route('listParty.index') }}" class="btn btn-primary">Back to List Page</a>
        </div>
    </div>
@endsection


@push('css')
    <style>
    h1{
        text-align: center;
    }  
     a{
    width: 100%;
   }    
      .form-area{
          align-items: center;
          justify-content: center;
            padding: 15px;
            margin-top: 40px;
            background-color:white;
        }
   
    </style>
@endpush
