@extends('layouts.app')
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap_tab.min.css') }}" />
@section('title')
apply
@endsection
@section('content')

<div class="container">
  <form id="signup-form" method="post" enctype="multipart/form-data">
  <div class="">
   {{-- {{dd($profile[0]->name)}} --}}
 
    <!-- Nav pills -->
    <ul class="nav nav-pills tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Personal Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1">Qualification</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu2">Experience</a>
      </li>
    </ul>
  </div>
    <div id="home" class="container tab-pane fade active show">
      <div class="form">
        
       
          @csrf
          {{-- {{ csrf_field('POST') }} --}}

     <div class="form-row">
      <div class="form-group col-md-2">
        <label for="inputEmail4">Select Desired Post:<span class="formfieldimp">*</span></label>
      </div>
      <div class="form-group col-md-4">
      <select class="form-select form-control opt" aria-label="Default select example" name="job" >
        @foreach($job as $jobs)
        <option value="{{ $jobs->id }}">{{ $jobs->post_name }}</option>
        
        @endforeach
      </select>
    </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4">Full Name:<span class="formfieldimp">*</span></label>
          @if ($errors->has('name'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('name') }}.</strong>
                </span>
          @endif
          <input type="text" class="form-control" id="" value="@php
            
            if($profile->isNotEmpty()) 
            
              echo $profile[0]->name;
          @endphp"  name="name" >

        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Father Name:<span class="formfieldimp">*</span></label>
          @if ($errors->has('f_name'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('f_name') }}.</strong>
                </span>
          @endif
          <input type="text" class="form-control" id=""   value="@php
          if($profile->isNotEmpty()) echo $profile[0]->f_name;
        @endphp"  name="f_name">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">CNIC:<span class="formfieldimp">*</span></label>
          @if ($errors->has('cnic'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('cnic') }}.</strong>
                </span>
          @endif
          <input type="text"  class="form-control" id="" value="@php
          if($profile->isNotEmpty()) echo $profile[0]->cnic;
        @endphp" name="cnic">
        </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputPassword4">Religion:<span class="formfieldimp">*</span></label>
            @if ($errors->has('religious'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('religious') }}.</strong>
                </span>
          @endif
            <input type="text" class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->religious;
          @endphp"  name="religious">
          </div>
         
          <div class="form-group col-md-4">
            <label for="inputPassword4">Nationality:<span class="formfieldimp">*</span></label>
            @if ($errors->has('nationality'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('nationality') }}.</strong>
                </span>
            @endif
            <input type="text"  class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->nationality;
          @endphp" name="nationality">
          </div>
           
          <div class="form-check col-md-4">
              <div class="control-label col-md-12">    
                  <label for="inputPassword4">Gender:<span class="formfieldimp">*</span></label>
                  @if ($errors->has('gender'))
                    <span class="alert-validation"role="alert">
                        <strong>{{ $errors->first('gender') }}.</strong>
                    </span>
                  @endif  
            <br>   
               <div class="radiomar" >               
                  <input type="radio" id="gm" name="gender" @if($profile->isNotEmpty())  @if($profile[0]->gender == 'Male') checked
                  @endif 
                  @endif
                  value="Male" checked="">
                  <label for="gm">Male</label> &nbsp;  &nbsp;  &nbsp; 
                  <input type="radio" id="gf" name="gender" @if($profile->isNotEmpty())  @if($profile[0]->gender == 'Female') checked
                  @endif   @endif value="Female">
                  <label for="gf">Female</label> &nbsp;  &nbsp;  &nbsp; 
                  <input type="radio" id="go" name="gender"  @if($profile->isNotEmpty()) @if($profile[0]->gender == 'Other') checked
                  @endif @endif  value="Other">
                  <label for="go">Other</label>
              </div> 
                  </div> 
          </div> 
      </div>
     <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Date of Birth:<span class="formfieldimp">*</span></label>
            @if ($errors->has('dob'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('dob') }}.</strong>
                </span>
            @endif
            <input type="date" class="form-control" id="" name="dob">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Place Of Birth:<span class="formfieldimp">*</span></label>
            @if ($errors->has('place_of_birth'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('place_of_birth') }}.</strong>
                </span>
            @endif
            <input type="text" class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->place_of_birth;
          @endphp" name="place_of_birth">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Email:<span class="formfieldimp">*</span></label>
            @if ($errors->has('email'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('email') }}.</strong>
                </span>
            @endif
            <input type="email"  class="form-control" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->email;
          @endphp" id=""  name="email">
          </div>
      </div> 
       <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">District:<span class="formfieldimp">*</span></label>
            @if ($errors->has('div_domicel'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('div_domicel') }}.</strong>
                </span>
            @endif
            <input type="text" class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->div_domicel;
          @endphp"  name="div_domicel">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Province:<span class="formfieldimp">*</span></label>
            @if ($errors->has('pro_domicle'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('pro_domicle') }}.</strong>
                </span>
            @endif
            <input type="text" class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->pro_domicle;
          @endphp" name="pro_domicle">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Domicile:<span class="formfieldimp">*</span></label>
            @if ($errors->has('dis_domicel'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('dis_domicel') }}.</strong>
                </span>
            @endif
            <input type="text"  class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->dis_domicel;
          @endphp" name="dis_domicel">
          </div>
      </div> 
       <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Postal City:<span class="formfieldimp">*</span></label>
            @if ($errors->has('postal_city'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('postal_city') }}.</strong>
                </span>
            @endif
            <input type="text" class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->postal_city;
          @endphp" name="postal_city">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Postal Address:<span class="formfieldimp">*</span></label>
            @if ($errors->has('postal_addr'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('postal_addr') }}.</strong>
                </span>
            @endif
            <textarea cols="5" class="form-control"  name="postal_addr">@php
              if($profile->isNotEmpty()) echo $profile[0]->postal_addr;
            @endphp</textarea>
            
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Permanent Address:<span class="formfieldimp">*</span></label>
            @if ($errors->has('per_address'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('per_address') }}.</strong>
                </span>
          @endif
            <textarea cols="5" class="form-control" name="per_address">@php
              if($profile->isNotEmpty()) echo $profile[0]->per_address;
            @endphp</textarea>
          </div>
      </div> 
       <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Phone (Mobile):<span class="formfieldimp">*</span></label>
            @if ($errors->has('phone'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('phone') }}.</strong>
                </span>
          @endif
            <input type="text" class="form-control" id=""  value="@php
            if($profile->isNotEmpty()) echo $profile[0]->phone;
          @endphp" name="phone">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Phone (Residence)</label>
            @if ($errors->has('phone_res'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('phone_res') }}.</strong>
                </span>
          @endif
            <input type="text" class="form-control" id=""  value="@php
            if($profile->isNotEmpty()) echo $profile[0]->phone_res;
          @endphp" name="phone_res">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Phone (Office)</label>
            @if ($errors->has('phone_office'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('phone_office') }}.</strong>
                </span>
          @endif
            <input type="text"  class="form-control" id=""  value="@php
            if($profile->isNotEmpty()) echo $profile[0]->phone_office;
          @endphp" name="phone_office">
          </div>
      </div>
       <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4">Emergency Contact Name</label>
          @if ($errors->has('emer_name'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('emer_name') }}.</strong>
                </span>
          @endif
          <input type="text" class="form-control" id=""  value="@php
          if($profile->isNotEmpty()) echo $profile[0]->emer_name;
        @endphp" name="emer_name">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Emergency Mobile Number</label>
          @if ($errors->has('emer_no'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('emer_no') }}.</strong>
                </span>
          @endif
          <input type="text" class="form-control" id=""  value="@php
          if($profile->isNotEmpty()) echo $profile[0]->emer_no;
        @endphp" name="emer_no">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Relationship Emergency Contact</label>
          @if ($errors->has('emer_rel'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('emer_rel') }}.</strong>
                </span>
          @endif
          <input type="text"  class="form-control" id=""  value="@php
          if($profile->isNotEmpty()) echo $profile[0]->emer_rel;
        @endphp" name="emer_rel">
        </div>
    </div>
    
 <div class="form-row">
  <div class="form-check col-md-4">
    <div class="control-label col-md-12">    
        <label for="inputPassword4">Are You Disable?<span class="formfieldimp">*</span></label>
        @if ($errors->has('disable'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('disable') }}.</strong>
                </span>
          @endif
            <br>   
        <div class="radiomar" >               
        <input type="radio" id="dyes" name="disable" value="yes"   @if($profile->isNotEmpty()) @if($profile[0]->disable == 'yes') checked
        @endif @endif >
        <label for="dyes">Yes</label> &nbsp;  &nbsp;  &nbsp; 
        <input type="radio" id="dno" name="disable" value="no"  @if($profile->isNotEmpty()) @if($profile[0]->disable == 'no') checked
        @endif @endif checked="">
        <label for="dno">No</label>
    </div> 
    </div>  
  </div>
  <div class="form-check col-md-4">
    <div class="control-label col-md-12">    
        <label for="inputPassword4">Are You Vaccinated?<span class="formfieldimp">*</span></label>
        @if ($errors->has('vaccinated'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('vaccinated') }}.</strong>
                </span>
          @endif
            <br>   
        <div class="radiomar" >               
        <input type="radio" id="chekYesVac" name="vaccinated" value="yes"  onclick="OpenHideDivVac()"  @if($profile->isNotEmpty()) @if($profile[0]->vaccinated == 'yes') checked
        @endif @endif >
        <label for="chekYesVac">Yes</label> &nbsp;  &nbsp;  &nbsp; 
        <input type="radio" id="chekNoVac" name="vaccinated"  onclick="OpenHideDivVac()" value="no"  @if($profile->isNotEmpty())  @if($profile[0]->vaccinated == 'no') checked
        @endif @endif  checked="">
        <label for="chekNoVac">No</label>
    </div> 

  </div>
  
  
