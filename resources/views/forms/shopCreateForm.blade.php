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
<form action="/shops" method="POST" id="demo-form">
  @csrf
  <label>Nombre * :</label>
  <input type="text" name="name" class="form-control" required />

  <label>Descripcion * :</label>
  <input type="text" name="description" class="form-control" required />

  <label>Direccion * :</label>
  <input type="text" name="address" class="form-control" required />

  <label>Codigo * :</label>
  <input type="text" name="code" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
<!-- end form for validations -->

@endsection