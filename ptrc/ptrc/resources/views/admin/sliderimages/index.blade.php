@extends('admin/layouts.app')
@section('title')
Slider Images
@endsection

@section('content')

<div class="col-lg-12 grid-margin stretch-card">

    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Slider Images</h4>
        
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
                  <a class="btn btn-success" href="{{ route('sliderimages.create') }}"> Create Images</a>
              </div>
          </div>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th> Images </th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($Slider_image as $Slider_images)
    <tr>
        
        {{-- <td>{{ ++$i }}</td> --}}
        {{-- <td><img src="../storage/images/{{$Slider_images['image_name']}}"  style="width: 50px; height: 50px;"/></td>  
        
      <td>{{ asset('../storage/image/'.$Slider_images->image_name)}}</td> --}}
      <td> <img class="imgslider" src="{{ asset('../storage/slider/'.$Slider_images->image_name)}}"  class="me-2" alt="image"></td>
    
        <td>
            <form action="{{ route('sliderimages.destroy',$Slider_images->id) }}" method="POST">

                {{-- <a class="btn btn-info" href="{{ route('sliderimages.show',$Slider_images->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('sliderimages.edit',$Slider_images->id) }}">Edit</a> --}}

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
          {{ $Slider_image->links() }}
              {{-- {!! $employees->links() !!} --}}
          </div>
      </div>
    </div>
  </div>

@endsection

@section('script')
@endsection
