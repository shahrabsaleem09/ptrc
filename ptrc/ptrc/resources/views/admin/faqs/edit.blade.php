
@extends('admin/layouts.app')
@section('title')
Edit FAQs
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add FAQs</h4>
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
        <form method="POST" action="{{ route('faqs.update',$faq->id) }}"  enctype="multipart/form-data">
            
             {{-- {{ csrf_field('PUT') }}
             @csrf --}}
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Question</label>
                <textarea name="question" class="form-control" rows="5" cols="30"  >{{ $faq->question }}</textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Answer</label>
                <textarea name="answer" class="form-control" rows="5" cols="30"  >{{ $faq->answer }}</textarea>
              </div>
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
