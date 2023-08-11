@extends('layouts.app')
@section('title')
All Jobs
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card pad padapply">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Jobs Details</h4>
        
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
      {{-- {{dd($job)}} --}}
          <div class="col-lg-12 margin-tb">

              {{-- <div class="pull-left">
                  <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
              </div> --}}
             
          </div>
      </div>
        <table class="table table-striped" style="width: 100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Job Id</th>
              <th>Department Name</th>
              <th>Cnic</th>
              <th>Gender</th>
              <th>E-mail</th>
              <th>Upload Challan</th>
              
              
              
              <th width="280px">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($job as $jobs)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $jobs->name }}</td>
        <td>{{ $jobs->job_id }}</td>
        <td>{{ $jobs->deprt_name }}</td>
        <td>{{ $jobs->cnic}}</td> 
        <td>{{ $jobs->gender}}</td>
        <td>{{ $jobs->email }}</td>
        {{-- {{$jobs->uploadchallan}} --}}
        @if($jobs->uploadchallan =='')
        <td>
          <form action="{{ route('challanupload',$jobs->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field('POST') }}

           <input class="file" type="file" id="formFile" name="uploadchallan">
           <button type="submit" class="btn btn-danger btnsize">submit</button>
          </form>
          </td>
          @else <td>{{$jobs->uploadchallan}}</td>
          @endif
        <td>
          
            {{-- <form action="{{ route('depart.destroy',$jobs->id) }}" method="POST"> --}}
                @if ($jobs->resultpdf =='') 
                    <a class="btn btn-info btnsize" href="{{ route('showjobuser',$jobs->id) }}">Show</a>
                    @if ($jobs->uploadchallan =='')
                       <a class="btn btn-info btnsize" href="{{ route('generate-pdf',$jobs->id) }}">Download Challan</a>
                        {{-- <a class="btn btn-info btnsize" href="{{ route('showjobuser',$jobs->id) }}">Upload Challan</a> --}}
                     @elseif($jobs->roll_no !='' & $jobs->verify==1)
                        <a class="btn btn-info btnsize" href="{{ route('rollno-pdf',$jobs->id) }}">Download Rollnoslip</a>
                    @elseif($jobs->uploadchallan !='' & $jobs->verify==0)
                    <div class="btn btn-info btnsize" >Wait For Approval</div>
                    
                        {{-- <a class="btn btn-info btnsize" href="{{ route('generate-pdf',$jobs->id) }}">Download Challan</a> --}}
                    @endif
                    
                    
                    
                 @else
                 <a class="btn btn-info btnsize" href="{{ route('result-pdf',$jobs->job_id) }}">Download Result</a> 
                @endif
               
               
                {{-- <a class="btn btn-primary btnsize" href="{{ route('',$jobs->id) }}">Edit</a> --}}

                {{-- @csrf
                @method('DELETE') --}}
  
                {{-- <button type="submit" class="btn btn-danger btnsize">Delete</button>
            </form> --}}
        </td>
        
          
           
    </tr>
    @endforeach
            
          </tbody>
        </table>
        <div class="justify-content-center pagination">
          {{ $job->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
