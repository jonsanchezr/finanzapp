<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($typeproducts as $typeproduct)
    <tr class="even pointer">
      <td class=" ">{{ $typeproduct->name }}</td>
      <td class=" last">
        <a href="/typeproduct/{{ $typeproduct->id }}">Editar</a> - 
        <a href="/typeproduct/{{ $typeproduct->id }}/delete">Eliminar</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
