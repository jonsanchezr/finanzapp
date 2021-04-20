<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($categoryActives as $categoryActive)
    <tr class="even pointer">
      <td class=" ">{{ $categoryActive->name }}</td>
      <td class=" last">
        <x-button-edit title="{{$title}}" route="/categoryactives/{{ $categoryActive->id }}" target="{{ $categoryActive->id }}">
          @include('forms.categoryActiveUpdateForm')
        </x-button-edit>

        <x-button-delete title="{{$title}}" route="/categoryactives/{{ $categoryActive->id }}/delete" target="{{ $categoryActive->id }}" />
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
