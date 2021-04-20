<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Serial </th>
      <th class="column-title">Nombre </th>
      <th class="column-title">Pais </th>
      <th class="column-title">Estado </th>
      <th class="column-title">Ciudad </th>
      <th class="column-title">Direccion </th>
      <th class="column-title">Telefono </th>
      <th class="column-title">Correo </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($invoices as $invoice)
    <tr class="even pointer">
      <td class=" ">{{ $invoice->serial }}</td>
      <td class=" ">{{ $invoice->from_name }}</td>
      <td class=" ">{{ $invoice->from_country }}</td>
      <td class=" ">{{ $invoice->from_state }}</td>
      <td class=" ">{{ $invoice->from_city }}</td>
      <td class=" ">{{ $invoice->from_address }}</td>
      <td class=" ">{{ $invoice->from_phone }}</td>
      <td class=" ">{{ $invoice->from_mail }}</td>
      <td class=" last">
        <a href="/invoices/{{ $invoice->serial }}">Edit</a>
        <a href="/invoices/{{ $invoice->serial }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->