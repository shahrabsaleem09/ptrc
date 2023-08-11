@extends('admin/layouts.app')
@section('title')
News
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">News Details</h4>
        
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
                  <a class="btn btn-success" href="{{ route('news.create') }}"> Create News</a>
              </div>
          </div>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Name </th>
              <th>Description</th>
              <th width="280px">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($news as $new)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $new->name }}</td>  
        <td>{{ $new->detail }}</td>  

      
    
        <td>
            <form action="{{ route('news.destroy',$new->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('news.show',$new->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}">Edit</a>

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
          {{ $news->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
