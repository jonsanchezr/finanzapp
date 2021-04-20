@extends('layouts.tableLayout')

@section('content')

<!-- start table -->
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th class="column-title">id </th>
      <th class="column-title">Titulo </th>
      <th class="column-title">Contenido </th>
      <th class="column-title">Autor </th>
      <th class="column-title">Slug </th>
      <th class="column-title no-link last"><span class="nobr">Acciones</span></th>
    </tr>
  </thead>

  <tbody>
    @foreach ($posts as $post)
    <tr class="even pointer">
      <td class=" ">{{ $post->id }}</td>
      <td class=" ">{{ $post->title }}</td>
      <td class=" ">{{ $post->content }}</td>
      <td class=" ">{{ $post->author }}</td>
      <td class=" ">{{ $post->slug }}</td>
      <td class=" last">
        <a href="/posts/{{ $post->slug }}">Editar</a> - 
        <a href="/posts/{{ $post->slug }}/delete">Eliminar</a></td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->

@endsection