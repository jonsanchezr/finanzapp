<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Titulo </th>
      <th class="column-title">Descripción </th>
      <th class="column-title">Fecha de Inicio </th>
      <th class="column-title">Fecha Final</th>
      <th class="column-title">Estado</th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($sasks as $sask)
    <tr class="even pointer">
      <td class=" ">{{ $sask->title }}</td>
      <td class=" ">{{ $sask->description }}</td>
      <td class=" ">{{ $sask->start_date }}</td>
      <td class=" ">{{ $sask->end_date }}</td>
      <td class=" ">{{ $sask->status }}</td>
      <td class=" last">
        <a href="/sask/{{ $sask->id }}">Edit</a>
        <a href="/sask/{{ $sask->id }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
