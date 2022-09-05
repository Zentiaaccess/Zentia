@extends('coach.layouts.header')
@section('styles') 
@endsection
@section('content')
<div class="content-wrapper">



          <div class="row">

            <div class="col-md-12 grid-margin">

              <div class="col-12 mb-4 mb-xl-0">

                  <h3 class="font-weight-bold text-white">Order</h3>

                  <h6 class="font-weight-normal mb-0 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>

                </div>

             </div>



            <div class="col-md-12 grid-margin w-100">

              <div class="">

                <div class="">

                  <div class="row">



                    <div class="form-group col-lg-12  table-responsive">



                      <table id="order-table" class="table" style="width:100%">

        <thead>

            <tr class="text-white">

                <th>Sr.No.</th>

                <th>Date</th>

                <th>Order Id</th>

                <th>Meeting Date</th>

                <th>User</th>

                <th>Status</th>

                <th>View</th>

            </tr>

        </thead>

         <tbody>
            @if(count($bookings) > 0)
            @php $i = 1; @endphp
            @foreach($bookings as $booking)
            <tr>

                <td>{{ $i }}</td>

                <td>{{ $booking->created_at }}</td>

                <td>{{ $booking->order_id }}</td>

                <td>@if(!empty($booking->meeting_date)){{ $booking->meeting_date }}@else Not Decided @endif</td>

                <td>@if(!empty($booking->user_details->name)){{ $booking->user_details->name }}@endif</td>

                <td><button type="button" class="btn btn-info px-3 py-2 btn-icon-text">

                     <i class="mdi mdi-marker-check"></i> {{ $booking->status }} </button></td>
                    @php $ide = Crypt::encrypt($booking->id); @endphp
                <td><a href="{{ route('coach-booking-view', $ide) }}" class="btn btn-primary btn-icon-text px-3 py-2">

                    <i class="mdi mdi-eye btn-icon-prepend"></i> View </a>

                </td>

            </tr>
            @php $i++; @endphp
            @endforeach
            @endif

        </tbody>

       

    </table>

                      

    </div>



                </div>

                  </div>

                </div>



                

              </div>

            </div>

        </div>
<!-- content-wrapper ends -->
@endsection
@section('scripts')  
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 

        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

     



         <script type="text/javascript">

         $(document).ready(function () {

         $('#order-table').DataTable();

        });

        </script>

        <script>

        $(document).ready(function(){

          $('[data-toggle="tooltip"]').tooltip();   

        });

        </script>

@endsection
