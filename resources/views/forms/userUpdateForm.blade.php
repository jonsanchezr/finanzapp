<!-- start form for validation -->
  <label>Nombre * :</label>
  <input type="text" name="name" value="{{ $user->name }}" class="form-control" required />

  <label>Apellido * :</label>
  <input type="text" name="lastname" value="{{ $user->profile->lastname }}" class="form-control" required />

  <label>Username * :</label>
  <input type="text" name="username" value="{{ $user->profile->username }}" class="form-control" required />

  <label>Correo * :</label>
  <input type="email" name="email" value="{{ $user->email }}" class="form-control" required />

  <label>Contraseña * :</label>
  <input type="password" name="password" class="form-control" />

  <label>Cargo * :</label>
  <input type="text" name="position" value="{{ $user->profile->position }}" class="form-control" required />

  <label>Telefono * :</label>
  <input type="text" name="phone" value="{{ $user->profile->phone }}" class="form-control" required />

  <label>Pais * :</label>
  <input type="text" name="country" value="{{ $user->profile->country }}" class="form-control" required />

  <label>Estado * :</label>
  <input type="text" name="state" value="{{ $user->profile->state }}" class="form-control" required />

  <label>Ciudad * :</label>
  <input type="text" name="city" value="{{ $user->profile->city }}" class="form-control" required />

  <label>Direccion * :</label>
  <input type="text" name="address" value="{{ $user->profile->address }}" class="form-control" required />

  <label>Star_date * :</label>
  <input type="date" name="start_date" value="{{ $user->profile->start_date }}" class="form-control" required />

  <label>Role * :</label>
  <select name="role" class="form-control" required>
    @foreach($roles as $role)
    <option value="{{ $role }}">{{ $role }}</option>
    @endforeach
  </select>
<!-- end form for validations -->