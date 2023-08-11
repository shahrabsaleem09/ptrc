@extends('admin/layouts.app')
@section('title')
View FAQs
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> FAQs Details</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('faqs.index') }}">Go Back</a>
                </div>
            </div>
        </div>
       
          <div class="form-group">
            
            <strong> FAQs Question:</strong><textarea class="form-control" readonly rows="5" cols="30">{{ $faq->question }}</textarea>
          </div>
            <div class="form-group">
            <strong> FAQs Answer:</strong> <textarea class="form-control" readonly rows="5" cols="30">{{ $faq->answer }}</textarea>
          </div>
            
            
         
         
      </div>
    </div>
</div>


@endsection

@section('script')
@endsection
