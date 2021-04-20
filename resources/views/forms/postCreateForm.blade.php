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
<form action="/posts" method="POST" id="demo-form">
  @csrf
  <label>Titulo * :</label>
  <input type="text" name="title" class="form-control" required />

  <label>Contenido * :</label>
  <input type="text" name="content" class="form-control" required />

  <label>Autor * :</label>
  <input type="text" name="author" class="form-control" required />

  <label>Slug * :</label>
  <input type="text" name="slug" class="form-control" required />

  <br/>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
<!-- end form for validations -->

@endsection