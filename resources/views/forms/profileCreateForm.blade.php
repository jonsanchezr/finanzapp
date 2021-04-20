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
<form action="/profile" method="POST" id="demo-form">
  @csrf
  <label>Nombre * :</label>
  <input type="text" name="name" class="form-control" required />

  <label>Apellido * :</label>
  <input type="text" name="lastname" class="form-control" required />

  <label>Username * :</label>
  <input type="text" name="username" class="form-control" required />

  <label>Cargo * :</label>
  <input type="text" name="position" class="form-control" required />

  <label>Correo * :</label>
  <input type="text" name="mail" class="form-control" required />

  <label>Telefono * :</label>
  <input type="text" name="phone" class="form-control" required />

  <label>Pais * :</label>
  <input type="text" name="country" class="form-control" required />

  <label>Estado * :</label>
  <input type="text" name="state" class="form-control" required />

  <label>Ciudad * :</label>
  <input type="text" name="city" class="form-control" required />

  <label>Direccion * :</label>
  <input type="text" name="address" class="form-control" required />

  <label>Star_date * :</label>
  <input type="date" name="start_date" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
<!-- end form for validations -->

@endsection