<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Categoria </th>
      <th class="column-title">Nombre </th>
      <th class="column-title">Descripcion </th>
      <th class="column-title">Unidad </th>
      <th class="column-title">Monto </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($actives as $active)
    <tr class="even pointer">
      <td class=" ">{{ $active->categoryActive->name }}</td>
      <td class=" ">{{ $active->name }}</td>
      <td class=" ">{{ $active->description }}</td>
      <td class=" ">{{ $active->unit }}</td>
      <td class=" ">{{ $active->amount }}</td>
      <td class=" last">
        <x-button-edit title="{{$title}}" route="/actives/{{ $active->id }}" target="{{ $active->id }}">
          @include('forms.activeUpdateForm')
        </x-button-edit>

        <x-button-delete title="{{$title}}" route="/actives/{{ $active->id }}/delete" target="{{ $active->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
