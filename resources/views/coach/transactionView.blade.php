@extends('coach.layouts.header')
@section('styles') 
@endsection
@section('content')
<div class="content-wrapper">

@if (Session::has('success'))

    <div class="alert alert-success text-center">

        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

        <p>{{ Session::get('success') }}</p>

    </div>

@endif
                    
@php $price = explode(",",$transationView->paid_amount); @endphp

@php $min = explode("/",$transationView->price); 

$ide = $transationView->id;
@endphp


<div class="mb-4">

    <h4 class="font-weight-bold session-heading">Your session details are given below</h4>
    <div class="session-detail-wrap">
        <p>Amount of session: <span> ${{ array_sum($price) }}</span></p>
        <p>Date/Time of session: <span> {{  $transationView->meeting_date }} / {{  $transationView->meeting_time }}</span></p>  
    </div>
    
    
     <div class="session-detail-wrap">
         
      @if($transationView->status == 'Done' && $transationView->pay_status == '0' || $transationView->pay_status == 'Reject')  
      <a href="javascript:(void)" class="btn btn-success px-3 py-2 btn-icon-text" data-href="{{ route('coach-payment-request',$ide) }}" data-toggle="modal" data-target="#confirm-payrequest"><i class="mdi mdi-marker-check"></i>Withdrawal Request </a>
      @endif
      
      
      @if($transationView->status == 'Done' && $transationView->pay_status == '0' || $transationView->pay_status == 'Reject')
      <a href="javascript:(void)" class="btn btn-danger px-3 py-2 btn-icon-text" data-href="{{ route('coach-payment-donet',$ide) }}" data-toggle="modal" data-target="#confirm-donet"><i class="mdi mdi-marker-check"></i> Donet </a>
      @endif
    
    </div>
    
    
    
</div>


<div class="col-md-12 grid-margin w-100">
              <div class="">
                <div class="">
                  <div class="row">

                    <div class="form-group col-lg-12 table-responsive">

                      <table id="transaction-table" class="table" style="width:100%">
                        <thead>
                             <tr class="text-white">
                               
                                <th>Transation Id</th>
                                <th>Price</th>
                             </tr>
                        </thead>
                        <tbody>
                     
                            @php
                            $price        = $transationView->paid_amount;
                            $token_trans  = $transationView->tran_token;
                            
                            
                            $implodes  =  explode(',', $price);
                            $token_one =  explode(',', $token_trans);
                            
                            @endphp
                            
                            
                            @foreach($implodes as $key => $value)
            
                            <tr>
                                
                                <td>{{ $token_one[$key] }}</td>
                                <td>{{ $value }}$</td>
                                
                            </tr>
                            
                            @endforeach
                            
                           
                            

           
                        </tbody>
                       
                    </table>
                                      
                    </div>
                    </div>
                  </div>
                </div>

                
              </div>

 

<!-- Modal -1 -->

<div class="modal fade" id="confirm-payrequest">

  <div class="modal-dialog">

     <div class="modal-content">

        <!-- Modal Header -->

        <div class="modal-header">

           <h4 class="modal-title">Payment Request</h4>

           <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">

           <p>Are you sure, you want to send payment request?</p>

           <!-- <p class="debug-url"></p> -->

        </div>

        <div class="modal-footer">

           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

           <a class="btn btn-success btn-ok">Ok</a>

        </div>

     </div>

  </div>

</div>

<!-- Modal 1-->

<!-- Modal -2 -->

<div class="modal fade" id="confirm-donet">

  <div class="modal-dialog">

     <div class="modal-content">

        <!-- Modal Header -->

        <div class="modal-header">

           <h4 class="modal-title">Payment Donet</h4>

           <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">

           <p>Are you sure, you want to donet this amount?</p>

           <!-- <p class="debug-url"></p> -->

        </div>

        <div class="modal-footer">

           <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

           <a class="btn btn-success btn-ok">Ok</a>

        </div>

     </div>

  </div>

</div>

<!-- Modal 2-->



@endsection
@section('scripts')  

<script>
$('#confirm-payrequest').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

$('#confirm-donet').on('show.bs.modal', function(e) {
$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});
</script>

       
@endsection
