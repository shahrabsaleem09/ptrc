@extends('layouts.app')
@section('title')
Results
@endsection
@section('content')

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="contact-img single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Results</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<div class="result-form form">
    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Enter Project:<span class="formfieldimp">*</span></label>
          <input type="text" class="form-control" id="" placeholder="Enter Project">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Enter Post:<span class="formfieldimp">*</span></label>
          <input type="text" class="form-control" id="" placeholder="Enter Post">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Enter CNIC:<span class="formfieldimp">*</span></label>
          <input type="text" class="form-control" id="" placeholder="Enter CNIC">
        </div>
    </div>
    <a href="about.html" class="btn post-btn">Search Result</a>
</div>

@endsection

@section('script')
@endsection