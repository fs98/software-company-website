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

<body class="overflow-hidden"> 

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
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div>

  </div> 

  <header class="min-vh-100 position-relative w-100 overflow-hidden bg-dark"> {{-- style="border-end-end-radius: 40%" --}}
    <div class="overlay" class="bg-white"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="min-h-100 min-w-100 w-auto h-auto" >
      <source src="https://player.vimeo.com/external/553362038.sd.mp4?s=7102361a0156a3689b83848a7cce9044180a335b&profile_id=164&oauth2_token_id=57447761" type="video/mp4"> 
    </video>
    <div class="container h-100 position-relative">
      <nav class="navbar navbar-dark py-5">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/icons/logo.svg') }}" alt="logo" height="45" width="auto">
        </a>
        <button class="navbar-toggler text-right border-0 pr-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
          <img src="{{ asset('img/icons/toggler-icon.svg') }}" alt="toggler-icon" height="25" width="auto">
        </button>
      </nav>
      <div class="d-flex justify-content-start align-items-center" style="margin-top: 25vh">
        <div class="text-honey-dew">
          <h1 class="display-1 text-uppercase font-weight-semi-bold">
            {{ __('Hello,')}}
          </h1>
          <h1 class="display-3 mb-0">
            <span class="font-weigt-extra-light">{{ __('We are') }}</span>
            <span class="text-uppercase font-weight-bold text-ocean-green">Katriel Dev</span>
          </h1>
          <a href="" class="btn btn-outline-honey-dew rounded-0 py-3 px-5 mt-4">
            <span class="noselect h3 text-uppercase font-weight-light">
              {{ __('Contact Us') }}
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
