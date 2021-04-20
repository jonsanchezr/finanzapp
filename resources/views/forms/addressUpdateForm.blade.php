@extends('layouts.formLayout')

@section('content')

<!-- start form for validation -->
<form action="/addresses/{{ $address->id }}" method="POST" id="demo-form">
  @csrf
  <label for="fullname">Pais * :</label>
  <input type="text" name="country" value="{{ $address->country }}" class="form-control" required />

  <label for="fullname">Estado * :</label>
  <input type="text" name="state" value="{{ $address->state }}" class="form-control" required />

  <label for="fullname">Ciudad * :</label>
  <input type="text" name="city" value="{{ $address->city }}" class="form-control" required />

  <label for="fullname">Direccion 1 * :</label>
  <input type="text" name="address_1" value="{{ $address->address_1 }}" class="form-control" required />

    <label for="fullname">Direccion 2 * :</label>
  <input type="text" name="address_2" value="{{ $address->address_2 }}" class="form-control" />

    <label for="fullname">Codigo Postal * :</label>
  <input type="text" name="postal_code" value="{{ $address->postal_code }}" class="form-control" />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection