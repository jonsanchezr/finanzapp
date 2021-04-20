@extends('layouts.formLayout')

@section('content')

<!-- start form for validation -->
<form action="/typeproduct/{{ $typeproduct->id }}" method="POST" id="demo-form">
  @csrf
  <label for="fullname">Nombre * :</label>
  <input type="text" name="name" value="{{ $typeproduct->name }}" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection