@extends('admin/layouts.app')
@section('title')
Home

@endsection

@section('content')
@php 
    $adminpath='';
    @endphp 
    @php 
    if(auth()->check() && auth()->user()->is_admin == 1)
        {
            $adminpath='../';
        } 
   
    @endphp

      
        <div class="page-header">
          <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
              <i class="mdi mdi-home"></i>
            </span> Dashboard
          </h3>
          <nav aria-label="breadcrumb">
            {{-- <ul class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">
                <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
              </li>
            </ul> --}}
          </nav>
        </div>
      
    
     
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    {{-- <footer class="footer">
      <div class="container-fluid d-flex justify-content-between">
        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © 2022  reserved by unitedSoft </span>
       
      </div>
    </footer> --}}
    <!-- partial -->
  </div>

@endsection

@section('script')
@endsection
