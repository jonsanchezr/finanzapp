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
<form action="/invoices/{{ $invoice->serial }}" method="POST" id="demo-form">
  @csrf
  <input type="hidden" name="serial" value="{{ $invoice->serial }}" />
 
  <label for="fullname">Nombre * :</label>
  <input type="text" name="from_name" value="{{ $invoice->from_name }}" class="form-control" required />

  <label for="fullname">Pais * :</label>
  <input type="text" name="from_country" value="{{ $invoice->from_country }}" class="form-control" required />

  <label for="fullname">Estado * :</label>
  <input type="text" name="from_state" value="{{ $invoice->from_state }}" class="form-control" required />

  <label for="fullname">Ciudad * :</label>
  <input type="text" name="from_city" value="{{ $invoice->from_city }}" class="form-control" required />

  <label for="fullname">Direccion * :</label>
  <input type="text" name="from_address" value="{{ $invoice->from_address }}" class="form-control" required />

    <label for="fullname">Telefono * :</label>
  <input type="text" name="from_phone" value="{{ $invoice->from_phone }}" class="form-control" required />

  <label for="fullname">Correo * :</label>
  <input type="text" name="from_mail" value="{{ $invoice->from_mail }}" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection