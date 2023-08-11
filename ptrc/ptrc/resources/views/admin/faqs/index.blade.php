@extends('admin/layouts.app')
@section('title')
FAQs
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">FAQs Details</h4>
        
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
                  <a class="btn btn-success" href="{{ route('faqs.create') }}"> Create FAQs</a>
              </div>
          </div>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Question </th>
              <th>Answer</th>
              <th width="280px">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($faqs as $faq)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        <td><textarea class="form-control" readonly rows="5" cols="30">{{ $faq->question }}</textarea></td>  
        <td><textarea class="form-control" readonly rows="5" cols="30">{{ $faq->answer }}</textarea></td>  

      
    
        <td>
            <form action="{{ route('faqs.destroy',$faq->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('faqs.show',$faq->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('faqs.edit',$faq->id) }}">Edit</a>

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
          {{ $faqs->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
