<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link href="{{ mix('css/footer.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  <style>
    /* --------- HEADER BASE --------- */
    #main-header {
      position: fixed;
      top: 0; left: 0; width: 100%; z-index: 1000;
      transition: background-color .3s, box-shadow .3s;
    }
    #main-header.transparent {
      background-color: #ff4081; /* rosa */
      box-shadow: none;
    }
    #main-header.solid {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    /* contenedor interno con mayor altura */
    #main-header .container {
      max-width: 1200px; margin: auto;
      padding: 0 20px; height: 100px; /* altura aumentada */
      display: flex; align-items: center; justify-content: space-between;
    }

    /* NAV LINKS */
    .nav-left, .nav-right {
      display: flex; gap: 35px; align-items: center;
    }
    .nav-left a, .nav-right a {
      text-decoration: none; font-weight: 600; text-transform: uppercase;
      transition: color .3s;
    }
    /* texto sobre rosa */
    #main-header.transparent .nav-left a,
    #main-header.transparent .nav-right a,
    #main-header.transparent .nav-logo {
      color: #fff;
    }
    /* texto sobre blanco */
    #main-header.solid .nav-left a,
    #main-header.solid .nav-right a,
    #main-header.solid .nav-logo {
      color: #000;
    }

    /* LOGO */
    .nav-logo {
      font-size: 24px; font-weight: bold;
      display: flex; flex-direction: column; text-align: center;
      transition: color .3s;
    }
    .logo-subtext {
      font-size: 12px; font-weight: normal;
    }

    /* BOTONES */
    .nav-button {
      padding: 8px 20px; border-radius: 20px; font-weight: 600;
      transition: background .2s, color .3s;
    }
    /* sobre rosa: botón blanco con texto rosa */
    #main-header.transparent .nav-button {
      background: #fff !important;
      color: #ff4081 !important;
    }
    /* sobre blanco: botón rosa con texto blanco */
    #main-header.solid .nav-button {
      background: #ff4081 !important;
      color: #fff !important;
    }
    .nav-button:hover { opacity: .85; }

    /* HAMBURGER */
    #nav-toggle {
      display: none; font-size: 28px; background: none; border: none;
      transition: color .3s;
    }
    #main-header.transparent #nav-toggle { color: #fff; }
    #main-header.solid       #nav-toggle { color: #000; }

    /* MOBILE MENU */
    #mobile-menu {
      display: none;
      position: absolute; top: 100%; left: 0; width: 100%;
      background: #fff; box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    #mobile-menu a {
      display: block; padding: 12px 20px; color: #333; text-decoration: none;
      border-bottom: 1px solid #eee;
    }
    #mobile-menu a:last-child { border-bottom: none; }
    #mobile-menu .nav-button {
      margin: 12px 20px; text-align: center;
    }

    /* RESPONSIVE */
    @media (max-width: 991px) {
      .nav-left, .nav-right { display: none; }
      #nav-toggle { display: block; }
      #mobile-menu.open { display: block; }
    }
  </style>
</head>
<body class="{{ in_array(Route::currentRouteName(), ['index','aboutUs','staff','gallery','appointments.index','services.index']) ? 'transparent-header' : '' }}">
  <div id="app">
    <header id="main-header"
            class="{{ in_array(Route::currentRouteName(), ['index','aboutUs','staff','gallery','appointments.index','services.index']) ? 'transparent' : 'solid' }}">
      <div class="container">
        <!-- left -->
        <div class="nav-left">
          <a href="/">Inicio</a>
          <a href="/aboutUs">Nosotros</a>
          <a href="/services">Servicios</a>
          <a href="/appointments">Citas</a>
        </div>

        <!-- logo -->
        <a href="{{ url('/') }}" class="nav-logo flex items-center">
  <!-- Logo como imagen -->
  <img
    src="https://parisbelleza.site/images/logo.png"
    alt="Sala de Belleza Paris"
    class="w-16 md:w-24 lg:w-32 h-auto object-contain"
  />
  <!-- Solo para lectores de pantalla -->
  <span class="sr-only">Sala de Belleza Paris</span>
</a>


        <!-- right -->
        <div class="nav-right">
          <a href="/paint">Crear</a>
          <a href="/staff">Personal</a>
          <a href="/gallery">Galería</a>
          @guest
            <a href="{{ route('login') }}" class="nav-button">Acceso</a>
            @if(Route::has('register'))
              <a href="{{ route('register') }}" class="nav-button">Registrarse</a>
            @endif
          @else
            <span>{{ Auth::user()->name }}</span>
            <a href="#" class="nav-button"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">Salir</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">@csrf</form>
          @endguest
        </div>

        <!-- mobile toggle -->
        <button id="nav-toggle">&#9776;</button>
      </div>

      <!-- mobile menu -->
      <div id="mobile-menu">
        <a href="/">Inicio</a>
        <a href="/aboutUs">Nosotros</a>
        <a href="/services">Servicios</a>
        <a href="/appointments">Citas</a>
        <a href="/paint">Crear</a>
        <a href="/staff">Personal</a>
        <a href="/gallery">Galería</a>
        @guest
          <a href="{{ route('login') }}" class="nav-button">Acceso</a>
          @if(Route::has('register'))
            <a href="{{ route('register') }}" class="nav-button">Registrarse</a>
          @endif
        @else
          <span class="px-4 py-2">{{ Auth::user()->name }}</span>
          <form action="{{ route('logout') }}" method="POST" class="p-4">
            @csrf
            <button type="submit" class="nav-button w-full">Salir</button>
          </form>
        @endguest
      </div>
    </header>

    <!-- espaciador header -->
    <div style="height:80px;"></div>

    <main>@yield('content')</main>
    @include('layouts.footer')
  </div>

  <script>
    if (document.body.classList.contains('transparent-header')) {
      const hdr = document.getElementById('main-header');
      window.addEventListener('scroll', () => {
        hdr.classList.toggle('solid', window.scrollY > 50);
        hdr.classList.toggle('transparent', window.scrollY <= 50);
      });
    }
    document.getElementById('nav-toggle')
      .addEventListener('click', () => document.getElementById('mobile-menu').classList.toggle('open'));
  </script>
</body>
</html>
