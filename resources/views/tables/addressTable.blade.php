<!-- start table -->
<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Pais </th>
      <th class="column-title">Estado </th>
      <th class="column-title">Ciudad </th>
      <th class="column-title">Direccion 1 </th>
      <th class="column-title">Direccion 2 </th>
      <th class="column-title">Codigo Postal </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($addresses as $address)
    <tr class="even pointer">
      <td class=" ">{{ $address->country }}</td>
      <td class=" ">{{ $address->state }}</td>
      <td class=" ">{{ $address->city }}</td>
      <td class=" ">{{ $address->address_1 }}</td>
      <td class=" ">{{ $address->address_2 }}</td>
      <td class=" ">{{ $address->postal_code }}</td>
      <td class=" last">
        <a href="/addresses/{{ $address->id }}">Edit</a>
        <a href="/addresses/{{ $address->id }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->