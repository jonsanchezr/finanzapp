<!-- start form for validation -->
<div class="row">
  
  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
    <label>Tipo * :</label>
    <select name="type_transaction_id" class="form-control" required>
      <option value="">Seleccione una opcion</option>
      @foreach($types as $type)
      <option value="{{ $type->id }}">{{ __('model.typetransaction.'.$type->name) }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
    <label>Origen/Destino * :</label>
    <select name="bank_id" class="form-control" required>
      <option value="">Seleccione una opcion</option>
      @foreach($banks as $bank)
      <option value="{{ $bank->id }}">{{$bank->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
    <label>Categoria * :</label>
    <select name="subcategory_transaction_id" class="form-control" required>
      <option value="">Seleccione una opcion</option>
      @foreach($categories_income as $category)
        @foreach($category->subCategories as $subcategory)
          <option value="{{ $subcategory->id }}"> + {{ $subcategory->name }}</option>
        @endforeach
      @endforeach

      @foreach($categories_expense as $category)
        @foreach($category->subCategories as $subcategory)
          <option value="{{ $subcategory->id }}"> - {{ $subcategory->name }}</option>
        @endforeach
      @endforeach

      @foreach($categories_transfer as $bank)
        <option value="{{ $bank->id }}"> * {{ $bank->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
    <label>Beneficiario * :</label>
    <select name="beneficiary_id" class="form-control" required>
      <option value="">Seleccione una opcion</option>
      @foreach($beneficiaries as $beneficiary)
        <option value="{{ $beneficiary->id }}">{{ $beneficiary->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="col-md-6 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Nota * :</label>
    <input type="text" name="note" class="form-control" required />
  </div>

  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Fecha * :</label>
    <input type="date" name="created" class="form-control" required />
  </div>

  <div class="col-md-3 col-sm-12 col-xs-12 form-group">
    <label for="fullname">Monto * :</label>
    <input type="number" name="amount" class="form-control" min="0" step="0.01" pattern="^\d+(?:\.\d{1,2})?$" required />
  </div>
</div>
<!-- end form for validations -->
