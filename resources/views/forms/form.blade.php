@extends('layouts.formLayout')

@section('content')

<!-- start form for validation -->
<form id="demo-form" data-parsley-validate>
  <label for="fullname">Full Name * :</label>
  <input type="text" id="fullname" class="form-control" name="fullname" required />

  <label for="email">Email * :</label>
  <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

  <br/>
  <span class="btn btn-primary">Validate form</span>
</form>
<!-- end form for validations -->

@endsection