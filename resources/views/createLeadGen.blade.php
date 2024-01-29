@extends('layout')

@section('title')
Lead Generation
@endsection

@section('content')
<br>
<div class="container">
    <h1>Lead Generation</h1>

<form method="POST" action="{{ route('createLeadGen.store') }}">
  @csrf

<div class="row">
    <div class="col-3">
        <label>Lead ID</label>
        <input type="text" class="form-control" name="lead_id" id="lead_no" readonly>
    </div>
    
    <div class="col-3">
        <label>Lead Generation Date</label>
        <input type="date" class="form-control" name="lead_gen_date"  value="{{ now()->timezone('Asia/Dhaka')->format('Y-m-d') }}">
    </div>

    <div class="col-3">
        <label>Customer</label>              
        <br>
        <select name="customer_id" class="form-control" style="height:35px; width:300px;">
        <option value="">Select Your Customer</option>
        @foreach($customerId as $customer)
            <option value="{{$customer->id}}">{{$customer->party_name}}</option>
        @endforeach                             
        </select>
    <br>
    </div>

    <div class="col-3">
        <label>Lead Source</label>              
        <br>
                <select name="source_id" class="form-control" style="height:35px; width:300px;">
                <option value="">Select Your Source</option>
                @foreach($sourceId as $source)
                    <option value="{{$source->id}}">{{$source->mkt_source}}</option>
                @endforeach                             
                </select>
        <br>
    </div>  
</div>

<div class="row">
    <div class="col-3">
    <label>Scope of Work</label>              
    <input type="text" class="form-control" name="scope_id">
    </div>
    <div class="col-3">
    <label>Focus Scope</label>
    <br>
        <select name="focus_scope_id" class="form-control" style="height:35px; width:300px;">
        <option value="">Select Your Focus Project</option>
        @foreach($lead_scope as $focus_scope)
            <option value="{{$focus_scope->id}}">{{$focus_scope->scope_name}}</option>
        @endforeach                             
        </select>
    <br>
    </div>
     <div class="col-3">
    <label>Budget (Approximate)</label>              
    <input type="number" class="form-control" name="budget_approx">
    </div>
    <div class="col-3">
    <label>Lead Close Days (Approx.)</label>
    <input type="number" class="form-control" name="lead_days_approx">
    </div>
</div>

<div class="row">
    <div class="col-3">
    <label>Marketing Person</label>
    <input type="number" class="form-control" name="mkt_emp_id" readonly>
    </div>
    <div class="col-3">
    <label>Designation</label>              
    <input type="number" class="form-control" name="mkt_desig_id" readonly>
    </div>
    <div class="col-3">
    <label>Department</label>
    <input type="number" class="form-control" name="mkt_dept_id" readonly>
    </div>
    <div class="col-3">
    <label>Company</label>
    <input type="number" class="form-control" name="company_id" readonly>
    </div>
</div>

<div class="row">
    <div class="col-3">
    <label>Lead Closing Date</label>
    <input type="date" class="form-control" name="lead_closing_date" value="{{ now()->timezone('Asia/Dhaka')->format('Y-m-d') }}">
    </div>
    <div class="col-3">
    <label>Closing Reason</label>              
    <input type="text" class="form-control" name="closing_reason_id">
    </div>
    <div class="col-3">
    <label>Status</label>
    <br>
        <input type="radio" name="status" value="1" checked>   
        <label>Active</label>        
        <input type="radio" name="status" value="0">
        <label>In active</label>
    </div>
    <div class="col-3"></div>
</div>
<div class="row">
    <div class="col-3">
    <label>Remarks</label>
    <textarea id="note" name="remarks" class="form-control" rows="5" cols="40"></textarea>
    </div>

        <div class="col-md-12 mt-3">
            <input type="submit" class="btn btn-primary" value="Create" >
        </div>
</div>

<br>

<table class="table table-responsive table-bordered mb-0" id="tbl_posts"  style="text-align: center;">
<thead> 
    <br>
    <tr>
    <th>Sl</th>
    <th>Type</th>
    <th>Contact Person</th>
    <th>Department</th>
    <th>Designation</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Visiting Card <br>(Upload)</th>
    <th>More</th>
    </tr>
</thead>
           
  <tbody id="tbl_posts_body">
        <tr id="rec_1">
            <td style="text-align: left;"><span class="sl">1</span></td>

    <td>  
         <select name="type[]" id="" class="form-control">
            <option value="">Type</option>
            <option value="Primary">Primary</option>
            <option value="Secondary">Secondary</option>
         </select> 
    </td>

    <td><input autocomplete="off" type="text" name="contact_person[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="dept_name[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="desig_name[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="mobile[]" maxlength="11" placeholder="Mobile No." class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="email[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="number" name="image_id[]" placeholder="" class="" id="" size="15"></td>

   <td>
        <button class="btn btn-sm btn-primary add_record" type="button" style="padding: 0.5; font-size: 16px;"><i class="las la-plus-circle"></i> </button>
   </td>
</tr>        
</tbody>   
</table>
</form>

<div style="display:none;">
<table id="table" style="text-align: center;">
    <tr id="">
        <td style="text-align: left;"><span class="sl"></span></td>

    <td>  
         <select name="type[]" id="" class="form-control">
            <option value="">Type</option>
            <option value="Primary">Primary</option>
            <option value="Secondary">Secondary</option>
         </select> 
    </td>

   <td><input autocomplete="off" type="text" name="contact_person[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="dept_name[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="desig_name[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="mobile[]" maxlength="11" placeholder="Mobile No." class="" id="" size="15"></td>
    <td><input autocomplete="off" type="text" name="email[]" placeholder="" class="" id="" size="15"></td>
    <td><input autocomplete="off" type="number" name="image_id[]" placeholder="" class="" id="" size="15"></td>


        <td> 
            <div class="input-group-btn text-left"> 
                <button class="btn btn-sm btn-danger delete_record" onclick="remove_tr(this)" type="button" data-id="0" style="padding: 0.5rem; font-size: 16px"><i class="las la-minus-circle"></i></button>
            </div>
        </td>
    </tr>
</table>                
</div>
@endsection

@push('css')
<style>
      .container{
    text-align: center;
        }
      .row {
    text-align: left;
    display: flex;
    justify-content: space-between; /* Adjust as needed for spacing */
        }
     .col {
    width: 20%; /* Adjust the width of columns as needed */
    padding: 10px;
      }
   .row table td input{
     width: 10;
    }
    .table-area tbody tr:first-child .remove_more {
        display: none;
      }
    u{
    text-align: left;
    }

</style>
@endpush

@push('js')
<script> 
         
            $(document).delegate('button.add_record', 'click', function(e) {
            e.preventDefault(); 

            let content = $('#table tr');
            size = $('#tbl_posts >tbody >tr').length + 1; 

            element = content.clone();
            element.attr('id', 'rec_'+size);

           

            element.find('.delete_record').attr('data-id', size);      

            element.appendTo('#tbl_posts_body');
            dynamic_numbering();
        });

        function remove_tr(that) {
            if (confirm('Do you want to remove this information')) {
                $(that).closest('tr').remove();
                dynamic_numbering();
                }
        }
            function dynamic_numbering() {
            $('.sl').each(function (index) {
                $(this).text(index + 1);
            });
        }



let counter = parseInt(localStorage.getItem('invoice_counter')) || 10000;

  // Increment the counter for the next ID
  counter++;

  // Save the updated counter value
  localStorage.setItem('invoice_counter', counter);

  // Generate the invoice number and set it in the input field
  let leadNo = 'Lead-' + counter;
  document.getElementById('lead_no').value = leadNo;

</script>
@endpush