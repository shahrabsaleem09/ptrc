@extends('layouts.app')
@section('title')
FAQ
@endsection
@section('content')
<div class="col-lg-12 grid-margin stretch-card pad">
<div class="col-sm-12 accordion_one " style="width:50%; margin:0px auto;">
    <div class="panel-group" id="accordionFourLeft">
        <h2 class="section-heading">Frequently Asked Question</h2>
        @php $k=0; @endphp
        @foreach ($faqs as $faq)
        
        <div class="panel panel-default faqpanel">
            <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeft{{$k}}" aria-expanded="false" class="collapsed"> {{ $faq->question }} </a> </h4>
            </div>
            <div id="collapseFiveLeft{{$k}}" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                <div class="panel-body">
                    <div class="img-accordion"> </div>
                    <div class="text-accordion">
                        <p>{{   $faq->answer }} </p>
                    </div>
                </div> <!-- end of panel-body -->
            </div>
        </div>
        @php 
        $k++; @endphp  
        @endforeach
       
         <!-- /.panel-default -->
        {{-- <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftTwo" aria-expanded="false"> Why Font Awesome used and its benefits </a> </h4>
            </div>
            <div id="collapseFiveLeftTwo" class="panel-collapse collapse" aria-expanded="false" role="tablist" style="height: 0px;">
                <div class="panel-body">
                    <div class="img-accordion"> <img src="https://img.icons8.com/color/81/000000/person-female.png" alt=""> </div>
                    <div class="text-accordion">
                        <p> Why Font Awesome usedWhy Font Awesome usedWhy Font Awesome usedWhy Font Awesome usedWhy Font Awesome usedWhy Font Awesome usedWhy Font Awesome usedWhy Font Awesome usedWhy Font Awesome used </p>
                    </div>
                </div> <!-- end of panel-body -->
            </div>
        </div> <!-- /.panel-default -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion_oneLeft" href="#collapseFiveLeftThree" aria-expanded="false"> Why Font Awesome used for its own </a> </h4>
            </div>
            <div id="collapseFiveLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                <div class="panel-body">
                    <div class="img-accordion"> <img src="https://img.icons8.com/color/81/000000/person-female.png" alt=""> </div>
                    <div class="text-accordion">
                        <p> Why Font Awesome used for its own Why Font Awesome used for its own Why Font Awesome used for its own Why Font Awesome used for its own Why Font Awesome used for its own Why Font Awesome used for its own Why Font Awesome used for its own </p>
                    </div>
                </div> <!-- end of panel-body -->
            </div>
        </div> <!-- /.panel-default --> --}}
    </div>
    <!--end of /.panel-group-->
</div>
</div>


@endsection

@section('script')
@endsection