@extends('layouts.formLayout')

@section('content')

<!-- start form for validation -->
<form action="/sask/{{ $sask->id }}" method="POST" id="demo-form">
  @csrf
  <label for="fullname">Titulo * :</label>
  <input type="text" name="title" value="{{ $sask->name }}" class="form-control" required />

  <label for="fullname">Descripcion * :</label>
  <input type="text" name="description" value="{{ $sask->description }}" class="form-control" />

  <label for="fullname">Fecha de Inicio * :</label>
  <input type="date" name="start_date" value="{{ $sask->start_date }}" class="form-control" required />

  <label for="fullname">Fecha Final * :</label>
  <input type="date" name="end_date" value="{{ $sask->end_date }}" class="form-control" required />

  <label for="fullname">Estado * :</label>
  <input type="text" name="status" value="{{ $sask->status }}" class="form-control" />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection