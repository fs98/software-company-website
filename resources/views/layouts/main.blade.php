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

<body class="bg-light"> 

  <!-- Preloader -->
  {{-- <div id="preloader">
    <div class="bg-bottle-green h-100 d-flex justify-content-center align-items-center" id="spinner">
      <div class="centered">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
      </div>
    </div>
  </div> --}}

  <section id="cookiesNotice">
    {{-- Cookie Consent --}}
    @include('cookie-consent::index')
  </section>

  <!-- The Overlay Navbar -->
  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="#" class="{{ Route::currentRouteNamed('public-home') ? "active" : "" }}">
        {{ __('Home') }}
      </a>
      <a href="#">
        {{ __('About Us') }}
      </a>
      <a href="#">
        {{ __('Services') }}
      </a>
      <a href="#">
        {{ __('Contact') }}
      </a>
      <div style="display: inline-block">
        <a href="" class="d-inline active text-uppercase">{{ Config::get('languages')[App::getLocale()]['display'] }}</a> 
        @foreach (Config::get('languages') as $lang => $language) 
            @if ($lang != App::getLocale())
              <span class="lang-separator">|</span>
              <a href="{{ route('lang.switch', $lang) }}" class="d-inline">{{ strtoupper($language['display']) }}</a>
            @endif
        @endforeach  
      </div>
      <div> 
      </div>
    </div>

  </div> 

  <header class="position-relative w-100 overflow-hidden bg-dark custom-border-radius" style="min-height: 80vh"> {{-- style="border-end-end-radius: 40%" --}}
    <div class="loading">
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
    <div class="container mt-0 pt-0" style="position: fixed; left: 50%; -webkit-transform: translateX(-50%); transform: translateX(-50%)">
      <nav class="navbar navbar-dark mt-0 pt-5" id="navbar">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/icons/logo.svg') }}" alt="logo" height="45" width="auto">
        </a>
        <button onclick="openNav()" class="navbar-toggler text-right rounded-0 border-0 mt-0 pt-0 pr-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
          <img src="{{ asset('img/icons/toggler-icon.svg') }}" alt="toggler-icon" height="25" width="auto">
        </button>
      </nav>
    </div>
    <div class="container h-100">
      <div class="d-flex justify-content-center align-items-center" style="margin-top: 25vh">
        <div class="text-honey-dew text-center">
          <h1 class="display-3 text-uppercase font-weight-semi-bold">
            {{ __('your goal')}},
          </h1>
          <h1 class="display-4 mb-0">
            <span class="font-weigt-extra-light">
              {{ __('is our') }}
            </span>
            <span class="text-uppercase font-weight-bold text-ocean-green">
              {{ __('motivation') }}!
            </span>
          </h1>
          <a href="" class="horizontal text-decoration-none btn rounded-0 mt-3 py-3 px-5">
            <span class="text h5 text-uppercase font-weight-semi-bold">
              {{ __('projects') }} 
              <i class="fas fa-chevron-right ml-2"></i>
            </span>
          </a>
        </div> 
      </div>
    </div>
  </header> 

  <main>
    @yield('main') 

    <section>
      <a href="#" id="scrollToTop" class="mr-4 mb-4 bg-dark-jungle-green scroll-to-top-btn rounded" style="display: none; position: fixed; z-index: 4; right: 0; bottom: 0;">
        <i class="fas fa-chevron-up fa-2x p-2 text-honey-dew"></i>
      </a>
    </section>
  </main>
  
  <footer>

    {{-- Contact Section --}}
    <section class="position-relative bg-dark-jungle-green" id="contactSection">
      <div class="container" style="overflow-x: hidden">
        <div class="row">
          <div class="col-12 text-md-left text-center py-5 bg-dark-jungle-green col-lg-6">
          
            <section class="my-5 text-md-left text-center">
              <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
                {{ __('Contact Us')}}
              </h6>
              <h1 class="font-weight-semi-bold text-tea-green h1 mt-3">
                {{ __('Do you have an idea?')}}
              </h1>
              <h4 class="font-weight-extra-light text-honey-dew h4 mt-3">
                {{ __('We are going to help you make it come true!')}}
              </h4> 
      
              <div class="mt-5 d-flex align-items-center">
                <span class="fa-stack fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                  <i class="fa fa-map-marker fa-stack-1x fa-xs text-honey-dew"></i>
                </span>
                <span class="text-honey-dew font-weight-light ml-3">
                  Donje Putićevo 109, 72270 Travnik
                  <br>
                  {{ __('Bosnia and Herzegovina') }}
                </span>
              </div>   
              
              <div class="mt-3 d-flex align-items-center">
                <span class="fa-stack fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                  <i class="fa fa-phone fa-stack-1x fa-xs text-honey-dew"></i>
                </span>
                <span class="text-honey-dew font-weight-light ml-3">
                  +387 30 555 666
                </span>
              </div>
      
              <div class="mt-4 d-flex align-items-center">
                <span class="fa-stack fa-1x">
                  <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                  <i class="fa fa-envelope fa-stack-1x fa-xs text-honey-dew"></i>
                </span>
                <span class="text-honey-dew font-weight-light ml-3">
                  info@katrieldev.com
                </span>
              </div>
            </section> 
            
          </div>
          <div class="col-12 col-lg-6 py-5 bg-honey-dew right-colored-column d-flex justify-content-center justify-content-lg-end align-items-center" style="overflow-y: hidden">
            <span class="right-color-column"></span> 
            <form class="contact-form" style="width: 90%">
              <div class="form-group"> 
                <input type="text" class="form-control rounded-0 bg-transparent py-4 border-top-0 border-right-0 border-left-0" id="name" placeholder="{{ __('Name') }}"> 
              </div>
              <div class="form-group"> 
                <input type="email" class="form-control rounded-0 bg-transparent py-4  border-top-0 border-right-0 border-left-0" id="email" placeholder="Email">
              </div>
              <div class="form-group"> 
                <input type="text" class="form-control rounded-0 bg-transparent py-4  border-top-0 border-right-0 border-left-0" id="phone" placeholder="{{ __('Phone') }}">
              </div>
              <div class="form-group"> 
                <textarea class="form-control rounded-0 bg-transparent py-4  border-top-0 border-right-0 border-left-0" id="exampleFormControlTextarea1" rows="3" placeholder="{{ __('Message') }}" id="poruka"></textarea>
              </div> 
              <h6 class="small mt-4">
                <span>
                  {{ __('Your details will not be shared with any third party.') }}
                </span> 
                <span>
                  <a href="" class="text-ocean-green">
                    {{ __('Privacy Policy') }}
                  </a>
                </span> 
              </h6>
              <button type="submit" class="btn mt-3 rounded-0 bg-dark-jungle-green text-honey-dew text-uppercase px-5 py-3"> 
                <span class="h6 font-weight-semi-bold">
                  {{ __('Send') }}  
                </span> 
                <i class="fas fa-chevron-right ml-3 fa-sm"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section> 

    {{-- Bottom Footer --}}
    <section class="bg-white">
      <div class="container">
        <div class="row py-3">
          <div class="col-12 text-center">
            <a href="" class="text-muted text-decoration-none font-weight-light">
              {{ __('Privacy Policy') }}
            </a>
          </div>
          <div class="col-12 text-center font-weight-normal">
            KatrielDev {{ now()->year }} | {{ __('All Rights Reserved') }}
          </div>
        </div>
      </div>
    </section>

  </footer>

<script>
  /* Open when someone clicks on the span element */
  function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }

  /* Close when someone clicks on the "x" symbol inside the overlay */
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }

  // Scroll To Top Function
  $('#scrollToTop').on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
  });

  // Duplicate code so the offset is checked even when page is refreshed, without scrolling anywhere
  if ($(document).scrollTop() > 300) {
    $('#scrollToTop').show(300)
  } else {
    $('#scrollToTop').hide(300)
  };

  /* Sticky Navbar */
  /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
 

  var previousScrollPosition = $(window).scrollTop();
  $(window).scroll(function() {
    var currentScrollPosition = $(window).scrollTop();
    if (previousScrollPosition > currentScrollPosition) {
      $("#navbar").removeClass("pt-5").addClass("pt-0").css(
      { 
        "background-color" : "rgba(21,28,25,0.5)",
        "top" : "0"
      });
      $("#navbar > a").css("transition", "0.5s").addClass("p-3");
      $("#navbar > button").css("transition", "0.5s").addClass("p-3")
    } else {
      $("#navbar").css({
        "top" : "-100px",
      });
    }
    previousScrollPosition = currentScrollPosition;

    if (currentScrollPosition == 0) {
      $("#navbar").addClass("pt-5").removeClass("pt-0").css(
      { 
        "background-color" : "transparent",
        "top" : "0"
      });
      $("#navbar > a").css("transition", "0.5s").removeClass("p-3");
      $("#navbar > button").css("transition", "0.5s").removeClass("p-3")
    }
    
    if ($(document).scrollTop() > 300) {
      $('#scrollToTop').show(300)
    } else {
      $('#scrollToTop').hide(300)
    };
  }); 

  /* Preloader */
  $(window).on('load', function() { // makes sure the whole site is loaded  
      $('#preloader').delay(2000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
      $('body').delay(2000).css({'overflow':'visible'});
  }) 

  /* Cookie Alert */
  $('#cookieAlert').hover(function(){
    $(this).find('.privacy-policy-link').fadeIn(1000);
  }, function(){
    $(this).find('.privacy-policy-link').fadeOut(1000);
  })

</script>

@yield('scripts')
</body>

</html>
