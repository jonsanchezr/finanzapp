<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title">Beneficiario </th>
      <th class="column-title">Tipo </th>
      <th class="column-title">Balance </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($banks as $bank)
    <tr class="even pointer">
      <td class=" ">{{ $bank->name }}</td>
      <td class=" ">{{ $bank->holder }}</td>
      <td class=" ">{{ $bank->type }}</td>
      <td class=" ">{{ $bank->balance }}</td>
      <td class=" last">
        <x-button-edit title="{{$title}}" route="/banks/{{ $bank->id }}" target="{{ $bank->id }}">
          @include('forms.bankUpdateForm')
        </x-button-edit>

        <x-button-delete title="{{$title}}" route="/banks/{{ $bank->id }}/delete" target="{{ $bank->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
