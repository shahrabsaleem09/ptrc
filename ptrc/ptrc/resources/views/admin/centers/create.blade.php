@extends('admin/layouts.app')
@section('title')
Creat Center
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add Center</h4>
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
        <form method="POST" action="{{ route('centers.store') }}" method="post" enctype="multipart/form-data">
            {{-- @csrf --}}
            {{ csrf_field('POST') }}
          {{-- <div class="form-group">
            <label for="exampleInputName1">Department</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Department" name="deprt_name">
          </div> --}}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Name</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Name" name="name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Address</label>
                <textarea name="address" class="form-control" rows="5" cols="30" placeholder="Description"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Date</label>
                <input type="date" class="form-control" id="exampleInputCity1" placeholder="Date" name="date_time">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Start Time</label>
                <input type="time" class="form-control" id="exampleInputCity1" placeholder="Start Time" name="start_time">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">End Time</label>
                <input type="time" class="form-control" id="exampleInputCity1" placeholder="End Time " name="end_time">
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
