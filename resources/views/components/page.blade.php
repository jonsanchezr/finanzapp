<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>{{ $title }} <small>Listado</small></h3>
    </div>

    <div class="title_right">
      <div class="col-md-6 col-sm-6 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
          <span class="input-group-btn">
            <button id="buttonNew" class="btn btn-default" type="button" style="border-radius: 25px" data-toggle="modal" data-target=".create-form-modal-lg">Nuevo <i class="fa fa-plus"></i></button>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">

          {{ $slot }}

        </div>
      </div>
    </div>
  </div>
</div>