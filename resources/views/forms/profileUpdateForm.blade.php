@extends('layouts.formLayout')

@section('content')

<!-- start form for validation -->
<form action="/profile/{{ $profile->username }}" method="POST" id="demo-form">
  @csrf
  <label for="fullname">Nombre * :</label>
  <input type="text" name="name" value="{{ $profile->name }}" class="form-control" required />

  <label for="fullname">Apellido * :</label>
  <input type="text" name="lastname" value="{{ $profile->lastname }}" class="form-control" required />

  <label for="fullname">Username * :</label>
  <input type="text" name="username" value="{{ $profile->username }}" class="form-control" required />

  <label for="fullname">Cargo * :</label>
  <input type="text" name="position" value="{{ $profile->position }}" class="form-control" required />

  <label for="fullname">Correo * :</label>
  <input type="text" name="mail" value="{{ $profile->mail }}" class="form-control" required />

  <label for="fullname">Telefono * :</label>
  <input type="text" name="phone" value="{{ $profile->phone }}" class="form-control" required />

  <label for="fullname">Pais * :</label>
  <input type="text" name="country" value="{{ $profile->country }}" class="form-control" required />

  <label for="fullname">Estado * :</label>
  <input type="text" name="state" value="{{ $profile->state }}" class="form-control" required />

  <label for="fullname">Ciudad * :</label>
  <input type="text" name="city" value="{{ $profile->city }}" class="form-control" required />

  <label for="fullname">Direccion * :</label>
  <input type="text" name="address" value="{{ $profile->address }}" class="form-control" required />

  <label for="fullname">Start_date * :</label>
  <input type="date" name="start_date" value="{{ $profile->start_date }}" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection