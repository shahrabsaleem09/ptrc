@extends('admin/layouts.app')
@section('title')
View Bank
@endsection

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title"> Bank Details</h4>
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('bank.index') }}">Go Back</a>
                </div>
            </div>
        </div>
       
          <div class="form-group">
            
            <strong> Bank Name:</strong>{{ $bank->b_name }}
          </div>
            <div class="form-group">
            <strong> Branch Code:</strong>{{ $bank->b_code }}
          </div>
            <div class="form-group">
            <strong> Account Number:</strong>{{ $bank->account_no }}
          </div>
            <div class="form-group">
            <strong> Owmer Name:</strong>{{ $bank->owner }}
          </div>
            
            
         
         
      </div>
    </div>
</div>


@endsection

@section('script')
@endsection
