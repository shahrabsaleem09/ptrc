
@extends('admin/layouts.app')
@section('title')
Edit Images
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Images</h4>
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
                <label for="exampleInputCity1">Slider Images</label>
                <input type="file" name="image_name"/>
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
