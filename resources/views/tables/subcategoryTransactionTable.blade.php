<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Categoria </th>
      <th class="column-title">Nombre </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($subcategorytransactions as $subcategorytransaction)
    <tr class="even pointer">
      <td class=" ">{{ $subcategorytransaction->categoryTransaction->name }}</td>
      <td class=" ">{{ $subcategorytransaction->name }}</td>
      <td class=" last">
        <x-button-edit title="{{$title}}" route="/subcategorytransactions/{{ $subcategorytransaction->id }}" target="{{ $subcategorytransaction->id }}">
          @include('forms.subcategoryTransactionUpdateForm')
        </x-button-edit>

        <x-button-delete title="{{$title}}" route="/subcategorytransactions/{{ $subcategorytransaction->id }}/delete" target="{{ $subcategorytransaction->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
