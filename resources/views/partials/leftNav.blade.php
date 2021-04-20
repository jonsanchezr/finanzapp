<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="/" class="site_title"><i class="fa fa-bar-chart"></i> <span>Finanzapp</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ asset('assets/images/img.jpg') }}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>John Doe</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li>
            <a href="{{ route('transactions.index') }}"><i class="fa fa-clone"></i>Transacciones </a>
          </li>
          <li>
            <a href="{{ route('banks.index') }}"><i class="fa fa-bank"></i>Bancos </a>
          </li>
          <li>
            <a href="{{ route('beneficiaries.index') }}"><i class="fa fa-users"></i>Beneficiarios </a>
          </li>
          <li>
            <a href="{{ route('categorytransactions.index') }}"><i class="fa fa-bars"></i>Categorias </a>
          </li>
          <li>
            <a href="{{ route('subcategorytransactions.index') }}"><i class="fa fa-bars"></i>SubCategorias </a>
          </li>
          <li>
            <a href="#"><i class="fa fa-table"></i>Reportes </a>
          </li>
          <li>
            <a href="{{ route('actives.index') }}"><i class="fa fa-check-square"></i>Activos </a>
          </li>
          <li>
            <a href="{{ route('debts.index') }}"><i class="fa fa-minus-square"></i>Deudas </a>
          </li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout').submit();">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>