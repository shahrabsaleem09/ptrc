@extends('admin/layouts.app')
@section('title')
View Department
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Department Details</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('depart.index') }}">Go Back</a>
                </div>
            </div>
        </div>
       
          <div class="form-group">
            
            <strong> Department:</strong>
            {{ $depart->deprt_name }}
            
          </div>
         
      </div>
    </div>
</div>


@endsection

@section('script')
@endsection
