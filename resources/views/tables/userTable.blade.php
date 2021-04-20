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
    @foreach($users as $user)
    <tr class="even pointer">
      <td class=" ">{{ $user->profile->name }}</td>
      <td class=" ">{{ $user->profile->lastname }}</td>
      <td class=" ">{{ $user->profile->username }}</td>
      <td class=" ">{{ $user->profile->position }}</td>
      <td class=" ">{{ $user->profile->start_date }}</td>
      <td class=" last">
        <button data-toggle="modal" data-target=".update{{ $user->id }}-form-modal-lg" style="border: none;background: none;font-size: 16px;"><i class="fa fa-edit"></i></button>
        
        <!-- Update{{ $user->id }} modal -->
        <x-modal title="Usuario" route="/users/{{$user->id}}" class="update{{ $user->id }}-form-modal-lg">
          @include('forms.userUpdateForm')
        </x-modal>
        <!-- /Update{{ $user->id }} modal -->
        
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:none','id'=>$user->id]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        <button data-toggle="modal" data-target=".delete{{ $user->id }}-form-modal-sm" style="border: none;background: none;font-size: 16px;">
                <i class="fa fa-trash"></i>
        </button>
        <!-- Delete{{ $user->id }} modal -->
        <div class="modal fade delete{{ $user->id }}-form-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
              </div>
              <div class="modal-body">
                Seguro desea eliminar el Usuario: {{ $user->profile->username }}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger" onclick="event.preventDefault();
                document.getElementById('{{ $user->id }}').submit();">Eliminar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Delete{{ $user->id }} modal -->
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- end table -->
