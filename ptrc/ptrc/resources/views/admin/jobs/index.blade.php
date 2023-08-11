@extends('admin/layouts.app')
@section('title')
Jobs
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Jobs Details</h4>
        
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
              <div class="pull-right">
                  <a class="btn btn-success" href="{{ route('jobs.create') }}"> Create New Post</a>
              </div>
          </div>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              {{-- <th>Serial No </th> --}}
              <th> Job ID </th>
              <th> Post Name </th>
              <th> Department </th>
              <th> Fee </th>
              <th> Ads Date</th>
              <th> Closing Date </th>
              <th> Upload Result </th>
              <th width="30%">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($job as $user)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        {{-- <td>{{ $user->sr_no }}</td> --}}
        <td>{{ $user->job_id  }}</td>
        <td>{{ $user->post_name  }}</td>
        <td>{{ $user->deprt_name }}</td>
        <td>{{ $user->job_fee }}</td>
        <td>{{ $user->ad_date }}</td>
        <td>{{ $user->close_date }}</td>
        <td>
          <form action="{{ "../result/$user->id"}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field('POST') }}

           <input class="file" type="file" id="formFile" name="image"><br>
           <button type="submit" class="btn btn-danger btnsize pad">submit</button>
          </form>
          </td>
        {{-- <td>
          <form action="{{ route('result',$user->id) }}" enctype="multipart/form-data" method="post">
          {{-- //  <a class="btn btn-info btnsize" href="{{ route('result',$user->id) }}">Upload  Results</a> 
            <input type="file" class="file" name="file" >
          </form>

        </td> --}}
      
    
        <td>
            <form action="{{ route('jobs.destroy',$user->id) }}" method="POST">

                <a class="btn btn-info btnsize" href="{{ route('jobs.show',$user->id) }}">Show</a>

                <a class="btn btn-primary btnsize" href="{{ route('jobs.edit',$user->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger btnsize">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
            
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          {{ $job->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