</div>
 <div class="form-check col-md-4">
  
  <div id="divtextVac" style="display: none" >
    <div class="form-row">
     
      <div class="col-md-12">
          <div class="control-label col-md-12">    
              <label for="inputPassword4">Certificate No:</label>
          </div>
      </div>
      <div class="col-md-12">
        <div class="control-label col-md-12">    
            <input type="text"  class="form-control" id="" value="@php
            if($profile->isNotEmpty()) echo $profile[0]->certificate_no;
          @endphp"  name="certificate_no">
        </div>
      </div>
    
   

    </div>
    </div>
    <div class="form-row">
      
  </div>
</div> 
</div>


<div class="form-row">
   <div class="col-md-4">
            <label for="formFile" class="">Upload Photograph:<span class="formfieldimp">*</span></label>
            @if ($errors->has('pic'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('pic') }}.</strong>
                </span>
          @endif
            <input class="file" type="file" id="formFile" name="pic">
    </div>
     <div class="col-md-4">
        <label for="formFile" class="">Upload CNIC (Front):<span class="formfieldimp">*</span></label>
        @if ($errors->has('idcard_front'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('idcard_front') }}.</strong>
                </span>
          @endif
        <input class="file" type="file" id="formFile" name="idcard_front">
</div> 
 <div class="col-md-4">
    <label for="formFile" class="">Upload CNIC (Back):<span class="formfieldimp">*</span></label>
    @if ($errors->has('idcard_back'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('idcard_back') }}.</strong>
                </span>
          @endif
    <input class="file" type="file" id="formFile" name="idcard_back">
