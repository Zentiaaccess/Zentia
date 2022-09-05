@extends('coach.layouts.header')
@section('styles') 
@endsection
@section('content')
<div class="content-wrapper">
 
    @if($user->status == '1' && !empty($user->available_slots) )
        @if(!empty($user->price_20) && !empty($user->expertise) && !empty($user->about_me))
        <div class="alert alert-success alert-dismissible fade show col-lg-8 mx-auto" role="alert">
          <strong> <i class="mdi mdi-thumb-up-outline"></i> Your profile and calendar has been updated and saved. Our team will look through it and approve or provide feedback shortly.</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @else
            <div class="alert alert-success alert-dismissible fade show col-lg-8 mx-auto" role="alert">
              <strong> <i class="mdi mdi-thumb-up-outline"></i> Your calender is updated and saved.Please complete your profile too.</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
        @endif
    @endif
    
    @if($user->status == '1' && empty($user->available_slots))
        <div class="alert alert-danger alert-dismissible fade show col-lg-8 mx-auto" role="alert">
          <strong>Please update your calender.</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
 
 
   @if($message = Session::get('success_done'))
   <div class="alert alert-success alert-dismissible fade show col-lg-8 mx-auto" role="alert">
      <strong> <i class="mdi mdi-thumb-up-outline"></i> {{ $message }}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
   </div>
   @endif
   @if($message = Session::get('error_done'))
   <div class="alert alert-danger alert-dismissible fade show col-lg-8 mx-auto" role="alert">
      <strong> <i class="mdi mdi-thumb-up-outline"></i> {{ $message }}</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
   </div>
   @endif 

   <div class="row">
      <div class="col-md-12 grid-margin">
         <div class="col-12 mb-4 mb-xl-0">
            <h3 class="font-weight-bold text-white">Add Availability</h3>
            <p class="font-weight-normal mb-0 text-white">Please choose the hours you’re interested in receiving meeting requests within in general.<br>
When you receive an actual meeting request, you will always have the option to accept, decline or suggest a different time for the meeting.</p>
         </div>
      </div>
   </div>

   <form action="{{route('coach-update-calender' )}}" id="editform2" method="post">
      {{ csrf_field() }}

      <div class="row">
         <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
               <div class="card-body">
                  <div class="form-group col-lg-12">
                     @php  
                     $ex_array = $user->available_slots; 
                     $arr_ex = explode(",",$ex_array); 
                     @endphp
                     @if($ex_array)
                        @if(in_array("6-7am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="6-7am" checked ><span>6-7 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="6-7am" ><span>6-7 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                        <label>
                        <input type="checkbox"  name="availability[]" value="6-7am" ><span>6-7 Am</span>
                        </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("7-8am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="7-8am" checked ><span>7-8 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="7-8am" ><span>7-8 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox" class="w4" name="availability[]" value="7-8am" ><span>7-8 Am</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("8-9am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="8-9am" checked ><span>8-9 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="8-9am" ><span>8-9 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="8-9am" ><span>8-9 Am</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("9-10am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="9-10am" checked ><span>9-10 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="9-10am" ><span>9-10 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="9-10am" ><span>9-10 Am</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("11-12am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="10-11am" checked ><span>10-11  Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="10-11am" ><span>10-11 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="10-11am" ><span>10-11 Am</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("11-12am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="11-12am" checked ><span>11-12  Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="11-12am" ><span>11-12 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="11-12am" ><span>11-12 Am</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("12-1pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="12-1pm" checked ><span>12-1 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="12-1pm" ><span>12-1 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="12-1pm" ><span>12-1 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("1-2pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="1-2pm" checked ><span>1-2 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="1-2pm" ><span>1-2 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="1-2pm" ><span>1-2 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("2-3pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="2-3pm" checked ><span>2-3 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="2-3pm" ><span>2-3 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="2-3pm" ><span>2-3 Pm</span>
                           </label>
                     </div>
                     @endif



                     @if($ex_array)
                        @if(in_array("3-4pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="3-4pm" checked ><span>3-4 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="3-4pm" ><span>3-4 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="3-4pm" ><span>3-4 Pm</span>
                           </label>
                     </div>
                     @endif


                    @if($ex_array)
                        @if(in_array("4-5pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="4-5pm" checked ><span>4-5 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="4-5pm" ><span>4-5 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="4-5pm" ><span>4-5 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("5-6pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="5-6pm" checked ><span>5-6 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="5-6pm" ><span>5-6 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="5-6pm" ><span>5-6 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("7-8pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="6-7pm" checked ><span>6-7 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="6-7pm" ><span>6-7 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="6-7pm" ><span>6-7 Pm</span>
                           </label>
                     </div>
                     @endif
                     
                     @if($ex_array)
                        @if(in_array("7-8pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="7-8pm" checked ><span>7-8 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="7-8pm" ><span>7-8 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="7-8pm" ><span>7-8 Pm</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("8-9pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="8-9pm" checked ><span>8-9 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="8-9pm" ><span>8-9 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="8-9pm" ><span>8-9 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("9-10pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="9-10pm" checked ><span>9-10 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="9-10pm" ><span>9-10 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="9-10pm" ><span>9-10 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("10-11pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="10-11pm" checked ><span>10-11 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="10-11pm" ><span>10-11 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="10-11pm" ><span>10-11 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("11-12pm", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="11-12pm" checked ><span>11-12 Pm</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="11-12pm" ><span>11-12 Pm</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="11-12pm" ><span>11-12 Pm</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("12-1am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="12-1am" checked ><span>12-1 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="12-1am" ><span>12-1 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="12-1am" ><span>12-1 Am</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("1-2am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="1-2am" checked ><span>1-2 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="1-2am" ><span>1-2 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="1-2am" ><span>1-2 Am</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("2-3am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="2-3am" checked ><span>2-3 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="2-3am" ><span>2-3 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="2-3am" ><span>2-3 Am</span>
                           </label>
                     </div>
                     @endif


                     @if($ex_array)
                        @if(in_array("3-4am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="3-4am" checked ><span>3-4 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="3-4am" ><span>3-4 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="3-4am" ><span>3-4 Am</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("4-5am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="4-5am" checked ><span>4-5 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="4-5am" ><span>4-5 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl">
                           <label>
                           <input type="checkbox"  name="availability[]" value="4-5am" ><span>4-5 Am</span>
                           </label>
                     </div>
                     @endif

                     @if($ex_array)
                        @if(in_array("5-6am", $arr_ex))
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="5-6am" checked ><span>5-6 Am</span>
                            </label>
                         </div>
                        @else
                          <div class="time-select check-cl">
                            <label>
                            <input type="checkbox"  name="availability[]" value="5-6am" ><span>5-6 Am</span>
                            </label>
                         </div>
                        @endif
                     @else
                     <div class="time-select check-cl @error('availability') is-invalid @enderror">
                           <label>
                           <input type="checkbox"  name="availability[]" value="5-6am" ><span>5-6 Am</span>
                           </label>
                     </div>
                     @endif


                     @error('availability')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="form-group col-lg-12 mt-2 text-center">

         <button  type="submit"  class="btn btn-primary btn-sm btn-rounded custom-padding hover-brder" id="save-chage" style="border-radius: 5px;">Save Changes</button>

      </div>

   </form>
</div>
<!-- content-wrapper ends -->
@endsection
@section('scripts')  
   
@endsection
