<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name','Laravel')}} - @yield('title')</title>
    <link href="{{ asset('sb-admin/css/styles.css')}}" rel="stylesheet" />
    <link href="{{ asset('fontawesome-5.14.0/css/all.css')}}" rel="stylesheet" />
@stack('external-css')
@stack('internal-css')
    <!-- font awasome -->
  </head>
  <body class="sb-nav-fixed">
  @include('dashboard.part.navbar')
    <!-- navbar -->
    <div id="layoutSidenav">
      <!-- sidebar -->
      <div id="layoutSidenav_content">
      @include('dashboard.part.sidebar')
        <!-- content -->
        @yield('content')
        @include('dashboard.part.footer')
        <!-- footer -->
      </div>
    </div>
    <!-- jquery -->
    <script src="{{ asset('jquery-3.5.1/js/scripts.js')}}"></script>
    <!-- bootstrap4 -->
    <script src="{{ asset('bootstrap-4.5.2/js/bootstrap.min.js')}}"></script>
    <!-- dashboard js -->

    <script src="{{ asset('sb-admin/js/scripts.js')}}"></script>
    @stack('external-javascript')
    @stack('internal-javascript')
  </body>
</html>