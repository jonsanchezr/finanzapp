<!-- start form for validation -->
<div class="row">
  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Nombre * :</label>
    <input type="text" name="name" class="form-control" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Unidad * :</label>
    <input type="number" name="unit" class="form-control" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Monto * :</label>
    <input type="number" name="amount" class="form-control" min="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" required />
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Descripcion * :</label>
    <input type="text" name="description" class="form-control" required />
  </div>
  
  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Categoria * :</label>
    <select name="category_active_id" class="form-control" required >
      <option value="">Seleccione una opcion ...</option>
      @foreach($categoryActives as $categoryActive)
        <option value="{{ $categoryActive->id }}">{{ $categoryActive->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-4 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Imagen * :</label>
    <input type="file" name="image" class="form-control">
  </div>
</div>
<!-- end form for validations -->
