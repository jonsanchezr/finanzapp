@extends('layouts.tableLayout')

@section('content')

<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">id </th>
      <th class="column-title">Nombre </th>
      <th class="column-title">Descripción </th>
      <th class="column-title">Dirección </th>
      <th class="column-title">Código </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($shops as $shop)
    <tr class="even pointer">
      <td class=" ">{{ $shop->id }}</td>
      <td class=" ">{{ $shop->name }}</td>
      <td class=" ">{{ $shop->description }}</td>
      <td class=" ">{{ $shop->address }}</td>
      <td class=" ">{{ $shop->code }}</td>
      <td class=" last">
        <a href="/shops/{{ $shop->id }}">Editar</a> - 
        <a href="/shops/{{ $shop->id }}/delete">Eliminar</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->

@endsection