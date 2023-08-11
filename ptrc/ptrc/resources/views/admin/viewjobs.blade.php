@extends('admin/layouts.app')
@section('title')
    All Jobs
@endsection

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">


   

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Jobs Details</h4>
            <form method="POST" action="{{ route('specificjob')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field('POST') }}
            <div class="row">
                <div class="col-4">
                    <div class="select-form">
                        <div class="select-itms">
                            <select name="user" class="form-select">
                                <option>Select Jobs</option>
                                @foreach ($postjobs as $postjob)
                     <option value="{{ $postjob->id }}">{{ $postjob->post_name }}</option>
                     @endforeach
                            </select>

                        </div>
                    </div>
                   
                </div>
                <div class="col-4">
                  <button type="submit" class="btn btn-gradient-primary me-2">Search</button>
                </div>
                
            </div>
          </form>
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
            <table class="table table-striped" style="width: 100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Job Id</th>
                        <th>Department Name</th>
                        <th>Cnic</th>
                        <th>Gender</th>
                        <th>E-mail</th>
                        <th> Upload Challan</th>


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
                            <td>{{ $jobs->cnic }}</td>
                            <td>{{ $jobs->gender }}</td>
                            <td>{{ $jobs->email }}</td>
                            <td>
                                @if (!empty($jobs->uploadchallan))
                                    <input type='checkbox' id="verChall" value="{{ $jobs->id }}" class='taskchecker'>

                                    <a href="{{ asset('../storage/challan/' . $jobs->uploadchallan) }}"
                                        class="btn btn-success btnsize" target="_blank">
                                        Challan
                                        {{-- <img src="{{ asset('../storage/challan/'.$jobs->uploadchallan)}}" style="height: 50px;" class="me-2" id="challan"  alt="image"> --}}
                                    </a>
                                @endif

                                {{-- <button type="button" class="btn btn-success btnsize" onclick="show_my_receipt(this)">View Challan</button> --}}
                            </td>


                            <td>
                                <form action="{{ route('depart.destroy', $jobs->id) }}" method="POST">

                                    <a class="btn btn-info btnsize" href="{{ route('showjob', $jobs->id) }}">Show</a>

                                    {{-- <a class="btn btn-primary btnsize" href="{{ route('',$jobs->id) }}">Edit</a> --}}

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btnsize">Delete</button>
                                </form>
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
    <script>
        $('#verChall').change(function() {
            // $('#usercode').on('blur', function() { 
            var verifychal = this.value;
            //alert('ok'+verifychal);

            $.ajax({
                // alert('helllo');
                url: "<?php echo e(url('hbc45thu8ukik97yg6f545tc6y7u8')); ?>",
                type: "POST",
                data: {
                    id: verifychal,
                    action: 'get_user',
                    _token: "<?php echo e(csrf_token()); ?>",
                },
                //      dataType : 'json',
                success: function(result) {
                    alert('----' + result);
                    console.log(result);


                },

            });
        });
    </script>
@endsection
