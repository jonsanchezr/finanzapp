<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Factura </th>
      <th class="column-title">Cliente </th>
      <th class="column-title">Unidad </th>
      <th class="column-title">Producto</th>
      <th class="column-title">Monto</th>
      <th class="column-title">IVA</th>
      <th class="column-title">Fecha</th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($sales as $sale)
    <tr class="even pointer">
      <td class=" ">{{ $sale->invoice_serial }}</td>
      <td class=" ">{{ $sale->client }}</td>
      <td class=" ">{{ $sale->unit }}</td>
      <td class=" ">{{ $sale->product }}</td>
      <td class=" ">{{ $sale->amount }}</td>
      <td class=" ">{{ $sale->tax }}</td>
      <td class=" ">{{ $sale->created }}</td>
      <td class=" last">
        <a href="/sale/{{ $sale->id }}">Edit</a>
        <a href="/sale/{{ $sale->id }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
