<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">id </th>
      <th class="column-title">Tipo </th>
      <th class="column-title">Categoria </th>
      <th class="column-title">Beneficiario </th>
      <th class="column-title">Monto </th>
      <th class="column-title">Fecha </th>
      <th class="column-title no-link last"><span class="nobr">Acciones </span></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($transactions as $transaction)
    <tr class="even pointer">
      <td class=" ">{{ $transaction->id }}</td>
      <td class=" ">{{ $transaction->type->name }}</td>
      <td class=" ">{{ $transaction->subCategory->name }}</td>
      <td class=" ">{{ $transaction->beneficiary->name }}</td>
      <td class=" ">{{ $transaction->amount }}</td>
      <td class=" ">{{ $transaction->created }}</td>
      <td class=" last">
        <x-button-delete title="{{$title}}" route="/transactions/{{ $transaction->id }}/delete" target="{{ $transaction->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->