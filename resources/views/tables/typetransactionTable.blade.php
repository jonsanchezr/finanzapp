<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">id </th>
      <th class="column-title">Nombre </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($typetransactions as $typetransaction)
    <tr class="even pointer">
      <td class=" ">{{ $typetransaction->id }}</td>
      <td class=" ">{{ $typetransaction->name }}</td>
      <td class=" last">
        <a href="/typetransactions/{{ $typetransaction->id }}">Editar</a> - 
        <a href="/typetransactions/{{ $typetransaction->id }}/delete">Eliminar</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
