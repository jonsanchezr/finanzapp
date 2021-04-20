<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span>
      </th>
    </tr>
  </thead>

  <tbody>
    @foreach($typeactives as $typeactive)
    <tr class="even pointer">
      <td class=" ">{{ $typeactive->name }}</td>
      <td class=" last">
        <a href="/typeactives/{{ $typeactive->id }}">Edit</a>
        <a href="/typeactives/{{ $typeactive->id }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->