<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Motivo </th>
      <th class="column-title">Descripcion </th>
      <th class="column-title">Monto </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($debts as $debt)
    <tr class="even pointer">
      <td class=" ">{{ $debt->motive }}</td>
      <td class=" ">{{ $debt->description }}</td>
      <td class=" ">{{ $debt->amount }}</td>
      <td class=" last">
        <x-button-edit title="{{$title}}" route="/debts/{{ $debt->id }}" target="{{ $debt->id }}">
          @include('forms.debtUpdateForm')
        </x-button-edit>

        <x-button-delete title="{{$title}}" route="/debts/{{ $debt->id }}/delete" target="{{ $debt->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
