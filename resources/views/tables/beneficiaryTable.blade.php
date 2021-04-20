<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title">Identificación </th>
      <th class="column-title">Dirección </th>
      <th class="column-title">Teléfono </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($beneficiaries as $beneficiary)
    <tr class="even pointer">
      <td class=" ">{{ $beneficiary->name }}</td>
      <td class=" ">{{ $beneficiary->identification }}</td>
      <td class=" ">{{ $beneficiary->address }}</td>
      <td class=" ">{{ $beneficiary->phone }}</td>
      <td class=" last">
        <x-button-edit title="{{$title}}" route="/beneficiaries/{{ $beneficiary->id }}" target="{{ $beneficiary->id }}">
          @include('forms.beneficiaryUpdateForm')
        </x-button-edit>

        <x-button-delete title="{{$title}}" route="/beneficiaries/{{ $beneficiary->id }}/delete" target="{{ $beneficiary->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->