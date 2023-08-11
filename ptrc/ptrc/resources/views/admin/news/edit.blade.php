
@extends('admin/layouts.app')
@section('title')
Edit News
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add New News</h4>
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
        <form method="POST" action="{{ route('news.update',$news->id) }}"  enctype="multipart/form-data">
            
             {{-- {{ csrf_field('PUT') }}
             @csrf --}}
            @csrf
            @method('PUT')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">News Name</label>
                <input type="text" class="form-control" id="exampleInputCity1"
                value="{{$news->name}}"  placeholder="News Name" name="name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Description</label>
                <textarea name="detail" class="form-control" rows="5" cols="30"  >{{ $news->detail }}</textarea>
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
