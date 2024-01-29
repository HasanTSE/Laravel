@extends('layout')

@section('title')
Marketing Status
@endsection

@section('content')

    <div class="container">
        <h3 align="center" class="mt-5">Marketing Status Information List</h3>

           <div class="row">
            <div class="col-sm-4">
                <a href="createStatus" class="text-left">
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
                        <th scope="col">Company</th>
                        <th scope="col">Marketing Status</th>
                        <th scope="col">Active Status</th>
                        <th scope="col">Action</th>
                      </tr>

                    </thead>

                    <tbody>
                        @foreach ( $status_lists as $key => $status_list )
                        <tr>
                            <!-- <td scope="col">{{ ++$key }}</td> -->                                   
                            <td scope="col">{{ $status_list->company_name }}</td>                                              
                            <td scope="col">{{ $status_list->mkt_status }}</td>                                              
                            <td scope="col">
                                @if($status_list->is_active == 1)
                                        Yes
                                @else  
                                        No   
                                @endif                                      
                            </td>
                      <td scope="col">
                              
                              <a href="{{ route('editStatus.edit', $status_list->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit
                            </button>
                            </a>
                              <a href="{{ route('showStatus.show', $status_list->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Show
                            </button>
                            </a>
                            
                            <form action="{{ route('Status.delete', $status_list->id) }}" method="POST" style ="display:inline">
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
