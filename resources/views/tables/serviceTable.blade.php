<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title">Descripcion </th>
      <th class="column-title">Monto </th>
      <th class="column-title">Renovacion </th>
      <th class="column-title">Creado </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($services as $service)
    <tr class="even pointer">
      <td class=" ">{{ $service->name }}</td>
      <td class=" ">{{ $service->description }}</td>
      <td class=" ">{{ $service->amount }}</td>
      <td class=" ">{{ $service->renewal }}</td>
      <td class=" ">{{ $service->created }}</td>
      <td class=" last">
        <a href="/services/{{ $service->id }}">Edit</a>
        <a href="/services/{{ $service->id }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->