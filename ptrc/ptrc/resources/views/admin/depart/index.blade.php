@extends('admin/layouts.app')
@section('title')
Departments
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Department Details</h4>
        
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
                  <a class="btn btn-success" href="{{ route('depart.create') }}"> Create New Post</a>
              </div>
          </div>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Department Name </th>
              <th width="280px">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($depart as $user)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $user->deprt_name }}</td>  
      
    
        <td>
            <form action="{{ route('depart.destroy',$user->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('depart.show',$user->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('depart.edit',$user->id) }}">Edit</a>

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
          {{ $depart->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
