<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title">Monto </th>
      <th class="column-title">Serial </th>
      <th class="column-title">Apellido </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($payrolls as $payroll)
    <tr class="even pointer">
      <td class=" ">{{ $payroll->name }}</td>
      <td class=" ">{{ $payroll->amount }}</td>
      <td class=" ">{{ $payroll->serial }}</td>
      <td class=" ">{{ $payroll->lastname }}</td>
      <td class=" last">
        <a href="/payroll/{{ $payroll->serial }}">Edit</a>
        <a href="/payroll/{{ $payroll->serial }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
