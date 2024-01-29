@extends('layout')

@section('title')
Party Profile
@endsection  

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Party Information List</h3>
        
     
            <div class="row">
                <div class="col-sm-4">
                <a href="createParty" class="text-left">
                 <button class="btn btn-primary btn-sm">
                 <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create
                 </button>
                 </a>
                </div>
            </div>

            <table class="table mt-8">
                    <thead>

                      <tr>
                        <!-- <th scope="col">#</th> -->
                        <th scope="col">Party Name</th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Short Name</th>
                        <th scope="col">Mobile No.</th>                                  
                        <th scope="col">Address</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Party Type</th>
                        <th scope="col">Action</th>
                      </tr>

                    </thead>

                    <tbody>
                        @foreach ( $party_lists as $key => $party_list )
                        <tr>
                            <!-- <td scope="col">{{ ++$key }}</td> -->
                            <td scope="col">{{ $party_list->party_name }}</td>                                              
                            <td scope="col">{{ $party_list->company->company_name ?? '' }}</td>                                              
                            <td scope="col">{{ $party_list->short_name }}</td>                                              
                            <td scope="col">{{ $party_list->mobile_no }}</td>                                                                                                               
                            <td scope="col">{{ $party_list->present_address }}</td>                                                                                                                      
                            <td scope="col">{{ $party_list->email_address }}</td>                                              
                            <td scope="col">
                                @if($party_list->is_active == 1)
                                        Yes
                                @else  
                                        No   
                                @endif                                      
                            </td>
                            <td scope="col">
                              @if($party_list->party_type == 'C')
                                Customer
                             @elseif($party_list->party_type == 'LC')
                                Lead Customer
                             @elseif($party_list->party_type == 'S')
                                Supplier
                             @endif                            
                            </td>

                      <td scope="col">
                              
                              <a href="{{ route('editParty.edit', $party_list->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                            </button>
                            </a>
                              <a href="{{ route('showParty.show', $party_list->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Show
                            </button>
                            </a>
                            
                            <form action="{{ route('party.delete', $party_list->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                    </td>

                            
                          
                          </tr>
                        @endforeach
                      
                    </tbody>
                     
                          
                    
                   
                  </table>

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
