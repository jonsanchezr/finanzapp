@extends('layouts.formLayout')

@section('content')

@if($errors)
            <div class="alert alert-warning" role="alert">
              @foreach ($errors->all() as $error)
                  <div>{{ $error }}</div>
              @endforeach
            </div>
@endif </br>
<!-- start form for validation -->
<form action="/payroll/{{ $payroll->serial }}" method="POST" id="demo-form">
  @csrf
  <input type="hidden" name="serial" value="{{ $payroll->serial }}" />

  <label for="fullname">Nombre * :</label>
  <input type="text" name="name" value="{{ $payroll->name }}" class="form-control" required />

   <label for="fullname">Monto * :</label>
  <input type="number" name="amount" value="{{ $payroll->amount }}" class="form-control" required />

   <label for="fullname">Apellido * :</label>
  <input type="text" name="lastname" value="{{ $payroll->lastname }}" class="form-control" />

   <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection