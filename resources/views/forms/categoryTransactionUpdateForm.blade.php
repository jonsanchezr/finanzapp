<!-- start form for validation -->
<div class="row">
	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
  	<label>Tipo * :</label>
  	<select name="type_transaction_id" class="form-control" required>
  		<option value="">Seleccione una opcion</option>
  		@foreach($types as $type)
  			<option value="{{ $type->id }}"
          @if($categoryTransaction->type_transaction_id == $type->id)
          selected
          @endif
          >{{ __('model.typetransaction.'.$type->name) }}</option>
  		@endforeach
  	</select>
  </div>
  
  <div class="col-md-8 col-sm-12 col-xs-12 form-group">
  	<label for="fullname">Nombre * :</label>
  	<input type="text" name="name" value="{{ $categoryTransaction->name }}" class="form-control" required />
  </div>
</div>
<!-- end form for validations -->
