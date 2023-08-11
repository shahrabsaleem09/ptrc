@extends('admin/layouts.app')
@section('title')
All Centers
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Center  Allocation</h4>
        <form method="POST" action="{{ route('centerAlloacte') }}" method="post" enctype="multipart/form-data">
          {{-- @csrf --}}
          {{ csrf_field('POST') }}
        <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-right">
                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                 
              </div>
          </div>
      </div>
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
          @endif
          <div class="col-lg-12 margin-tb">

              {{-- <div class="pull-left">
                  <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
              </div> --}}
             
          </div>
          </div>
          <div class="row">
            <div class="form-group col-md-2">
              <label for="inputEmail4"><strong >Center :<span class="formfieldimp">*</span></strong></label>
            </div>
            <div class="form-group col-md-8">
            <select class="form-select form-control opt" aria-label="Default select example" name="center" >
              @foreach($center as $centers)
              <strong>
              <option  value="{{ $centers->id }}">{{ $centers->name."  Date ". "(".$centers->date_time.")"."  Start Time ". "(".$centers->start_time.")"."  End Time ". "(".$centers->end_time.")" }}</option>
            </strong>
              @endforeach
            </select>
          </div>
          </div>
        <table class="table table-striped" style="width: 100%" id="centerAllocate">
          <thead>
            <tr>
              <th><input id="check_all"   class="formcontrol" type="checkbox"/> </th>
              <th>Name</th>
              <th>Job Id</th>
              <th>Department Name</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($job as $jobs)
    <tr>
        
        <td><input class="centerallowcb" type="checkbox" name="centerallow[]" value="{{ $jobs->id }}"/>
        </td>
        <td>{{ $jobs->name }}</td>
        <td>{{ $jobs->job_id }}</td>
        <td>{{ $jobs->deprt_name }}</td>
    </tr>
    @endforeach
            
          </tbody>
        </table>
        <div class="justify-content-center pagination">
          {{ $job->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('script')
<script>
  $('#verChall').change(function() { 
      // $('#usercode').on('blur', function() { 
      var verifychal = this.value;
      //alert('ok'+verifychal);
     
      $.ajax({
       // alert('helllo');
      url:"<?php echo e(url('hbc45thu8ukik97yg6f545tc6y7u8')); ?>",
      type: "POST",
      data: {
      id: verifychal,
      action: 'get_user',
      _token: "<?php echo e(csrf_token()); ?>",
      },
//      dataType : 'json',
      success: function(result){
      alert('----'+result);
      console.log(result);
     
      
      },
     
      });
      }); 

      $("#check_all").click(function(){
        
        alert('hhhhhhhhhhhh');
        var id=$(".centerallowcb").val();0
alert('id'+id);
        $("input.centerallowcb").prop('checked', $(this).prop('checked'));

    });
 
  </script>
@endsection