</div>
</div>

                        <div class="row">
                            <div class="col-12 nextbtn" >
                                <ul class="nav nav-pills tab float-right" role="tablist">
    
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-danger" data-toggle="pill" href="#menu1">Next</a>
                                    </li>
    
                                </ul>
                            </div>
                        </div> 
      

        
      </div>
    </div>
     <div id="menu1" class="container tab-pane fade">
      <table class="table table-sm table-bordered">
        <thead class="thead-inverse"><tr>
        <th width="12%">Degree</th>
        <th width="20%">Institute</th>
        <th width="10%">Pass Year</th>
        <th width="10%">Total Marks</th>
        <th width="10%">Obt Marks</th>
        <th width="10%">CGPA/Percentage</th>
        <th width="25%">Certificate<span class="formfieldimp">*</span>
         @if ($errors->has('pic_matric'))
                <span class="alert-validation"role="alert">
                    <strong>{{ $errors->first('pic_matric') }}.</strong>
                </span>
          @endif
        </th>
        </tr></thead>
        <tbody>
          
            <tr>
                

              
                <td width="12%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="degree[]"  value="@php
                if(!empty($academics[0]->degree))
                  if($academics->isNotEmpty()) echo $academics[0]->degree;
                @endphp" maxlength="50" ></td>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" value="@php
                if(!empty($academics[0]->institute))
                  if($academics->isNotEmpty()) echo $academics[0]->institute;
                @endphp" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" value="@php
                if(!empty($academics[0]->pass_year))
                  if($academics->isNotEmpty()) echo $academics[0]->pass_year;
                @endphp" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]"  value="@php
                if(!empty($academics[0]->total_pass))
                  if($academics->isNotEmpty()) echo $academics[0]->total_pass;
                @endphp"></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" value="@php
                if(!empty($academics[0]->obt_mark))
                  if($academics->isNotEmpty()) echo $academics[0]->obt_mark;
                @endphp" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50"  value="@php
                if(!empty($academics[0]->cgp))
                  if($academics->isNotEmpty()) echo $academics[0]->cgp;
                @endphp"></td>
                <td width="25%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                
            </tr>
            <tr>
               
                <td width="12%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="degree[]" value="@php
                if(!empty($academics[1]->degree))
                  if($academics->isNotEmpty()) echo $academics[1]->degree;
                @endphp" maxlength="50" ></td>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" value="@php
                if(!empty($academics[1]->institute))
                  if($academics->isNotEmpty()) echo $academics[1]->institute;
                @endphp" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" value="@php
                if(!empty($academics[1]->pass_year))
                  if($academics->isNotEmpty()) echo $academics[1]->pass_year;
                @endphp" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" value="@php
                if(!empty($academics[1]->total_pass))
                  if($academics->isNotEmpty()) echo $academics[1]->total_pass;
                @endphp" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" value="@php
                if(!empty($academics[1]->obt_mark))
                  if($academics->isNotEmpty()) echo $academics[1]->obt_mark;
                @endphp" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" value="@php
                if(!empty($academics[1]->cgp))
                  if($academics->isNotEmpty()) echo $academics[1]->cgp;
                @endphp" maxlength="50" ></td>
                <td width="25%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                
            </tr>
            <tr>
                
                <td width="12%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="degree[]" value="@php
                if(!empty($academics[2]->degree))
                  if($academics->isNotEmpty()) echo $academics[2]->degree;
                @endphp" maxlength="50" ></td>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50" ></td>
                <td width="25%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
               
            </tr> 
            <tr>
                
                <td width="12%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="degree[]"  value="@php
                  if(!empty($academics[2]->degree))
                    if($academics->isNotEmpty()) echo $academics[2]->degree;
                  @endphp" maxlength="50" ></td>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" value="@php
                  if(!empty($academics[2]->institute))
                    if($academics->isNotEmpty()) echo $academics[2]->institute;
                  @endphp"  maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" value="@php
                  if(!empty($academics[2]->pass_year))
                    if($academics->isNotEmpty()) echo $academics[2]->pass_year;
                  @endphp" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" value="@php
                  if(!empty($academics[2]->total_pass))
                    if($academics->isNotEmpty()) echo $academics[2]->total_pass;
                  @endphp" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($academics[2]->obt_mark))
                    if($academics->isNotEmpty()) echo $academics[2]->obt_mark;
                  @endphp" name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($academics[2]->cgp))
                    if($academics->isNotEmpty()) echo $academics[2]->cgp;
                  @endphp" name="cgp[]" maxlength="50" ></td>
                <td  width="25%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                
            </tr> 
            <tr>
                
                <td width="12%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="degree[]"  value="@php
                  if(!empty($academics[3]->degree))
                    if($academics->isNotEmpty()) echo $academics[3]->degree;
                  @endphp" maxlength="50" ></td>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($academics[3]->institute))
                    if($academics->isNotEmpty()) echo $academics[3]->institute;
                  @endphp"  name="institute[]" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" value="@php
                  if(!empty($academics[3]->pass_year))
                    if($academics->isNotEmpty()) echo $academics[3]->pass_year;
                  @endphp"  name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" value="@php
                  if(!empty($academics[3]->total_pass))
                    if($academics->isNotEmpty()) echo $academics[3]->total_pass;
                  @endphp"  name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($academics[3]->obt_mark))
                    if($academics->isNotEmpty()) echo $academics[3]->obt_mark;
                  @endphp"  name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($academics[3]->cgp))
                    if($academics->isNotEmpty()) echo $academics[3]->cgp;
                  @endphp"  name="cgp[]" maxlength="50" ></td>
                <td width="25%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
             
            </tr>
            <tr>
              
              <td width="12%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board"  value="@php
                if(!empty($academics[4]->degree))
                  if($academics->isNotEmpty()) echo $academics[4]->degree;
                @endphp" name="degree[]" maxlength="50" ></td>
              <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                if(!empty($academics[4]->institute))
                  if($academics->isNotEmpty()) echo $academics[4]->institute;
                @endphp" name="institute[]" maxlength="50" ></td>
              <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" value="@php
                if(!empty($academics[4]->pass_year))
                  if($academics->isNotEmpty()) echo $academics[4]->pass_year;
                @endphp" name="pass_year[]"></td>
              <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" value="@php
                if(!empty($academics[4]->total_pass))
                  if($academics->isNotEmpty()) echo $academics[4]->total_pass;
                @endphp" name="total_pass[]" ></td>
              <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                if(!empty($academics[4]->obt_mark))
                  if($academics->isNotEmpty()) echo $academics[4]->obt_mark;
                @endphp" name="obt_mark[]" maxlength="50" ></td>
              <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                if(!empty($academics[4]->cgp))
                  if($academics->isNotEmpty()) echo $academics[4]->cgp;
                @endphp" name="cgp[]" maxlength="50" ></td>
              <td  width="25%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
              
          </tr>
      
      
        </tbody>
      </table>
      <div class="row">
                            <div class="col-12 nextbtn" >
                                
                                 <ul class="nav nav-pills tab float-right backnextbtn " role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-danger" data-toggle="pill" href="#menu2">Next</a>
                                    </li>
    
                                </ul>
                                <ul class="nav nav-pills tab float-right  backbtn" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-danger" data-toggle="pill" href="#home">Back</a>
                                    </li>
    
                                </ul>
                            </div>
                        </div> 
      
  
       
    </div>
    <div id="menu2" class="container tab-pane fade">
      <div class="form-check col-md-12">
        <div class="control-label col-md-12">    
            <label for="">Do you have Experience?</label>   
            <input type="radio" id="chekYesExp" name="experience" value="yes" onclick="OpenHideDivExp()">
            <label for="chekYesExp"  >Yes</label> &nbsp;  &nbsp;  
            <input type="radio" id="chekNoExp" name="experience" value="no" checked onclick="OpenHideDivExp()">
            <label for="chekNoExp">No</label>
        </div>
      </div>
      <div id="divtextExp" style="display: none" >
      <table class="table table-sm table-bordered">
        <thead class="thead-inverse"><tr><th>Designation</th><th>Organization Name</th><th>Starting Date</th><th>Ending Date</th></tr></thead>
        <tbody>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="designaation[]" value="@php
                  if(!empty($experience[0]->designaation))
                    if($experience->isNotEmpty()) echo $experience[0]->designaation;
                  @endphp" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="orga_name[]" value="@php
                  if(!empty($experience[0]->orga_name))
                    if($experience->isNotEmpty()) echo $experience[0]->orga_name;
                  @endphp"
                   maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board"  value="@php
                  if(!empty($experience[1]->designaation))
                    if($experience->isNotEmpty()) echo $experience[1]->designaation;
                  @endphp" name="designaation[]" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($experience[1]->orga_name))
                    if($experience->isNotEmpty()) echo $experience[1]->orga_name;
                  @endphp" name="orga_name[]" maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board"  value="@php
                  if(!empty($experience[2]->designaation))
                    if($experience->isNotEmpty()) echo $experience[2]->designaation;
                  @endphp" name="designaation[]" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($experience[2]->orga_name))
                    if($experience->isNotEmpty()) echo $experience[2]->orga_name;
                  @endphp" name="orga_name[]" maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board"  value="@php
                  if(!empty($experience[3]->designaation))
                    if($experience->isNotEmpty()) echo $experience[3]->designaation;
                  @endphp" name="designaation[]" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" value="@php
                  if(!empty($experience[3]->orga_name))
                    if($experience->isNotEmpty()) echo $experience[3]->orga_name;
                  @endphp" name="orga_name[]" maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>


        </tbody>
      </table>
      </div>

      <div class="form-check col-md-12">
        <div class="control-label col-md-12">    
            <label for="chkYes">Are you Retired?</label>   
            <input type="radio" id="chkYes" name="retired"  @if($experience->isNotEmpty()) @if($experience[0]->retired == 'Yes') checked
            @endif  @endif value="Yes" onclick="ShowHideDiv()">
            <label for="chkYes">Yes</label> &nbsp;  &nbsp;  
            <input type="radio" id="chkNo"  @if($experience->isNotEmpty()) @if($experience[0]->retired == 'No') checked
            @endif @endif name="retired" value="No" checked onclick="ShowHideDiv()">
            <label for="chkNo" >No</label>
        </div>
      </div>
        <div id="dvtext" style="display: none">
          <div class="form-row">
            <div class="col-md-6">
            <div class="col-md-12">
                <div class="control-label col-md-12">    
                    <label for="inputPassword4">Department Name:</label>
                </div>
            </div>
            <div class="col-md-12">
              <div class="control-label col-md-12">    
                  <input type="text"  class="form-control" id="" value="@php
                  if($experience->isNotEmpty()) echo $experience[0]->dept_name;
                @endphp"  name="dept_name">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-md-12">
              <div class="control-label col-md-12">    
                <label for="inputPassword4">Upload Discharge Certificate:</label>
              </div>
            </div>
            <div class="col-md-12">
              <div class="control-label col-md-12">    
                <input class="file" type="file" id="formFile" name="pic_discharge">
              </div>
            </div>
          </div>

          </div>
          </div>
          <div class="form-row">
            
        </div>
        <div class="row">
                            <div class="col-12 nextbtn" >
                                <ul class="nav nav-pills tab float-right  backnextbtn" role="tablist">
                                    
                                    <li class="nav-item">
                                        <button type="submit" class="nav-link btn btn-danger">Submit</button>
                                    </li>
    
                                </ul>
                                 <ul class="nav nav-pills tab float-right backbtn " role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-danger" data-toggle="pill" href="#menu1">Back</a>
                                    </li>
                                   
    
                                </ul>
                            </div>
                        </div>
    </div> 
  </form>

