@extends('layouts.app')
<!-- <link rel="stylesheet" href="{{ URL::asset('admin/css/profile_view_bootstrap.min.css') }}" /> -->
@section('title')
View Jobs
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
<div class="row pad">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              
                <img src="{{ asset('../storage/image/'.$profiledetail[0]->pic)}}" style="height: 100px;" class="me-2" alt="image">
             
              <h1>{{($profiledetail[0]->name)}}</h1>
              <h6>{{($profiledetail[0]->phone)}}</h6>
              <h6>{{($profiledetail[0]->email)}}</h6>             
          </div>
      </div>
  </div>
  <div class="profile-info col-md-9">  
      <div class="panel">
          <div class="bio-graph-heading">
              <h1>Personal Information</h1>
          </div>
          <div class="panel-body bio-graph-info">
              <h1>Desired Post: {{ $departname[0]->post_name }}</h1>
              <div class="row">
                  <div class="col-md-6">
                      <p><span class="view-job-title">Full Name:</span>{{($profiledetail[0]->name)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Father Name:</span>{{($profiledetail[0]->f_name)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">CNIC #:</span>{{($profiledetail[0]->cnic)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Religion:</span>{{($profiledetail[0]->religious)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Nationality:</span>{{($profiledetail[0]->nationality)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Gender:</span>{{($profiledetail[0]->gender)}}</p>
                  </div>
              </div>
          </div>
      </div>
      
  </div>

  <div class="profile-info col-md-12">  
      <div class="panel">
          <div class="panel-body bio-graph-info">
              <div class="row">
                  <div class="col-md-6">
                      <p><span class="view-job-title">Date of Birth:</span>{{($profiledetail[0]->dob)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Place of Birth:</span>{{($profiledetail[0]->place_of_birth)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Email:</span>{{($profiledetail[0]->email)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Division of Domicile:</span>{{($profiledetail[0]->div_domicel)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Province of Domicile:</span>{{($profiledetail[0]->pro_domicle)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">District of Domicile:</span>{{($profiledetail[0]->dis_domicel)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Postal City:</span>{{($profiledetail[0]->postal_city)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Postal Address:</span>{{($profiledetail[0]->postal_addr)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Permanent Address:</span>{{($profiledetail[0]->per_address)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Phone (Mobile):</span>{{($profiledetail[0]->phone)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Phone (Residence):</span>{{($profiledetail[0]->phone_res)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Phone (Office):</span>{{($profiledetail[0]->phone_office)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Emergency Contact Name:</span>{{($profiledetail[0]->emer_name)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Emergency Mobile Number:</span>{{($profiledetail[0]->emer_no)}}</p>
                  </div>

                  <div class="col-md-6">
                    <p><span class="view-job-title">Vaccinated</span>{{($profiledetail[0]->vaccinated)}}</p>
                </div>
                <div class="col-md-6">
                    <p><span class="view-job-title">Certificate Number:</span>{{($profiledetail[0]->certificate_no)}}</p>
                </div>

                  <div class="col-md-6">
                      <p><span class="view-job-title">Relationship Emergency Contact:</span>{{($profiledetail[0]->emer_rel)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Are You Disable?</span>{{($profiledetail[0]->disable)}}</p>
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Upload CNIC (Front): </span></p><img src="{{ asset('../storage/image/'.$profiledetail[0]->idcard_front)}}" style="height: 50px;" class="me-2" alt="image"> 
                  </div>
                  <div class="col-md-6">
                      <p><span class="view-job-title">Upload CNIC (Back): </span></p><img src="{{ asset('../storage/image/'.$profiledetail[0]->idcard_back)}}" style="height: 50px;" class="me-2" alt="image">
                  </div>
              </div>
          </div>
      </div>    
  </div>

  <div class="profile-info col-md-12">  
      <div class="panel">
          <div class="bio-graph-heading">
              <h1>Academic Information</h1>
          </div>
          <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body view-job-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="view-table-title"> Degree </th>
                            <th class="view-table-title"> Institute </th>
                            <th class="view-table-title"> Passing Year </th>
                            <th class="view-table-title"> Total Marks </th>
                            <th class="view-table-title"> Obtained Marks </th>
                            <th class="view-table-title"> CGPA/Percentage </th>
                            <th class="view-table-title"> Image </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ( $academdetail as  $academic)
                          <tr>
                              
                                  
                             
                            <td> {{$academic->degree}} </td>
                            <td>{{$academic->institute}} </td>
                            <td> {{$academic->pass_year}} </td>
                            <td> {{$academic->total_pass}} </td>
                            <td> {{$academic->obt_mark}}  </td>
                            <td> {{$academic->cgp}} </td>
                            <td>
                             <img src="{{ asset('../storage/image/'.$academic->pic_matric)}}" style="height: 20px;" class="me-2" alt="image"> 
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
      
  </div>
  @if(empty($experdetail) )
  <div class="profile-info col-md-12">  
      <div class="panel">
          <div class="bio-graph-heading">
              <h1>Expereince</h1>
          </div>
          <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body view-job-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="view-table-title"> Designation </th>
                            <th class="view-table-title"> Organization Name </th>
                            <th class="view-table-title"> Starting Date </th>
                            <th class="view-table-title"> Ending Date </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($experdetail as $experience)
                                
                            @endforeach
                          <tr>
                            <td> {{$experience->designaation}} </td>
                            <td>{{$experience->orga_name}} </td>
                            <td> {{$experience->start_date}}</td>
                            <td> {{$experience->end_date}}</td>
                            
                          </tr>
                        </tbody>
                      </table>
                      
                    </div>
                    <div class="row pt-4">
                        <div class="col-md-6">
                            <p><span class="view-job-title">Are you Retired?</span>{{$experience->retired}}</p>
                        </div>
                        <div class="col-md-6">
                            <p><span class="view-job-title">Department Name:</span>{{$experience->dept_name}}</p>
                        </div>
                        <div class="col-md-6">
                            <p><span class="view-job-title">Upload Discharge Certificate:</span></p>
                            <img src="{{ asset('../storage/image/'.$experience->pic_discharge)}}" style="height: 20px;" class="me-2" alt="image"> 
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            
      </div>
      
  </div>
  @endif


</div>


@endsection

@section('script')
@endsection
