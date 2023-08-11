
@extends('admin/layouts.app')
@section('title')
Edit Jobs
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New Job</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="{{ route('jobs.update',$job->id) }}"  enctype="multipart/form-data">
            
             {{-- {{ csrf_field('PUT') }}
             @csrf --}}
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputName1">Sr no</label>
                <input type="number" class="form-control" value="{{$job->sr_no}}" id="exampleInputName1" placeholder="Serial no" name="sr_no">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail3">Job ID </label>
                <input type="text" class="form-control" value="{{$job->job_id}}" id="exampleInputEmail3" placeholder="Job ID" name="job_id" >        
              </div>
            </div>
          </div>
          
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
                <label for="exampleInputEmail3">Job Fee</label>
                <input type="text" class="form-control" value="{{$job->job_fee}}" id="exampleInputEmail3" placeholder="Job Fee" name="job_fee" >        
             </div>
           </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPassword4">Department</label>
                <div class="select-form">
                  <div class="select-itms">
                      <select name="department" class="form-select selecttag" >
                        
                          @foreach ($departall as $dep)
                           <option value="{{ $dep->id }}" <?php if($dep->id==$job->department){ echo 'selected';} ?>>{{ $dep->deprt_name }}</option>
                           @endforeach    
                       </select>
                     
                  </div>
                </div>
                {{-- <input type="text" class="form-control" value="{{$job->department}}" id="exampleInputPassword4" placeholder="department" name="department"> --}}
              </div>
            </div>
         </div>
         
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Ads Date</label>
                <input type="date" class="form-control" value="{{$job->ad_date}}" id="exampleInputCity1" placeholder="Ads Date" name="ad_date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Closing Date</label>
                <input type="date" class="form-control" value="{{$job->close_date}}" id="exampleInputCity1" placeholder="Closing Date" name="close_date">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Job Title</label>
              <input type="text" class="form-control" value="{{$job->post_name}}" id="exampleInputEmail3" placeholder="Job Name" name="post_name" >        
           </div>
           <div class="form-group">
            <label for="exampleInputEmail3">Job Description</label>
            <textarea cols="5" class="form-control" name="description"> {{$job->description}}</textarea>
            {{-- <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Job Name" name="post_name" >         --}}
         </div>
          </div>
         
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
</div>


@endsection
@section('script')
@endsection
