<!-- start form for validation -->
<div class="row">
  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Motivo * :</label>
    <input type="text" name="motive" class="form-control" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Descripcion * :</label>
    <input type="text" name="description" class="form-control" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Monto * :</label>
    <input type="number" name="amount" class="form-control" min="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" required />
  </div>
</div>
<!-- end form for validations -->
