@extends('admin/layouts.app')
@section('title')
View Jobs
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Job Details</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('jobs.index') }}">Go Back</a>
                </div>
            </div>
        </div>
          <div class="form-group">
            
            <strong> Serial Number :</strong>
            {{ $job->sr_no }}
            
          </div>
          <div class="form-group">
            <strong> Job ID  :</strong>
            {{ $job->job_id }}       
         </div>
         <div class="form-group">
            <strong> Job Name  :</strong>
            {{ $job->post_name }}
                 
         </div>
          <div class="form-group">
            <strong> Department  :</strong>
            {{ $depart[0]->deprt_name }}
            
          </div>
          <div class="form-group">
            <strong> Fee  :</strong>
            {{ $job->job_fee }}
            
          </div>
         
         
          <div class="form-group">
            <strong> Ads Date:</strong>
            {{ $job->ad_date }}
          </div>
          <div class="form-group">
            <strong> Closing Date:</strong>
            {{ $job->close_date }}
           
          </div>
      </div>
    </div>
</div>


@endsection

@section('script')
@endsection
