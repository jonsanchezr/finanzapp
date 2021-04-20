@extends('layouts.formLayout')

@section('content')

<!-- start form for validation -->
<form action="/sale/{{ $sale->id }}" method="POST" id="demo-form">
  @csrf
  <label for="fullname">Factura * :</label>
  <input type="text" name="invoice_serial" value="{{ $sale->invoice_serial }}" class="form-control" required />

  <label for="fullname">Cliente * :</label>
  <input type="text" name="client" value="{{ $sale->client }}" class="form-control" required />

  <label for="fullname">Unidad * :</label>
  <input type="text" name="unit" value="{{ $sale->unit }}" class="form-control" required />

  <label for="fullname">Producto * :</label>
  <input type="text" name="product" value="{{ $sale->product }}" class="form-control" required />

  <label for="fullname">Monto * :</label>
  <input type="numeric" name="amount" value="{{ $sale->amount }}" class="form-control" required />

  <label for="fullname">IVA * :</label>
  <input type="numeric" name="tax" value="{{ $sale->tax }}" class="form-control" required />

  <label for="fullname">Fecha * :</label>
  <input type="date" name="created" value="{{ $sale->created }}" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection