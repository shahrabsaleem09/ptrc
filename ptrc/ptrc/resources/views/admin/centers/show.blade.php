@extends('admin/layouts.app')
@section('title')
View Center
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Center Details</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('centers.index') }}">Go Back</a>
                </div>
            </div>
        </div>
       
          <div class="form-group">
            
            <strong> Name:</strong>{{ $center->name }}
          </div>
            <div class="form-group">
            <strong> Address:</strong>{{ $center->address }}
          </div>
            <div class="form-group">
            <strong> Date And Time:</strong>{{ $center->date_time }}
           
          </div>
          <div class="form-group">
            <strong>Start Time:</strong>{{ $center->start_time }}
           
          </div>
          <div class="form-group">
            <strong>End Time:</strong>{{ $center->end_time }}
           
          </div>
    </div>
</div>


@endsection

@section('script')
@endsection
