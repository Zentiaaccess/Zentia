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
      <div class="mx-auto my-auto"> <img src="{{ URL::asset('theme/images/zentia-logo1.png') }}" alt="logo"> </div>
    </div>
    <div class="col-lg-6 px-0 custom-color1" style="height: 100vh">
      <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h3 class="font-weight-bold mb-4">Don't have an account?</h3> 
            <!--<a class="btn btn-primary btn-lg col-lg-12 font-weight-bold auth-form-btn" href="{{ route('register') }}">Sign Up</a> -->
            <div class="row">
                <div class="col-md-6">
                    <a class="btn btn-primary font-weight-bold auth-form-btn px-5 py-3" href="{{ route('user-register') }}">Sign Up as User</a>
                </div>
                 <div class="col-md-6">
                    <a class="btn btn-primary font-weight-bold auth-form-btn px-5 py-3" href="{{ route('register') }}">Become Advisor</a>
                </div>
            </div>
          </div>
        </div>
                
           @if($message = Session::get('success_done'))
           <div class="alert alert-success alert-dismissible fade show col-lg-10 mt-3 mx-auto" role="alert">
              <strong> <i class="mdi mdi-thumb-up-outline"></i> {{ $message }}</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
           @endif
            @if($message = Session::get('error_msg'))
           <div class="alert alert-danger alert-dismissible fade show col-lg-10 mt-3 mx-auto" role="alert">
              <strong>{{ $message }}</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
           </div>
           @endif
   
          <form class="pt-3 mt-3 row" method="POST" action="{{ route('login') }}"> @csrf
            <div class="col-lg-10 mx-auto">
              <h3 class="font-weight-bold">Already a user? Login here.</h3> </div>
            <div class="col-lg-10 mx-auto">
              <div class="form-group">
                <label>Email</label>
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder=""> @error('email') <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span> @enderror </div>
              <div class="form-group">
                <label>Password</label>
                <input id="password" type="password" class="form-control form-control-lg pass @error('password') is-invalid @enderror" name="password" required placeholder=""> @error('password') <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span> @enderror </div>
              <div class="mt-3">
                <button class="btn btn-block btn-primary custom-color2 btn-lg font-weight-medium auth-form-btn" type="submit">Login</button>
              </div>
              <div class="">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}> Keep me signed in <i class="input-helper"></i></label>
                </div> @if (Route::has('password.request')) <a href="{{ route('password.request') }}" class="text-black font-weight-bold">Forgot password?</a> @endif </div>
              
            </div>
          </form>
        </div>
    </div>
  </div>
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
  <script src="{{ URL::asset('theme/s/dashboard.js') }}j"></script>
  <script src="{{ URL::asset('theme/js/Chart.roundedBarCharts.js') }}"></script>
  <script src="{{ URL::asset('theme/vendors/select2/select2.min.js') }}"></script>
  <script type="{{ URL::asset('theme/vendors/peity/peity.min.js') }}"></script>
  <script src="{{ URL::asset('theme/js/chart.js') }}"></script>
  <!--=======Js========-->
</body>

</html>