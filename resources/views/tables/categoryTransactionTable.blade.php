<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Tipo Transaccion </th>
      <th class="column-title">Nombre </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($categoryTransactions as $categoryTransaction)
    <tr class="even pointer">
      <td class=" ">{{ $categoryTransaction->type->name }}</td>
      <td class=" ">{{ $categoryTransaction->name }}</td>
      <td class=" last">
        <x-button-edit title="{{$title}}" route="/categorytransactions/{{ $categoryTransaction->id }}" target="{{ $categoryTransaction->id }}">
          @include('forms.categoryTransactionUpdateForm')
        </x-button-edit>

        <x-button-delete title="{{$title}}" route="/categorytransactions/{{ $categoryTransaction->id }}/delete" target="{{ $categoryTransaction->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
