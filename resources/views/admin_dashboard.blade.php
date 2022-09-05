@extends('admin.layouts.header')

@section('styles') 

    

@endsection

@section('content')

   <div class="content-wrapper">

              <div class="row">

                <div class="col-md-12 grid-margin">

                  <div class="row">

                    <div class="col-12 col-xl-12 mb-4 mb-xl-0">

                      <h3 class="font-weight-bold text-white">Dashboard Overview</h3>

                      <h6 class="font-weight-normal mb-0 text-white">All systems are running smoothly!</h6> </div>

                      <!--<center><a href="{{ route('admin-pay') }}" class="btn btn-primary">Pay</a></center>-->

                  

                  </div>

                </div>

              </div>

              <div class="row">

                <!--<div class="col-md-7 grid-margin stretch-card">-->

                <!--  <div class="card" style="background:#222222">-->

                <!--    <div class="card-people mt-auto">-->

                <!--      <canvas id="barChart"></canvas>-->

                <!--    </div>-->

                <!--  </div>-->

                <!--</div>-->

                <div class="col-md-12 grid-margin transparent">

                  <div class="row">
                      
                    <div class="col-md-4 mb-4 stretch-card transparent">

                      <div class="card custom-color6 pb-3">

                        <div class="card-body text-center">

                          <h4 class="mb-4 font-weight-bold">Active Users</h4>

                          <br>

                          <p class="fs-30 mb-2 font-weight-bold">{{ count($users) }}</p>

                        </div>

                      </div>

                    </div>
                    
                    
                     <div class="col-md-4 mb-4 stretch-card transparent">

                      <div class="card custom-color6 pb-3">

                        <div class="card-body text-center">

                          <h4 class="mb-4 font-weight-bold">Active Coach</h4>

                          <br>

                          <p class="fs-30 mb-2 font-weight-bold">{{ count($coach) }}</p>

                        </div>

                      </div>

                    </div>
                    
                    
                     <div class="col-md-4 mb-4 stretch-card transparent">

                      <div class="card custom-color6 pb-3">

                        <div class="card-body text-center">

                          <h4 class="mb-4 font-weight-bold">Inactive Coach</h4>

                          <br>

                          <p class="fs-30 mb-2 font-weight-bold">{{ count($inacoach) }}</p>

                        </div>

                      </div>

                    </div>
                    
                    <div class="col-md-4 mb-4 stretch-card transparent">

                      <div class="card custom-color6 pb-3">

                        <div class="card-body text-center">

                          <h4 class="mb-4 font-weight-bold">Booking</h4>

                          <br>

                          <p class="fs-30 mb-2 font-weight-bold">{{ $totalBook = count($bookingDone) + count($bookingSchedul) }}</p>

                        </div>

                      </div>

                    </div>
                    
                    <div class="col-md-4 mb-4 stretch-card transparent">

                      <div class="card custom-color6 pb-3">

                        <div class="card-body text-center">

                          <h4 class="mb-4 font-weight-bold">Donations</h4>

                          <br>

                          <p class="fs-30 mb-2 font-weight-bold">{{ count($donate) }}</p>

                        </div>

                      </div>

                    </div>
                    

                    <!--<div class="col-md-4 mb-4 stretch-card transparent">-->

                    <!--  <div class="card custom-color6 pb-3">-->

                    <!--    <div class="card-body text-center">-->

                    <!--      <h4 class="mb-4 font-weight-bold">Sessions</h4>-->

                    <!--      <br>-->

                    <!--      <p class="fs-30 mb-2 font-weight-bold">5</p>-->

                    <!--    </div>-->

                    <!--  </div>-->

                    <!--</div>-->
                    
                    
                    <div class="col-md-4 mb-4 stretch-card transparent">

                      <div class="card custom-color6 pb-3">

                        <div class="card-body text-center">

                          <h4 class="mb-4 font-weight-bold">Earnings</h4>

                          <br>
                          
                           @php $sumPrice = 0; @endphp
                           
                           @if(!empty($paidAmount))
                           
                           @foreach($paidAmount as $amount)
                           
                           @php 
                           $price           = explode(',',$amount->paid_amount);
                           $sumPrice        = $sumPrice + array_sum($price);
                           
                           @endphp
                           
                           @endforeach
                           
                           @endif
                         
                           

                          <p class="fs-30 mb-2 font-weight-bold">
                           ${{ $sumPrice }}
                          </p>
                         
                        </div>

                      </div>

                    </div>


                  </div>

                  <div class="row">

                    <!--<div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">-->

                    <!--  <div class="card custom-color5 pb-3">-->

                    <!--    <div class="card-body text-center">-->

                    <!--      <h4 class="mb-4 font-weight-bold"></h4>-->

                    <!--      <br>-->

                    <!--      <p class="fs-30 mb-2 font-weight-bold"></p>-->

                    <!--    </div>-->

                    <!--  </div>-->

                    <!--</div>-->

                   
                    
                    

                  </div>

                </div>

              </div>

            </div>

@endsection

@section('scripts')

@endsection

