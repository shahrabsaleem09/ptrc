
@extends('admin/layouts.app')
@section('title')
Edit Department
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
        <form method="POST" action="{{ route('bank.update',$bank->id) }}"  enctype="multipart/form-data">
            
             {{-- {{ csrf_field('PUT') }}
             @csrf --}}
            @csrf
            @method('PUT')
          {{-- <div class="form-group">
            <label for="exampleInputName1">Department</label>
            <input type="text" class="form-control" value="{{$depart->deprt_name}}" id="exampleInputName1" placeholder="Department" name="deprt_name">
          </div> --}}
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Bank Name</label>
                <input type="text" class="form-control" id="exampleInputCity1"
                value="{{$bank->b_name}}"  placeholder="Bank Name" name="b_name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Branch Code</label>
                <input type="text" class="form-control" id="exampleInputCity1"  value="{{$bank->b_code}}"  placeholder="Branch Code" name="b_code">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Account No</label>
                <input type="text" class="form-control" id="exampleInputCity1"  value="{{$bank->account_no}}"  placeholder="Account No" name="account_no">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputCity1">Owner Name</label>
                <input type="text" class="form-control" id="exampleInputCity1"  value="{{$bank->owner}}"  placeholder="Owner Name" name="owner">
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
