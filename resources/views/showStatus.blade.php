@extends('layout')

@section('title')
Status Profile
@endsection  

@section('content')
    <div class="container">
        

        <div class="form-area" action="{{ route('showStatus.show',  $status_show->id) }}">
            <h1>Status Profile</h1>
            <br>
            <br>

            <!-- Display user details -->
            <div class="row justify-content-center text-center">
                
                <div class="col-4 md">
                    <p><strong>Company:</strong> {{  $status_show->company_name }}</p>
                    <p><strong>Marketing Status:</strong> {{  $status_show->mkt_status }}</p>
                    <p><strong>Create At:</strong> {{  $status_show->created_at }}</p>
                    <p><strong>Update At:</strong> {{  $status_show->updated_at }}</p>
                </div>

                <div class="col-4 md">
                    <p><strong>Is Active:</strong> {{  $status_show->is_active == 1 ? 'Active' : 'Inactive' }}</p>    
                    <p><strong>Insert by Emp Id:</strong> {{  $status_show->insert_by }}</p>
                    <p><strong>Update by Emp Id:</strong> {{  $status_show->update_by }}</p>
                </div>  

            </div>

              <div class="row justify-content-center text-center">
                 <div class="col-4 md">
            <a href="{{ route('listStatus.index') }}" class="btn btn-primary">Back to List Page</a>
                 </div>
             </div>
                
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