</div>
  

@endsection

@section('script')

<script src="{{ URL::asset('js/jquery.slim_tab.min.js') }}"></script>
<script src="{{ URL::asset('js/popper_tab.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.bundle_tab.min.js') }}"></script>

<script> 
  function OpenHideDiv() {
    var chekYes = document.getElementById("chekYes");
    var divtext = document.getElementById("divtext");
    divtext.style.display = chekYes.checked ? "block" : "none";
}
</script>

<script> 
  function ShowHideDiv() {
    var chkYes = document.getElementById("chkYes");
    var dvtext = document.getElementById("dvtext");
    dvtext.style.display = chkYes.checked ? "block" : "none";
}
</script>

<script> 
  function OpenHideDivExp() {
    var chekYesExp = document.getElementById("chekYesExp");
    var divtextExp = document.getElementById("divtextExp");
    divtextExp.style.display = chekYesExp.checked ? "block" : "none";
}
</script>

<script> 
  function ShowHideDivExp() {
    var chkYesExp = document.getElementById("chkYesExp");
    var dvtextExp = document.getElementById("dvtextExp");
    dvtextExp.style.display = chkYesExp.checked ? "block" : "none";
}
</script>

<script> 
  function OpenHideDivVac() {
    var chekYesVac = document.getElementById("chekYesVac");
    var divtextVac = document.getElementById("divtextVac");
    divtextVac.style.display = chekYesVac.checked ? "block" : "none";
}
</script>

<script> 
  function ShowHideDivVac() {
    var chkYesVac = document.getElementById("chkYesVac");
    var dvtextVac = document.getElementById("dvtextVac");
    dvtextVac.style.display = chkYesVac.checked ? "block" : "none";
}
</script>

@endsection