<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/images/img.jpg') }}" alt="">{{ auth()->user()->name }}
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="javascript:;"> Profile</a></li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">50%</span>
                <span>Settings</span>
              </a>
            </li>
            <li><a href="javascript:;">Help</a></li>

            <!--Comprobamos si el status esta a true y existe más de un lenguaje-->
            @if (config('locale.status') && count(config('locale.languages')) > 1)
                @foreach (array_keys(config('locale.languages')) as $lang)
                  @if ($lang != App::getLocale())
                    <li>
                      <a href="{!! route('lang.swap', $lang) !!}">
                        {!! $lang !!} <small>{!! $lang !!}</small>
                      </a>
                    </li>
                  @endif
                @endforeach
            @endif

            <!--Comprobamos si el status esta a true y existe más de una moneda-->
            @if (config('currency.status') && count(config('currency.currencies')) > 1)
                @foreach (array_keys(config('currency.currencies')) as $currency)
                  @if ($currency != session()->get('currency'))
                    <li>
                      <a href="{!! route('currency.swap', $currency) !!}">
                        {!! $currency !!} <small>{!! $currency !!}</small>
                      </a>
                    </li>
                  @endif
                @endforeach
            @endif

            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </li>
          </ul>
        </li>

        <!-- start setting -->
        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-cog"></i>
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled" role="menu">
            <li><a href="javascript:;"> Profile</a></li>
            <li><a href="{{ route('categoryactives.index') }}"> Categoria Activos</a></li>
          </ul>
        </li>
        <!-- end setting -->

        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            <span class="badge bg-green">6</span>
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            <li>
              <a>
                <span class="image"><img src="{{ asset('assets/images/img.jpg') }}" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="{{ asset('assets/images/img.jpg') }}" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="{{ asset('assets/images/img.jpg') }}" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <a>
                <span class="image"><img src="{{ asset('assets/images/img.jpg') }}" alt="Profile Image" /></span>
                <span>
                  <span>John Smith</span>
                  <span class="time">3 mins ago</span>
                </span>
                <span class="message">
                  Film festivals used to be do-or-die moments for movie makers. They were where...
                </span>
              </a>
            </li>
            <li>
              <div class="text-center">
                <a>
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>