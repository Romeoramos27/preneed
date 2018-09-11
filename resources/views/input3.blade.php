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
            <h3>RECEIVABLE FROM INSURED (A)</h3>              
        </div>
        <br>
        <form method="" action="" aria-label="#" return false>
            @csrf
<table class="table">
    <thead>
      <tr>
        <th>Line of Business</th>
        <th>Balance at the Beginning of the Year (1)</th>
        <th>Poduce for the Year (2)</th>
        <th>Poduce for the Year (3)</th>
        <th>Balance at the End of the Year (1+2=3) </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="col-sm-4">Life Insurance</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Fire Insurance</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Marine Cargo</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Marine Hull </td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Aviation</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Fidelity and Surety</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Motor Insurance</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Health Insurance</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>HMO</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Accident</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Engineering</td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
        <td><input></td>
      </tr>
      <tr>
        <td>Miscellaneous</td>
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
  <br>
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:50%">2 out of 4</div>
  </div>
  <br>
 <a href="{{ url('/input2') }}" class="btn btn-danger"> Previews</a>
  <a href="{{ url('/input4') }}" class="btn btn-danger"> Next</a>
  <a href="{{ url('/input0') }}" class="btn btn-danger"> Submit</a>
 

</div>

</body>
</html>

@endsection
