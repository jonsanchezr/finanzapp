<!-- start form for validation -->
<div class="row">
  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Nombre * :</label>
    <input type="text" name="name" value="{{ $beneficiary->name }}" class="form-control" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Identificación :</label>
    <input type="text" name="identification" value="{{ $beneficiary->identification }}" class="form-control" />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Teléfono :</label>
    <input type="numeric" name="phone" value="{{ $beneficiary->phone }}" class="form-control" />
  </div>

  <div class="col-md-12 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Dirección :</label>
    <input type="numeric" name="address" value="{{ $beneficiary->address }}" class="form-control" />
  </div>
</div>
<!-- end form for validations -->