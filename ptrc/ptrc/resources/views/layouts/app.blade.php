<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>@yield('title') </title>
        <!--<meta name="description" content="">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="Punjab Testing and Recruitment Council is to build and promote standards in educational and professional testing and recruitment.">
         <meta name="keywords" content="ptrc, punjab testing and recruitment council, pakistan testing service, best testing service">
        
        
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
		<!-- CSS here -->
            <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/price_rangs.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
            <link rel="stylesheet" href="{{url('assets/css/mystyle.css')}}">
            <meta name="google-site-verification" content="peVgZdYhxUghsyS8JhnzJxTtxGFJp6iaaaht3Y2wubg" />
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8Z1ETQQZZE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8Z1ETQQZZE');
</script>
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text ">
                    <img src="assets/img/logo/logo.png" class="logo" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-xl-5 col-md-12">
                            <!-- Logo -->
                            <!--<div class="logo logoadj">-->
                            <!--    <a href="{{ URL::to('/');}}"><img src="{{URL::asset('img/logo/challan.png')}}" class="img-fluid" alt=""></a>-->
                                 
                            <!--</div> -->
                            <div class="logo logoadj">
                                <a href="{{ URL::to('/');}}"><img src="{{URL::asset('img/logo/logo.png')}}" class="logo" alt=""></a>
                                 
                            </div> 
                           <p class="logo-text">Punjab Testing And Recruitment Council<br>
                           <span class="logo-slogan sloganbor">
                           Creating Difference In Testing Society</span>
                            </p>
                                
                            
                        </div>
                        <div class="col-lg-7 col-xl-7 col-md-7">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="{{ URL::to('/');}}">Home</a></li>
                                            {{-- <li><a href="#">Find a Jobs </a></li> --}}
                                          
                                            <li><a href="#">Schedule</a>
                                                <ul class="submenu">
                                                    <!--<li><a href="{{route('jobs') }}">Jobs</a></li>-->
                                                    <li><a href="{{route('appliedjobs') }}">Result</a></li>
                                                    <li><a href="{{route('appliedjobs') }}">Roll no. Slip</a></li>
                                                    <li><a href="{{route('appliedjobs') }}">Print Challan</a></li>
                                                    <li><a href="{{route('appliedjobs') }}">Application Status</a></li>
                                                    <!--<li><a href="{{route('exams') }}">Exams and Interviews</a></li>-->
                                                </ul>
                                            </li>
                                            <li><a href="{{route('contactus') }}">Contact Us</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('aboutus') }}">About Us</a></li>
                                                    <li><a href="{{route('faqs') }}">FAQs</a></li>
                                                </ul>
                                            </li>
                                          
                                           
                                           
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                @if(Auth::check())
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href=" {{ route('logout') }}"  class="btn head-btn2"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                </div>
                                @else
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="{{ route('register') }}"  class=" btn head-btn1"> {{ __('Register') }}</a> 
                                  <a href="{{ route('login')}}" class="btn head-btn2">Login</a>
                              </div>
                                @endif
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    @yield('content')
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                <div class="footer-logo mb-10  ">
                                    <a href="{{ route('home') }}"><span>Punjab Testing and Recruitment Council</span></a>
                                    </div>
                                    <div class="footer-pera footer-pera2">
                                        <p>To build and promote standards in educational and professional testing and recruitment.</p>
                                    </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address:Office no. 319, 3rd floor, United Mall, Main Abdali Road, Cantt Multan.</p>
                                    </li>
                                    <li><a href="tel:061-6800860">Phone :061-6800860</a></li>
                                    <li><a href="mailto:info@ptrc.com.pk">Email : info@ptrc.com.pk</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="{{ route('aboutus') }}">About Us</a></li>
                                    <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                                    <!--<li><a href="#">Results</a></li>-->
                                    <!--<li><a href="#">Rollno slip</a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Vision And Mission</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Internationally recognized testing and recruitment  organization facilitating in producing educated and market competitive human resource</p>
                             </div>
                             <!-- Form -->
                             {{-- <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               {{-- <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                        <a href="{{ route('home') }}"><img src="assets/img/logo/logo_footer.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                        <span>5000+</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div> --}}
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-6 col-lg-6 ">
                             <div class="footer-copy-right">
                                <p ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://ptrc.com.pk" target="_blank">PTRC</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                             
                         </div>
                         <div class="col-xl-6 col-lg-6">
                          <div class="footer-copy-right">
                                 
                           <p class="devtext"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                         Develop by <a href="https://unitedsoft.net" target="_blank">unitedSoft</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>  
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/slick.min.js"></script>
        <script src="/assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="/assets/js/jquery.scrollUp.min.js"></script>
        <script src="/assets/js/jquery.nice-select.min.js"></script>
		<script src="/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="/assets/js/contact.js"></script>
        <script src="/assets/js/jquery.form.js"></script>
        <script src="/assets/js/jquery.validate.min.js"></script>
        <script src="/assets/js/mail-script.js"></script>
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>
        @yield('script')
        
    </body>
</html>