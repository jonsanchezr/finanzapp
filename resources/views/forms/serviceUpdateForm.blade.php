@extends('layouts.formLayout')

@section('content')

<!-- start form for validation -->
<form action="/services/{{ $service->id }}" method="POST" id="demo-form">
  @csrf
  <label for="fullname">Nombre * :</label>
  <input type="text" name="name" value="{{ $service->name }}" class="form-control" required />

  <label for="fullname">Descripcion * :</label>
  <input type="text" name="description" value="{{ $service->description }}" class="form-control" required />

  <label for="fullname">Monto * :</label>
  <input type="numeric" name="amount" value="{{ $service->amount }}" class="form-control" required />

  <label for="fullname">Renovacion * :</label>
  <input type="text" name="renewal" value="{{ $service->renewal }}" class="form-control" required />

  <label for="fullname">Creado * :</label>
  <input type="date" name="created" value="{{ $service->created }}" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection