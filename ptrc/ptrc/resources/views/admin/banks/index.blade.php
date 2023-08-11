@extends('admin/layouts.app')
@section('title')
Banks
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Banks Details</h4>
        
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
                  <a class="btn btn-success" href="{{ route('bank.create') }}"> Create New Bank</a>
              </div>
          </div>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Bank Name </th>
              <th>Branch code </th>
              <th>Account Number  </th>
              <th>owner </th>
              <th width="280px">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($bank as $banks)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        <td>{{ $banks->b_name }}</td>  
        <td>{{ $banks->b_code }}</td>  
        <td>{{ $banks->account_no }}</td>  
        <td>{{ $banks->owner }}</td>  

      
    
        <td>
            <form action="{{ route('bank.destroy',$banks->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('bank.show',$banks->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('bank.edit',$banks->id) }}">Edit</a>

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
          {{ $bank->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
