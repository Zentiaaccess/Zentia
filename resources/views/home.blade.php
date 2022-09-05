@extends('website.layouts.header')
@section('styles') 
@endsection
@section('content')

    <section class="banner-section">
        <div class="hero-overlay"></div>
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" width="750" height="480">
            <source src="https://booksy-public.s3.amazonaws.com/US.mp4" type="video/mp4">
            <source src="movie.webm" type="video/webm">
            Sorry, your browser does not support HTML5 video.
        </video>
        <div class="container">
            <h1 class="banner-heading exo">Connecting the brightest minds. Book digital one-to-one sessions with tier 1 entrepreneurs and executives.</h1> 
            <!--//Book digital one-to-one sessions with tier 1 entrepreneurs and executives and start investing in yourself today.-->
        </div>
    </section>
    <!-- Banner End -->
    <!-- Featured Section Start -->
    <section class="featured-section">
        <div class="container">
            <p class="banner-bottom-text text-center py-3">Our advisors have been featured in: </p> 
            <div class="logo-row justify-content-center align-items-center pb-4">
                <div>
                    <img class="img-fluid logos" src="{{ URL::asset('assets/media/logo-1.webp') }}">
                </div>
               <div>
                    <img class="img-fluid logos" src="{{ URL::asset('assets/media/logo-2.webp') }}">
               </div>
               <div>
                    <img class="img-fluid logos" src="{{ URL::asset('assets/media/logo-3.webp') }}">
                </div>
               <div>
                    <img class="img-fluid logos" src="{{ URL::asset('assets/media/logo-4.webp') }}">
               </div>
               <div> 
                    <img class="img-fluid logos" src="{{ URL::asset('assets/media/logo-5.webp') }}">
               </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
    <!-- Founders Section Start -->
    <section class="founders-section bg-gray py-5">
        <div class="container">
            <div class="section-title">
                <h3 class="text-white roboto mb-4">Most popular advisors</h3>
            </div> 
            @if(!empty($coaches_one))
            <div class="swiper mySwiper swiper-padding">
                <div class="swiper-wrapper">
                    @foreach($coaches_one as $coach)
                    <div class="swiper-slide">
                        <div class="card-wrapper">
                            @php $ide = Crypt::encrypt($coach->id); @endphp
                            <a href="{{ route('coach-detail', $ide )}}" class="d-block card-img-wrap bg-main">
                               @if(!empty($coach->profile_photo))
                               <img src="{{ URL::asset('/'.$coach->profile_photo) }}">
                               @else
                               <img src="{{ URL::asset('assets/media/favicon.png') }}">
                               @endif
                                <!--<img src="{{ URL::asset('assets/media/s1.jpg') }}" alt="">-->
                                <div class="image-overlay"></div>
                            </a>
                            <a href="{{ route('coach-detail', $ide )}}" class="image-content d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-white mb-0">{{ $coach->name }}</p>
                                    <p class="text-white mb-1">${{ $coach->price_20 }} / Session</p>
                                </div>
                                <img src="{{ URL::asset('assets/media/correct.png') }}" alt="" class="check-img">
                            </a>
                            <div class="featured-card-content">
                                <p class="text-white roboto mb-2 card-subtitle">{{ $coach->biography }}
                                </p>
                                <!--<p class="text-white roboto mb-0 card-subtitle">CMO @Netflix, 2x IPO's in USA -->
                                <!--</p>-->
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            @endif
        </div>
    </section>
    <!-- Founders Section End -->
    <!-- Advisors Section Start -->
    <section class="advisors-section bg-gray py-5">
        <div class="container">
            <div class="section-title">
                <h3 class="text-white roboto mb-4">Advisors who are Unicorn founders</h3>
            </div>
            @if(!empty($coaches_two))
            <div class="swiper mySwiper swiper-padding pb-4">
                <div class="swiper-wrapper">
                    @foreach($coaches_two as $coach)
                    <div class="swiper-slide">
                        <div class="card-wrapper">
                            @php $ide = Crypt::encrypt($coach->id); @endphp
                            <a href="{{ route('coach-detail', $ide) }}" class="d-block card-img-wrap bg-main">
                               @if(!empty($coach->profile_photo))
                               <img src="{{ URL::asset('/'.$coach->profile_photo) }}">
                               @else
                               <img src="{{ URL::asset('assets/media/favicon.png') }}">
                               @endif
                                <!--<img src="{{ URL::asset('assets/media/s1.jpg') }}" alt="">-->
                                <div class="image-overlay"></div>
                            </a>
                            <a href="{{ route('coach-detail', $ide) }}" class="image-content d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-white mb-0">{{ $coach->name }}</p>
                                    <p class="text-white mb-1">${{ $coach->price_20 }} / Session</p>
                                </div>
                                <img src="{{ URL::asset('assets/media/correct.png') }}" alt="" class="check-img">
                            </a>
                            <div class="featured-card-content">
                                <p class="text-white roboto mb-2 card-subtitle">{{ $coach->biography }}
                                </p>
                                <!--<p class="text-white roboto mb-0 card-subtitle">CMO @Netflix, 2x IPO's in USA -->
                                <!--</p>-->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            @endif
            <div class="text-center mt-5">
                <a href="{{ route('discover')}}" class="button-primary roboto discover-btn">Discover All Advisors</a>
            </div>
        </div>
    </section>
    <!-- Advisors Section End -->
    <!-- How it works Section Start -->
    <section class="how-it-works-section bg-gray py-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="text-main roboto mb-4">How Zentia Works</h2>
                <p class="section-subtitle roboto mb-5">Accelerate your learning curve as well as your personal and professional growth trajectory. Receive authentic advice from people who are 2-3 steps ahead of you.</p>
            </div>
            <div class="row">   
                <div class="col-md-4 pe-5 position-relative">
                    <div class="how-it-word-overlay"></div>
                   <div class="work-card-wrap text-center py-5 px-3">
                        <div class="work-card-img position-relative mb-4">
                            <img src="{{ URL::asset('assets/media/card-bg.webp') }}" alt="" class="position-relative card-bg-img">
                            <img src="{{ URL::asset('assets/media/search.png') }}" alt="" class="card-serach-img">
                        </div>
                        <h2 class="text-main roboto mb-4">Discover Advisors</h2>
                        <p class="text-center work-card-text">Discover accomplished and experienced entrepreneurs and executives from all over the world.</p>
                   </div> 
                </div>
                <div class="col-md-4 pe-5 position-relative">
                    <div class="how-it-word-overlay"></div>
                    <div class="work-card-wrap text-center py-5 px-3">
                        <div class="work-card-img position-relative mb-4">
                            <img src="{{ URL::asset('assets/media/card-bg.webp') }}" alt="" class="position-relative card-bg-img">
                            <img src="{{ URL::asset('assets/media/calendar.png') }}" alt="" class="card-serach-img">
                        </div>
                        <h2 class="text-main roboto mb-4">Book Video Session</h2>
                        <p class="text-center work-card-text">Pick a date and the amount of time you would like to have with the advisor and book a video session.</p>
                    </div> 
                </div>
                <div class="col-md-4 pe-5 position-relative">
                 <div class="how-it-word-overlay"></div>
                     <div class="work-card-wrap text-center py-5 px-3">
                         <div class="work-card-img position-relative mb-4">
                             <img src="{{ URL::asset('assets/media/card-bg.webp') }}" alt="" class="position-relative card-bg-img">
                             <img src="{{ URL::asset('assets/media/bulb.png') }}" alt="" class="card-serach-img">
                         </div>
                         <h2 class="text-main roboto mb-4">Receive Advice</h2>
                         <p class="text-center work-card-text">On the call, you will be able to ask questions, receive feedback, input and authentic advice from the advisor.</p>
                     </div> 
                 </div>
            </div>
        </div>
    </section>
    <!-- How it works Section End -->
    <!-- Slider Section Start -->
    <section class="slider-section">
        <div class="swiper middle-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-bg-img d-flex justify-content-center align-items-center">
                        <h2 class="slider-heading text-main roboto text-center">Unlocking Access to <br> Knowledge and Experience <br> Across the World</h2>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-bg-img bg-two d-flex justify-content-center align-items-center">
                        <h2 class="slider-heading text-main roboto text-center">Unlocking Access to <br> Knowledge and Experience <br> Across the World</h2>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next slider-next-btn"></div>
            <div class="swiper-button-prev slider-prev-btn"></div>
        </div>
    </section>
     <!-- Slider Section End -->
     <!-- Advisors Marketing Section Start -->
    <section class="advisors-section bg-gray py-5">
        <div class="container">
            <div class="section-title">
                <h3 class="text-white roboto mb-4">Advisors who specialize in Marketing</h3>
            </div>
            @if(!empty($coaches_three))
            <div class="swiper mySwiper swiper-padding pb-4">
                <div class="swiper-wrapper">
                    @foreach($coaches_three as $coach)
                    <div class="swiper-slide">
                        <div class="card-wrapper">
                            @php $ide = Crypt::encrypt($coach->id); @endphp
                            <a href="{{ route('coach-detail', $ide) }}" class="d-block card-img-wrap bg-main">
                               @if(!empty($coach->profile_photo))
                               <img src="{{ URL::asset('/'.$coach->profile_photo) }}">
                               @else
                               <img src="{{ URL::asset('assets/media/favicon.png') }}">
                               @endif
                                <!--<img src="{{ URL::asset('assets/media/s1.jpg') }}" alt="">-->
                                <div class="image-overlay"></div>
                            </a>
                            <a href="{{ route('coach-detail', $ide) }}" class="image-content d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-white mb-0">{{ $coach->name }}</p>
                                    <p class="text-white mb-1">${{ $coach->price_20 }} / Session</p>
                                </div>
                                <img src="{{ URL::asset('assets/media/correct.png') }}" alt="" class="check-img">
                            </a>
                            <div class="featured-card-content">
                                <p class="text-white roboto mb-2 card-subtitle">{{ $coach->biography }}
                                </p>
                                <!--<p class="text-white roboto mb-0 card-subtitle">CMO @Netflix, 2x IPO's in USA -->
                                <!--</p>-->
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            @endif
            <div class="text-center mt-5">
                <a href="{{ route('discover')}}" class="button-primary roboto discover-btn">Discover All Advisors</a>
            </div>
        </div>
    </section>
    
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
