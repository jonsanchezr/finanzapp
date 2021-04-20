<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($typesales as $typesale)
    <tr class="even pointer">
      <td class=" ">{{ $typesale->name }}</td>
      <td class=" last">
        <a href="/typesale/{{ $typesale->id }}">Editar</a> - 
        <a href="/typesale/{{ $typesale->id }}/delete">Eliminar</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->