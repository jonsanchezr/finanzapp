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
<form action="/typetransactions/{{ $typetransaction->id }}" method="POST" id="demo-form">
  @csrf
  <label>Nombre * :</label>
  <input type="text" name="name" value="{{ $typetransaction->name }}" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
<!-- end form for validations -->

@endsection