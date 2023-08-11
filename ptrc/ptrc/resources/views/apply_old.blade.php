@extends('layouts.app')
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap_tab.min.css') }}" />
@section('title')
apply
@endsection
@section('content')
<div class="container">
  <form id="signup-form" method="post" enctype="multipart/form-data">
  <div class="">
   
    
    <!-- Nav pills -->
    <ul class="nav nav-pills tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#home">Personal Information</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#menu1">Academics</a>
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
          <label for="inputEmail4">First Name:<span class="formfieldimp">*</span></label>
          <input type="text" class="form-control" id=""   name="name" >

        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Last Name:<span class="formfieldimp">*</span></label>
          <input type="text" class="form-control" id=""  name="f_name">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">CNIC:<span class="formfieldimp">*</span></label>
          <input type="text"  class="form-control" id=""  name="cnic">
        </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputPassword4">Religious:<span class="formfieldimp">*</span></label>
            <input type="text" class="form-control" id=""  name="religious">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Nationality:<span class="formfieldimp">*</span></label>
            <input type="text"  class="form-control" id=""  name="nationality">
          </div>
          <div class="form-check col-md-4">
              <div class="control-label col-md-12">    
                  <label for="inputPassword4">Gender:<span class="formfieldimp">*</span></label>  <br>   
                  <div class="radiomar" >               
                  <input type="radio" id="gm" name="gender" value="Male" checked="">
                  <label for="gm">Male</label> &nbsp;  &nbsp;  &nbsp; 
                  <input type="radio" id="gf" name="gender" value="Female">
                  <label for="gf">Female</label>
              </div> 
                  </div>  
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Date of Birth:<span class="formfieldimp">*</span></label>
            <input type="date" class="form-control" id="" name="dob">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Place Of Birth:<span class="formfieldimp">*</span></label>
            <input type="text" class="form-control" id=""  name="place_of_birth">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Email:<span class="formfieldimp">*</span></label>
            <input type="email"  class="form-control" value="" id=""  name="email">
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Division of Domicile:<span class="formfieldimp">*</span></label>
            <input type="text" class="form-control" id=""  name="div_domicel">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Province of Domicile:<span class="formfieldimp">*</span></label>
            <input type="text" class="form-control" id=""  name="pro_domicle">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">District of Domicile:<span class="formfieldimp">*</span></label>
            <input type="text"  class="form-control" id=""  name="dis_domicel">
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Postal City:<span class="formfieldimp">*</span></label>
            <input type="text" class="form-control" id="" name="postal_city">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Postal Address:<span class="formfieldimp">*</span></label>
            <textarea cols="5" class="form-control" name="postal_addr"></textarea>
            
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Permanent Address:<span class="formfieldimp">*</span></label>
            <textarea cols="5" class="form-control" name="per_address"></textarea>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputEmail4">Phone (Mobile):<span class="formfieldimp">*</span></label>
            <input type="text" class="form-control" id="" name="phone">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Phone (Residence)</label>
            <input type="text" class="form-control" id="" name="phone_res">
          </div>
          <div class="form-group col-md-4">
            <label for="inputPassword4">Phone (Office)</label>
            <input type="text"  class="form-control" id=""name="phone_office">
          </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputEmail4">Emergency Contact Name</label>
          <input type="text" class="form-control" id="" name="emer_name">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Emergency Mobile Number</label>
          <input type="text" class="form-control" id="" name="emer_no">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Relationship Emergency Contact</label>
          <input type="text"  class="form-control" id="" name="emer_rel">
        </div>
    </div>
    
<div class="form-row">
  <div class="form-check col-md-4">
    <div class="control-label col-md-12">    
        <label for="inputPassword4">Are You Disable?<span class="formfieldimp">*</span></label>  <br>   
        <div class="radiomar" >               
        <input type="radio" id="dyes" name="disable" value="yes" >
        <label for="dyes">Yes</label> &nbsp;  &nbsp;  &nbsp; 
        <input type="radio" id="dno" name="disable" value="no" checked="">
        <label for="dno">No</label>
    </div> 
    </div>  
</div>
</div>

<div class="form-row">
    <div class="col-md-4">
            <label for="formFile" class="">Upload Photograph:<span class="formfieldimp">*</span></label>
            <input class="file" type="file" id="formFile" name="pic">
    </div>
    <div class="col-md-4">
        <label for="formFile" class="">Upload CNIC (Front):<span class="formfieldimp">*</span></label>
        <input class="file" type="file" id="formFile" name="idcard_front">
</div>
<div class="col-md-4">
    <label for="formFile" class="">Upload CNIC (Back):<span class="formfieldimp">*</span></label>
    <input class="file" type="file" id="formFile" name="idcard_back">
