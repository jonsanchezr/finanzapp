<!-- start form for validation -->
  <label>Nombre * :</label>
  <input type="text" name="name" class="form-control @error('name') parsley-error @enderror" />
  @error('name')
    <div style="color: red; margin-bottom: 10px">{{ $message }}</div>
  @enderror

  <label>Apellido * :</label>
  <input type="text" name="lastname" class="form-control" required />

  <label>Username * :</label>
  <input type="text" name="username" class="form-control" required />

  <label>Correo * :</label>
  <input type="email" name="email" class="form-control" required />

  <label>Contraseña * :</label>
  <input type="password" name="password" class="form-control" required />

  <label>Confirmar Contraseña * :</label>
  <input type="password" name="password_confirmation" class="form-control" required />

  <label>Cargo * :</label>
  <input type="text" name="position" class="form-control" required />

  <label>Telefono * :</label>
  <input type="text" name="phone" class="form-control" required />

  <label>Pais * :</label>
  <input type="text" name="country" class="form-control" required />

  <label>Estado * :</label>
  <input type="text" name="state" class="form-control" required />

  <label>Ciudad * :</label>
  <input type="text" name="city" class="form-control" required />

  <label>Direccion * :</label>
  <input type="text" name="address" class="form-control" required />

  <label>Star_date * :</label>
  <input type="date" name="start_date" class="form-control" required />

  <label>Role * :</label>
  <select name="role" class="form-control" required>
    @foreach($roles as $role)
    <option value="{{ $role }}">{{ $role }}</option>
    @endforeach
  </select>
<!-- end form for validations -->
