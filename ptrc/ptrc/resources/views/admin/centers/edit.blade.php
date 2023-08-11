@extends('admin/layouts.app')
@section('title')
    Edit Center
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Department</h4>
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
                <form method="POST" action="{{ route('centers.update', $center->id) }}" enctype="multipart/form-data">

                    @csrf
                    @method('PUT')
                   
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputCity1">Name</label>
                                <input type="text" class="form-control" id="exampleInputCity1" value="{{ $center->name }}"
                                    placeholder="Bank Name" name="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputCity1">Address</label>
                                <textarea name="address" class="form-control" rows="5"
                                    cols="30">{{ $center->address }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputCity1">Date And Time</label>
                                <input type="date" class="form-control" id="exampleInputCity1"
                                    placeholder="Account No" name="date_time"
                                    value="{{ \Carbon\Carbon::parse($center->date_time)->format('m-d-Y') }}">
                            </div>
                           
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputCity1">Start Time</label>
                            <input type="time" class="form-control" id="exampleInputCity1" placeholder="Start Time" name="start_time"  value="{{ \Carbon\Carbon::parse($center->start_time)->format('H:i:s') }}">
                          </div>
                        </div>

                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputCity1">End Time</label>
                          <input type="time" class="form-control" id="exampleInputCity1" placeholder="End Time " name="end_time"  value="{{ \Carbon\Carbon::parse($center->end_time)->format('H:i:s') }}">
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
