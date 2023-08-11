@extends('layouts.app')
@section('title')
Punjab Testing and Recruitment Council | Pakistan Best Testing Service
@endsection
@section('content')

<main>
    

    <!-- slider Area Start-->
    {{-- <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find the most exciting startup jobs</h1>
                            </div>
                        </div>
                    </div>
                    <!-- Search Box -->
                    <div class="row">
                        <div class="col-xl-8">
                            <!-- form -->
    
    
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="Job Tittle or keyword">
                                </div>
                                <div class="select-form">
                                    <div class="select-itms">
                                        <select name="user" class="form-select" >
                                            <option></option>
                                            @foreach ($city as $cities)
                                             <option value="{{ $cities->id }}">{{ $cities->city }}</option>
                                             @endforeach    
                                         </select>
                                       
                                    </div>
                                </div>
                                <div class="search-form">
                                    <a href="#">Find job</a>
                                </div>	
                            </form>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid bg-light">
        <div class="row  mt-md-4  m-md-4">
          <div class="col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <span class="glyphicon glyphicon-list-alt"></span
                ><b class="text-white">Latest News</b>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12 wd">
                    <ul class="news-demo-down-auto">
                        @foreach ($news as $new)
                            
                        @endforeach
                      <li class="news-item">
                       {{ $new->name}}<br>
                       {{ $new->detail}}
                    </li>
                    
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
          <div class="col-md-6">
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="1"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="2"
                ></li>
              </ol>
              <div class="carousel-inner">
                @php 
                $result = json_decode($images, true);
                $k=0;
            @endphp
            {{-- {{dd($result)}} --}}
              @foreach ($images as $image )
              <div class="carousel-item @php if($k==0){
                  if($result[0]['image_name'] !=''){

                    @endphp
                    active
                    @php
                  }
                }
                  
              @endphp">
                <img class="d-block w-100" src="{{ asset('../storage/slider/'.$image->image_name)}}" style="height: 316px; width:645px;"  alt="{{$k}}  slide" />
              </div>
              {{-- <img src="{{ asset('../storage/image/'.$Slider_images->image_name)}}" style="height: 100px; width:100px;" class="me-2" alt="image"> --}}
             @php
                
                $k++;
             @endphp
              @endforeach
                <!-- <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/img/slider/office.jpg" alt="First slide" />
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/slider/bank.jpg" alt="Second slide" />
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/slider/paf.jpg" alt="Third slide" />
                </div> -->
              </div>
              <a
                class="carousel-control-prev"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Previous</span>
              </a>
              <a
                class="carousel-control-next"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="panel panel-default">
              <div class="panel-heading">
                <span class="glyphicon glyphicon-list-alt"></span
                ><b class="text-white">Latest jobs</b>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-1  panel-wd">
                    <ul class="news-demo-down-auto">
                        @foreach ($job as $jobs)
                        <li class="news-item">
                            {{$jobs->post_name}}
                            {{$jobs->description }}
                        @endforeach
                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
        </div>
      </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    
    <!-- Online CV Area End-->
    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                       
                        <h2 class="section-heading">Recent Projects</h2>
                      
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <!-- single-job-content -->
                    @foreach($job as $jobs)
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <!--<div class="company-img">-->
                            <!--   <img src="assets/img/icon/job-list1.png" alt="">-->
                            <!--</div>-->
                            <div class="job-tittle">
                                <a href="{{ route('apply')}}">
                                <h4>{{ $jobs->post_name}}</h4></a>
                                <ul>
                                    <li>{{  $jobs->job_id }}</li>
                                    <li>{{ $jobs->ad_date }}</li>
                                    <li>{{ $jobs->close_date }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <form action="" method="POST">
                            <a href="{{ route('apply')}}">Apply Now</a>
                            <span></span>
                            @csrf
                            </form>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-job-content -->
                    {{-- <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.html"><img src="assets/img/icon/job-list2.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                    <li>$3500 - $4000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.html">Full Time</a>
                            <span>7 hours ago</span>
                        </div>
                    </div>
                     <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.html"><img src="assets/img/icon/job-list3.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                    <li>$3500 - $4000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.html">Full Time</a>
                            <span>7 hours ago</span>
                        </div>
                    </div>
                     <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.html"><img src="assets/img/icon/job-list4.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                    <li>$3500 - $4000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.html">Full Time</a>
                            <span>7 hours ago</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    {{-- <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2> How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                           <h5>1. Search a job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                           <h5>2. Apply for job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                           <h5>3. Get your job</h5>
                           <p>Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod tempor incididunt ut laborea.</p>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div> --}}
    <!-- How  Apply Process End-->
    <!-- Testimonial Start -->
    {{-- <div class="testimonial-area testimonial-padding">
        <div class="container">
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <!-- founder -->
                                <div class="testimonial-founder  ">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
     <!-- Support Company Start-->
     {{-- <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>What we are doing</span>
                            <h2>24k Talented people are getting Jobs</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                            <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                            <a href="about.html" class="btn post-btn">Post a job</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="assets/img/service/support-img.jpg" alt="">
                        <div class="support-img-cap text-center">
                            <p>Since</p>
                            <span>1994</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Support Company End-->
    <!-- Blog Area Start -->
    {{-- <div class="home-blog-area blog-h-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Our latest blog</span>
                        <h2>Our recent news</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/blog/home-blog1.jpg" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/blog/home-blog2.jpg" alt="">
                                <!-- Blog date -->
                                <div class="blog-date text-center">
                                    <span>24</span>
                                    <p>Now</p>
                                </div>
                            </div>
                            <div class="blog-cap">
                                <p>|   Properties</p>
                                <h3><a href="single-blog.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                <a href="#" class="more-btn">Read more »</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div>
            <p class="test">adfgg</p>
        </div>
    </div> --}}
    <!-- Blog Area End -->

</main>

@endsection

@section('script')
<script src="assets/js/jquery.bootstrap.newsbox.min.js"></script>

    <script type="text/javascript">
      $(function () {
        $(".news-demo-down-auto").bootstrapNews({
          newsPerPage: 5,
          autoplay: true,
          pauseOnHover: true,
          navigation: false,
          direction: "down",
          newsTickerInterval: 1500,
          onToDo: function () {},
        });
      });
    </script>
@endsection
