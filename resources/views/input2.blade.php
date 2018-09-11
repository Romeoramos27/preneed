@extends('layouts.app')
@section('content')
<html>
<!-- <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head> -->
<body>

<div class="container">
  <div class="card"> 
    <div class="card-body">
        <div class="text-center">
            <h2><strong>Statement of Business Operation Form</strong></h2>                
        </div>
        <br>
        <form method="" action="" aria-label="#" return false>
            @csrf

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Name of insurance/Reinsurance Broker:') }}</label>

                <div class="col-md-6">
                    <input id="bank_name" type="text" class="form-control{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" name="email" value="{{ old('bank_name') }}" required autofocus>

                    @if ($errors->has('Address:'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('Address:') }}</label>

                <div class="col-md-6">
                    <input id="account_number" type="text" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('Telephone No:') }}</label>

                <div class="col-md-6">
                    <input id="account_number" type="text" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('Certificate of Authority No.:') }}</label>

                <div class="col-md-6">
                    <input id="account_number" type="text" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('Date Issued:') }}</label>

                <div class="col-md-6">
                    <input id="account_number" type="text" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('Valid Until:') }}</label>

                <div class="col-md-6">
                    <input id="account_number" type="text" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('Surety Bond:') }}</label>

                <div class="col-md-6">
                    <input id="account_number" type="text" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div> 


           
             <div class="form-group row">
                <label for="account_balance" class=" col-md-4 col-form-label text-md-right">{{ __('EO Bond:') }}</label>

               
                <div class="col-md-6">
                    <input id="account_balance" type="text" class="form-control{{ $errors->has('account_balance') ? ' is-invalid' : '' }}" name="account_balance" required>

                    @if ($errors->has('account_balance'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_balance') }}</strong>
                        </span>
                    @endif
                
            </div>
            </div>
           
          <!-- </div> -->

            
        </form>
      </div>
 </div>


  <br>
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:25%">1 out of 4</div>
  </div>
  <br>
  <a href="{{ url('/input2') }}" class="btn btn-danger"> Previews</a>
  <a href="{{ url('/input3') }}" class="btn btn-danger"> Next</a>
  <a href="{{ url('/input0') }}" class="btn btn-danger"> Submit</a>
 
</div>

</body>
</html>

@endsection
