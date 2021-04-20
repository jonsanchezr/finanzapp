<!-- start form for validation -->
<div class="row">
  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label>Categoria * :</label>
    <select name="category_transaction_id" class="form-control" required>
      <option value="">Seleccione una opcion</option>
      @foreach($categories as $category)
        <option value="{{ $category->id }}"
          @if($subcategorytransaction->category_transaction_id == $category->id)
          selected
          @endif>{{ $category->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label>Nombre * :</label>
    <input type="text" name="name" value="{{ $subcategorytransaction->name }}" class="form-control" required />
  </div>
</div>
<!-- end form for validations -->
