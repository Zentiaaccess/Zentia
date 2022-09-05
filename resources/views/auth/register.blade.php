
 <!DOCTYPE html>
<html lang="en">

<head>

<!--=======Head========-->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zentia</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('theme/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('theme/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ URL::asset('theme/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('theme/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('theme/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <!-- Custom css -->
  <link rel="stylesheet" href="{{ URL::asset('theme/css/custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('theme/vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('theme/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('theme/vendors/peity/peity.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('theme/images/favicon.png') }}" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css">
 <!--=======Head========-->
</head>


<body class="sidebar-dark bg-black">

      <div class="nev-color px-2 py-2">


  
   
    <ul class="nav navbar-nav d-block pt-1">
      <li><a href="{{ route('discover') }}">Discover Advisore</a></li>
    
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('for-business') }}">For Business</a></li>
      
    </ul>
     <div class="navbar-header ">
    <a class="navbar-brand log-logo" href="{{url('/')}}"><img src="{{ URL::asset('theme/images/zentia-logo1.png') }}"></a>
  </div>

</div>
    
   
        <div class="row">
          <div class="col-lg-6 text-center m-auto d-none d-sm-block">
             <div class="mx-auto my-auto">
            
             <img src="{{ URL::asset('theme/images/zentia-logo1.png') }}" alt="logo">
          </div>
          </div>

          <div class="col-lg-6 px-0 custom-color1">

             <div class="auth-form-light text-left py-5 px-4 px-sm-5">

             

              <h3 class="font-weight-bold">New to Zentia?</h3>

              <h6 class="">Sign up for an account - It only takes a minute.</h6>

              <form method="POST" class="pt-3 row" action="{{ route('register') }}">
                @csrf
                
                <input id="role" type="text" name="role" value="coach" hidden>

                <div class="form-group col-lg-6">
                  <label>First and Last Name</label>
                  <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="" maxlength="50">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group col-lg-6">
                  <label>E-mail</label>
                  <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="" maxlength="50">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!--<div class="form-group col-lg-6 md-group">-->
                <!--  <label>Phone Number</label>-->
                <!--  <input id="mobile_code" type="text" class="form-control form-control-lg mobnum @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder=""  maxlength="10">-->

                <!--    @error('phone')-->
                <!--        <span class="invalid-feedback" role="alert">-->
                <!--            <strong>{{ $message }}</strong>-->
                <!--        </span>-->
                <!--    @enderror-->
                <!--</div>-->
                
                @php
					$countries = DB::table('country')->get();
				@endphp
				  <div class="form-group col-lg-6">
                     <label>Phone Number</label>
                    <div class="input-group d-flex">
                      <div class="col-5 px-0">
                          <div class="input-group-prepend">
                        <select name="country_code" class="js-example-basic-single h-50 custom-border countrycode-select">
                           @if(count($countries) > 0)
                           @foreach($countries as $country)
                           
                           <option value="{{$country->phonecode}}" {{ (old('country_code') == $country->phonecode ? "selected":"") }}><span id="tt"> {{ $country->iso }}</span> +{{ $country->phonecode }}</option>
                            
                           @endforeach
                           @endif
                        </select>
                      </div>
                      </div>
                      <div class="col-7 px-0">
                          <input id="phone" type="text" class="form-control form-control-lg mobnum @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder=""  maxlength="10" style="border-radius: 4px;">
                      </div>
                      <!-- <input type="text" class="form-control" aria-label="Text input with dropdown button"> -->
                      <!--<input type="text" name="phone" aria-label="Text input with dropdown button" value="@if(!empty($user->phone)){{old('phone', $user->phone)}}@endif"  class="form-control" id="phone" placeholder="+93-xxxxxxxx" maxlength="10" style="height: 101%; border-radius: 4px;">-->
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>
                    
                <!-- <div class="form-group col-lg-6">
                  <label>Country</label>
                  <select name="country" class="js-example-basic-single w-100 h-50 custom-border">
                    <option value="AL">Alabama</option>
                    <option value="WY">Wyoming</option>
                    <option value="AM">America</option>
                    <option value="CA">Canada</option>
                    <option value="RU">Russia</option>
                  </select>
                   @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div> -->

                <div class="form-group col-lg-6">
                  <label>Password</label>
                  <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" maxlength="30">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

               <!-- <div class="form-group col-lg-6">
                  <label>Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
               </div>
 -->


                <div class="form-group col-lg-12">
                  <label>Expertise</label>
                  <textarea id="expertise" class="form-control form-control-lg @error('expertise') is-invalid @enderror" name="expertise" row="1"></textarea>

                    @error('expertise')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group col-lg-12">
                  <label>Why do you want to be an advisor?</label>
                  <textarea id="why_advisor" class="form-control form-control-lg @error('why_advisor') is-invalid @enderror" name="why_advisor" row="1"></textarea>

                    @error('why_advisor')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                
                <div class="mb-12 col-lg-12">
                  <div class="form-check">
                    <label class="form-check-label text-muted @error('terms_and_conditions') is-invalid @enderror">
                      <input type="checkbox" value="1" name="terms_and_conditions" class="form-check-input "  checked> Accept terms & conditions </label>
                      @error('terms_and_conditions')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-check">
                    <label class="form-check-label text-muted  @error('marketing_and_news') is-invalid @enderror">
                      <input type="checkbox" value="1"  name="marketing_and_news" class="form-check-input " > Accept Marketing and News </label>
                      @error('marketing_and_news')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                </div>
                <div class="mb-12 mt-3 col-lg-12 mx-auto text-center ">
                  <div class="col-lg-6 mx-auto"> <button type="submit"  class="btn btn-block btn-primary btn-lg  col-lg-12 font-weight-medium auth-form-btn">Sign Up</button> </div>
                </div>
                <div class="mb-12 pt-4 mt-2 col-lg-12">
                  <h6 class="font-weight-bold">Already have an account? <a href="{{ route('login') }}" class="text-white"> Login</a></h6> </div>

              </form>
            </div>

          </div> 

 </div>

        </div>

      </div>

      <!-- content-wrapper ends -->

    </div>

    <!-- page-body-wrapper ends -->

  </div> 

    <!-- page-body-wrapper ends -->

  </div>


     <!-- container-scroller -->
  <!--=======Js========-->
  <script src="{{ URL::asset('theme/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ URL::asset('theme/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('theme/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ URL::asset('theme/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ URL::asset('theme/js/dataTables.select.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ URL::asset('theme/js/off-canvas.js') }}"></script>
  <script src="{{ URL::asset('theme/js/hoverable-collapse.js') }}"></script>
  <script src="{{ URL::asset('theme/js/template.js') }}"></script>
  <script src="{{ URL::asset('theme/s/settings.js') }}j"></script>
  <script src="{{ URL::asset('theme/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ URL::asset('theme/js/dashboard.js') }}"></script>
  <script src="{{ URL::asset('theme/js/Chart.roundedBarCharts.js') }}"></script>
  <script src="{{ URL::asset('theme/vendors/select2/select2.min.js') }}"></script>
  <script type="{{ URL::asset('theme/vendors/peity/peity.min.js') }}"></script>
  <script src="{{ URL::asset('theme/js/chart.js') }}"></script>

     <!--=======Js========-->

<script src="{{ URL::asset('theme/js/intlTelInput.js') }}"></script>

        <script type="text/javascript">



        if ($(".js-example-basic-single").length) {

    $(".js-example-basic-single").select2();

  }


$("#mobile_code").intlTelInput({

  initialCountry: "in",

  separateDialCode: true,

  // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"

});

        </script>
<!--<script>-->
<!--    $("#email").keyup(function(){-->
<!--      var email = $("#email").val();-->
<!--      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;-->
<!--      if(!regex.test(email)) { -->
<!--          $("#err_email").text("tet");-->
<!--        return false;-->
<!--      }else{ alert("ss");-->
<!--        return true;-->
<!--      }-->
<!--    });-->
<!--</script>-->

</body>
</html>