</div>
</div>
        
      

        
      </div>
    </div>
    <div id="menu1" class="container tab-pane fade">
      <table class="table table-sm table-bordered">
        <thead class="thead-inverse"><tr><th>Degree</th><th>Institute</th><th>Passing Year</th><th>Total Marks</th><th>Obtained Marks</th><th>CGPA/Total CGPA</th><th>Image</th></tr></thead>
        <tbody>
            <tr>
                <th style="width:25%"><div class="form-check">
                        <label class="form-check-label">
                            Matric
                        </label>
                    </div>
                </th>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50" ></td>
                <td width="10%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                <input type="hidden"  id="inputed2-board" name="degree[]" value="matric">
            </tr>
            <tr>
                <th style="width:25%"><div class="form-check">
                        <label class="form-check-label">
                          Intermediate
                        </label>
                    </div>
                </th>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50" ></td>
                <td width="10%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                <input type="hidden"  id="inputed2-board" name="degree[]" value="intermediate">
            </tr>
            <tr>
                <th style="width:25%"><div class="form-check">
                        <label class="form-check-label">
                          Bachelor Degree
                        </label>
                    </div>
                </th>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50" ></td>
                <td width="10%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                <input type="hidden"  id="inputed2-board" name="degree[]" value="bachelor degree">
            </tr> 
            <tr>
                <th style="width:25%"><div class="form-check">
                        <label class="form-check-label">
                          Masters Degree
                        </label>
                    </div>
                </th>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50" ></td>
                <td  width="10%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                <input type="hidden"  id="inputed2-board" name="degree[]" value="master">
            </tr> 
            <tr>
                <th style="width:25%"><div class="form-check">
                        <label class="form-check-label">
                          Other Certificate
                        </label>
                    </div>
                </th>
                <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" maxlength="50" ></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" name="pass_year[]"></td>
                <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" maxlength="50" ></td>
                <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50" ></td>
                <td width="10%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
                <input type="hidden"  id="inputed2-board" name="degree[]" value="other">
            </tr>
            <tr>
              <th style="width:25%"><div class="form-check">
                      <label class="form-check-label">
                         Other Certificate
                      </label>
                  </div>
              </th>
              <td width="20%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="institute[]" maxlength="50" ></td>
              <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mobt" name="pass_year[]"></td>
              <td width="10%"><input type="number" class="form-control form-control-sm qual" id="inputed2-mtotal" name="total_pass[]" ></td>
              <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="obt_mark[]" maxlength="50" ></td>
              <td width="10%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="cgp[]" maxlength="50" ></td>
              <td  width="10%"> <input  type="file" id="formFile" name="pic_matric[]"></td>
              <input type="hidden"  id="inputed2-board" name="degree[]" value="other">
          </tr>
      
      
        </tbody>
      </table>
    </div>
    <div id="menu2" class="container tab-pane fade">
      <table class="table table-sm table-bordered">
        <thead class="thead-inverse"><tr><th>Designation</th><th>Organization Name</th><th>Starting Date</th><th>Ending Date</th></tr></thead>
        <tbody>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="designaation[]" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="orga_name[]" maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="designaation[]" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="orga_name[]" maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="designaation[]" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="orga_name[]" maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>
            <tr>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="designaation[]" maxlength="50" ></td>
                <td width="25%"><input type="text" class="form-control form-control-sm qual" id="inputed2-board" name="orga_name[]" maxlength="50" ></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mobt" name="start_date[]"></td>
                <td width="25%"><input type="date" class="form-control form-control-sm qual" id="inputed2-mtotal" name="end_date[]" ></td>
            </tr>


        </tbody>
      </table>

      <div class="form-check col-md-12">
        <div class="control-label col-md-12">    
            <label for="chkYes">Are you Retired?</label>   
            <input type="radio" id="chkYes" name="retired" value="Yes" onclick="ShowHideDiv()">
            <label for="chkYes">Yes</label> &nbsp;  &nbsp;  
            <input type="radio" id="chkNo" name="retired" value="No" checked onclick="ShowHideDiv()">
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
            <input type="text"  class="form-control" id=""  name="dept_name">
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

</div>
  

@endsection

@section('script')

<script src="{{ URL::asset('js/jquery.slim_tab.min.js') }}"></script>
<script src="{{ URL::asset('js/popper_tab.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.bundle_tab.min.js') }}"></script>
<script> 
  function ShowHideDiv() {
    var chkYes = document.getElementById("chkYes");
    var dvtext = document.getElementById("dvtext");
    dvtext.style.display = chkYes.checked ? "block" : "none";
}
</script>

@endsection