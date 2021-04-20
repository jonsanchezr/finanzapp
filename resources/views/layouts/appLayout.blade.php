<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/ico" />

    <title>{{ $title ?? 'Dashboard' }} - {{ config('app.name', 'Finanzapp') }}</title>

    @yield('css')
    <!-- PNotify -->
    <link href="{{ asset('assets/vendors/pnotify/dist/pnotify.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/pnotify/dist/pnotify.buttons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/pnotify/dist/pnotify.nonblock.css') }}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- left navigation -->
        @include('partials.leftNav')
        <!-- /left navigation -->

        <!-- top navigation -->
        @include('partials.topNav')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('page')
        <!-- /page content -->

        <!-- footer content -->
        @include('partials.footer')
        <!-- /footer content -->
      </div>
    </div>

    <form action="{{ route('logout') }}" method="POST" id="logout" style="display: none;">
      @csrf
    </form>

    <!-- js -->
    @yield('js')
    <!-- PNotify -->
    <script src="{{ asset('assets/vendors/pnotify/dist/pnotify.js') }}"></script>
    <script src="{{ asset('assets/vendors/pnotify/dist/pnotify.buttons.js') }}"></script>
    <script src="{{ asset('assets/vendors/pnotify/dist/pnotify.nonblock.js') }}"></script>

    @if (session('success'))
    <!-- start alert success -->
    <script type="text/javascript">
    window.onload = function() {
      new PNotify({
        title: "{{ session('success') }}",
        type: "success",
        styling: "bootstrap3"
      })
    };
    </script>
    <!-- end alert success -->
    @endif

    @if ($errors->any())
    <!-- start alert error validate -->
    <script type="text/javascript">
      window.onload = function() {
        $('#buttonNew').click()

        @foreach ($errors->all() as $error)
          new PNotify({
            title: "{{ $error }}",
            type: "info",
            styling: "bootstrap3"
          });
        @endforeach

      };
    </script>
    <!-- end alert error validate -->
    @endif
    <!-- /js -->
	
  </body>
</html>