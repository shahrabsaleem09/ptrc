@extends('admin/layouts.app')
@section('title')
centers
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Centers Details</h4>
        
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
                  <a class="btn btn-success" href="{{ route('centers.create') }}"> Create New Center</a>
              </div>
          </div>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th width=15%>Name </th>
              <th width=20%>Address </th>
              <th width=10%>Date </th>
              <th width=10%>Start Time </th>
              <th width=10%>End Time</th>
              <th width="35%">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($centers as $center)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        <td width=15%>{{ $center->name }}</td>  
        <td width=20% >{{ $center->address }}</td>  
        <td width=10%>{{ $center->date_time }}</td>  
        <td width=10%>{{ $center->start_time }}</td> 
        <td width=10%>{{ $center->end_time }}</td> 


      
    
        <td  width=35%>
            <form action="{{ route('centers.destroy',$center->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('centers.show',$center->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('centers.edit',$center->id) }}">Edit</a>

                @csrf
                @method('DELETE')
  
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
            
          </tbody>
        </table>
        <div class="justify-content-center pagination">
          {{ $centers->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
