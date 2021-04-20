<div class="modal fade {{ $class }}" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Editar {{ $title }}</h4>
      </div>
      <form action="{{ $route }}" method="POST" id="demo-form" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">

        {{ $slot }}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
      </form>
    </div>
  </div>
</div>