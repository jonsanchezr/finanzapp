<!-- start form for validation -->
<div class="row">

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Nombre * :</label>
    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required />
  </div>

  <div class="col-md-8 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Cuenta * :</label>
    <input type="text" name="account" class="form-control" value="{{ old('account') }}" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Beneficiario * :</label>
    <input type="text" name="holder" class="form-control" value="{{ old('holder') }}" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Identificacion :</label>
    <input type="text" name="identification" class="form-control"  value="{{ old('identification') }}" />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Tipo :</label>
    <input type="text" name="type" class="form-control" value="{{ old('type') }}" />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Correo :</label>
    <input type="text" name="email" class="form-control" value="{{ old('email') }}" />
  </div>
</div>
<!-- end form for validations -->
