@extends('layouts.tableLayout')

@section('content')

<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">Nombre </th>
      <th class="column-title">Apellido </th>
      <th class="column-title">Username </th>
      <th class="column-title">Cargo </th>
      <th class="column-title">Ingreso </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach($profiles as $profile)
    <tr class="even pointer">
      <td class=" ">{{ $profile->name }}</td>
      <td class=" ">{{ $profile->lastname }}</td>
      <td class=" ">{{ $profile->username }}</td>
      <td class=" ">{{ $profile->position }}</td>
      <td class=" ">{{ $profile->start_date }}</td>
      <td class=" last">
        <a href="/profile/{{ $profile->username }}">Edit</a>
        <a href="/profile/{{ $profile->username }}/delete">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->

@endsection