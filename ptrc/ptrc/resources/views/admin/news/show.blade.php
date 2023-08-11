@extends('admin/layouts.app')
@section('title')
View News
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> News Details</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('news.index') }}">Go Back</a>
                </div>
            </div>
        </div>
       
          <div class="form-group">
            
            <strong> News Name:</strong>{{ $news->name }}
          </div>
            <div class="form-group">
            <strong> Detail:</strong>{{ $news->detail }}
          </div>
            
            
         
         
      </div>
    </div>
</div>


@endsection

@section('script')
@endsection
