@extends('layout')

@section('title')
Scope Profile
@endsection  

@section('content')
    <div class="container">
        

        <div class="form-area" action="{{ route('showScope.show',  $show_Scopes->id) }}">
            <h1>Scope Profile</h1>
            <br>
            <br>

            <!-- Display user details -->
            <div class="row justify-content-center text-center">
                
                <div class="col-4 md">
                    <p><strong>Company:</strong> {{  $show_Scopes->marketing_status->company_name ?? '' }}</p>
                    <p><strong>Department:</strong> {{  $show_Scopes->departments->dept_name ?? '' }}</p>
                    <p><strong>Create At:</strong> {{  $show_Scopes->created_at }}</p>
                    <p><strong>Update At:</strong> {{  $show_Scopes->updated_at }}</p>
                </div>

                <div class="col-4 md">
                     <p><strong>Product:</strong> {{  $show_Scopes->scope_name }}</p>
                    <p><strong>Is Active:</strong> {{  $show_Scopes->is_active == 1 ? 'Active' : 'Inactive' }}</p>    
                    <p><strong>Insert by Emp Id:</strong> {{  $show_Scopes->insert_by }}</p>
                    <p><strong>Update by Emp Id:</strong> {{  $show_Scopes->update_by }}</p>
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
