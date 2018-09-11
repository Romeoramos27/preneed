@extends('Pre-need.App')
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

<div class="container-fluid">
    <div class="card">
            <div class="text-center">
            <h2><strong>SALES REPORT</strong></h2>
      <label for="usr">Name of the Pre-need Company:</label>
    <br>
      <div class="btn">
      <input type="text" class="form-control" id="usr" name="username">
    </div>
    <br>
              <div class="btn-group">
    <button type="button" class="btn btn-primary">Life/Memorial</button>
    <button type="button" class="btn btn-primary">Educational</button>
    <button type="button" class="btn btn-primary">Pension</button>
    </div>  
     <br>
    <br>
    </div>
     <h5>A. Schedule of Plans/Contract Sold </h5>

                      
        

        <br>
        <form method="" action="" aria-label="#" return false>
            @csrf
<div style="overflow-x:auto;">
<table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name of Plan Holder</th>
        <th>Plan/Contract No.</th>
        <th>Contract Price Per Plan</th>
        <th>Date of Issue</th>
        <th>Date of Inial Payment</th>
        <th>Initial Payment Made</th>
        <th>Category (fully) Paid/Installment)</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      </tbody>
  </table>
      </div>
      <hr>

           <h5>B. Schedule of Plans/Contract Sold </h5>

                      
    
        <br>
        <form method="" action="" aria-label="#" return false>
            @csrf
<div style="overflow-x:auto;">
<table class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>Name of Plan Holder</th>
        <th>Plan/Contract No.</th>
        <th>Contract Price Per Plan</th>
        <th>Date of Issue</th>
        <th>Date of Inial Payment</th>
        <th>Initial Payment Made</th>
        <th>Category (fully) Paid/Installment)</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
            <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
            <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
       <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>

        <td class="col-sm-4"><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      
      
      
    
    </tbody>
  </table>
        </form>
        </div>
         </div>
   
 <a href="{{ url('/input2') }}" class="btn btn-danger"> Previews</a>
  <a href="{{ url('/input4') }}" class="btn btn-danger"> Next</a>
  <a href="{{ url('/input0') }}" class="btn btn-danger"> Submit</a>
 </div>


</body>
</html>

@endsection
