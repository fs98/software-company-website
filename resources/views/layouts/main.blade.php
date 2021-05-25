<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ config('app.name', 'Katriel Dev') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script> 

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
  <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">

  @yield('links')

</head>

<body class="bg-honey-dew"> 

  <!-- Preloader -->
  {{-- <div id="preloader">
    <div class="bg-bottle-green h-100 d-flex justify-content-center align-items-center" id="spinner">
      <div class="centered">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
      </div>
    </div>
  </div> --}}

  <!-- The Overlay Navbar -->
  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="#" class="{{ Route::currentRouteNamed('public-home') ? "active" : "" }}">
        {{ __('Početna') }}
      </a>
      <a href="#">
        {{ __('O nama') }}
      </a>
      <a href="#">
        {{ __('Servisi') }}
      </a>
      <a href="#">
        {{ __('Kontakt') }}
      </a>
      <div style="display: inline-block">
        <a href="" class="d-inline">BHS</a> 
        <span class="lang-separator">|</span>
        <a href="" class="d-inline">DE</a> 
        <span class="lang-separator">|</span>
        <a href="" class="d-inline">EN</a> 
      </div>
    </div>

  </div> 

  <header class="position-relative w-100 overflow-hidden bg-dark custom-border-radius min-vh-100"> {{-- style="border-end-end-radius: 40%" --}}
    <div class="loading r">
      <div class="loading_line_wrapper">
        <div class="loading_line">
          <div class="loading_line_inner loading_line_inner--1"></div>
          <div class="loading_line_inner loading_line_inner--2"></div>
        </div>
      </div>
    </div>
    <div class="overlay" class="bg-honey-dew"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="min-h-100 min-w-100 w-auto h-auto">
      <source src="https://player.vimeo.com/external/553362038.sd.mp4?s=7102361a0156a3689b83848a7cce9044180a335b&profile_id=164&oauth2_token_id=57447761" type="video/mp4"> 
    </video>
    <div class="container h-100 position-relative">
      <nav class="navbar navbar-dark py-5">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/icons/logo.svg') }}" alt="logo" height="45" width="auto">
        </a>
        <button onclick="openNav()" class="navbar-toggler text-right border-0 pr-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
          <img src="{{ asset('img/icons/toggler-icon.svg') }}" alt="toggler-icon" height="25" width="auto">
        </button>
      </nav>
      <div class="d-flex justify-content-start align-items-center" style="margin-top: 25vh">
        <div class="text-honey-dew">
          <h1 class="display-1 text-uppercase font-weight-semi-bold">
            {{ __('Vaš cilj,')}}
          </h1>
          <h1 class="display-3 mb-0">
            <span class="font-weigt-extra-light">
              {{ __('naša je') }}
            </span>
            <span class="text-uppercase font-weight-bold text-ocean-green">
              {{ __('Motivacija!') }}
            </span>
          </h1>
          <a href="" class="horizontal text-decoration-none btn rounded-0 mt-3 py-3 px-5">
            <span class="text h3 text-uppercase">
              {{ __('Projekti') }}
            </span>
          </a>
        </div> 
      </div>
    </div>
  </header>

  <style>  
  </style>

  <main>
    @yield('main')
  </main>
  
  <footer></footer>

<script>
  /* Open when someone clicks on the span element */
  function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }

  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  /* Preloader */
  $(window).on('load', function() { // makes sure the whole site is loaded  
      $('#preloader').delay(2000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
      $('body').delay(2000).css({'overflow':'visible'});
  })

  // Aos Init
  AOS.init();
</script>

@yield('scripts')
</body>

</html>
