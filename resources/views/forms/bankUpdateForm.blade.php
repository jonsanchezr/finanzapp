<!-- start form for validation -->
<div class="row">
  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Nombre * :</label>
    <input type="text" name="name" value="{{ $bank->name }}" class="form-control" required />
  </div>

  <div class="col-md-8 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Cuenta * :</label>
    <input type="text" name="account" value="{{ $bank->account }}" class="form-control" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Beneficiario * :</label>
    <input type="text" name="holder" value="{{ $bank->holder }}" class="form-control" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Identificacion :</label>
    <input type="text" name="identification" value="{{ $bank->identification }}" class="form-control" />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Tipo :</label>
    <input type="text" name="type" value="{{ $bank->type }}" class="form-control" />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Correo :</label>
    <input type="text" name="email" value="{{ $bank->email }}" class="form-control" />
  </div>

  <input type="hidden" name="balance" value="0"/>
</div>
<!-- end form for validations -->
