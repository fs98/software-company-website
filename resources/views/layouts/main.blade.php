<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="KatrielDev Website">
  <meta name="author" content="">

  <meta property="og:title" content="Katrieldev | Home" />
  <meta name="twitter:title" content="Katrieldev | Home">
  <meta name="author" content="KatrielDev">
  <meta property="og:site_name" content="Katrieldev" />
  <meta name="description" content="KatrielDev is an IT company which consists of a dedicated team of developers who use their knowledge and skills to turn any idea into a magnificent product.">
  <meta property="og:description" content="KatrielDev is an IT company which consists of a dedicated team of developers who use their knowledge and skills to turn any idea into a magnificent product.">
  <meta name="twitter:description" content="KatrielDev is an IT company which consists of a dedicated team of developers who use their knowledge and skills to turn any idea into a magnificent product.">
  <meta name="keywords" content="online shop, ecommerce, online sales, shop, 3D configurator, online 3D modeller,  product placement, real time shop preview, assistive technology">
  <meta name="robots" content="index, follow">
  <meta property="og:image" content="{{ asset('img/logo-share.png') }}" />
  <meta name="twitter:image" content="{{ asset('img/logo-share.png') }}" />

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script> 

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
  <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">

  @yield('links')

</head>

<body class="bg-light"> 

  {{-- <!-- Preloader -->
  <div id="preloader">
    <div class="bg-bottle-green h-100 d-flex justify-content-center align-items-center" id="spinner">
      <div class="centered">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
      </div>
    </div>
  </div> --}}

  <section id="cookiesNotice">
    {{-- Cookie Consent --}}

  </section>

  <header>
      <!-- The Overlay Navbar -->
      <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content">
          @if (Route::has('public.home'))
            <a href="{{ route('public.home') }}" class="{{ Route::currentRouteNamed('public.home') ? "active" : "" }}">
              {{ __('Home') }}
            </a>
          @endif 
          @if (Route::has('public.about-us'))
            <a href="{{ route('public.about-us') }}" class="{{ Route::currentRouteNamed('public.about-us') ? "active" : "" }}">
              {{ __('About Us') }}
            </a>
          @endif 
          @if (Route::has('public.portfolio'))
            <a href="{{ route('public.portfolio') }}" class="{{ Route::currentRouteNamed('public.portfolio') ? "active" : "" }}">
              {{ __('Portfolio') }}
            </a> 
          @endif 
          <div style="display: inline-block">
            <a href="{{ route('public.home') }}" class="d-inline active text-uppercase">{{ Config::get('languages')[App::getLocale()]['display'] }}</a> 
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
  </header> 

  <main>
    @yield('main') 
    @include('sweetalert::alert')

    <section>
      <a href="#" id="scrollToTop" class="mr-4 mb-4 bg-dark-jungle-green scroll-to-top-btn rounded-0" style="display: none; position: fixed; z-index: 4; right: 0; bottom: 0;">
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
      
              <div class="d-flex flex-column align-items-center align-items-md-start">
                <div>
                  <div class="mt-5 d-flex align-items-center justify-content-start">
                    <span class="fa-stack fa-1x">
                      <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-xs text-honey-dew"></i>
                    </span>
                    <span class="text-honey-dew text-left font-weight-light ml-3">
                      Fake Street
                      <br>
                      12345 Imaginary City
                      <br>
                      {{ __('Utopia') }}
                    </span>
                  </div>   
                  
                  <div class="mt-3 d-flex align-items-center justify-content-start">
                    <span class="fa-stack fa-1x">
                      <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                      <i class="fa fa-phone fa-stack-1x fa-xs text-honey-dew"></i>
                    </span>
                    <span class="text-honey-dew font-weight-light ml-3">
                      +000 12 345 6789
                    </span>
                  </div>
          
                  <div class="mt-4 d-flex align-items-center justify-content-start">
                    <span class="fa-stack fa-1x">
                      <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-xs text-honey-dew"></i>
                    </span>
                    <span class="text-honey-dew font-weight-light ml-3">
                      info@yourcompany.com
                    </span>
                  </div>
                </div>
              </div>
              
            </section> 
            
          </div>
          <div class="col-12 col-lg-6 py-5 bg-honey-dew right-colored-column d-flex justify-content-center justify-content-lg-end align-items-center" style="overflow-y: hidden">
            <form class="contact-form" style="width: 90%" method="POST" action="{{ route('questions.store') }}">
              @csrf 
              <div class="form-group"> 
                <input type="text" class="form-control rounded-0 bg-transparent py-4 border-top-0 border-right-0 border-left-0 @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name" placeholder="{{ __('Name') }}"> 
              
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group"> 
                <input type="email" class="form-control rounded-0 bg-transparent py-4 border-top-0 border-right-0 border-left-0 @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group"> 
                <input type="text" class="form-control rounded-0 bg-transparent py-4 border-top-0 border-right-0 border-left-0 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" name="phone" placeholder="{{ __('Phone') }}">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group"> 
                <textarea class="form-control rounded-0 bg-transparent py-4  border-top-0 border-right-0 border-left-0 @error('question') is-invalid @enderror" id="question" name="question" rows="3" placeholder="{{ __('Message') }}">{{ old('question') }}</textarea>

                @error('question')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> 
              <h6 class="small mt-4">
                <span>
                  {{ __('Your details will not be shared with any third party.') }}
                </span> 
                <span>
                  <a href="{{ route('public.privacy-policy') }}" class="text-ocean-green">
                    {{ __('Privacy Policy') }}
                  </a>
                </span> 
              </h6>
              <div class="form-group mb-0 text-center text-md-left">
                <button type="submit" class="btn mt-3 rounded-0 bg-dark-jungle-green text-honey-dew text-uppercase px-5 py-3"> 
                  <span class="h6 font-weight-semi-bold">
                    {{ __('Send') }}  
                  </span> 
                  <i class="fas fa-chevron-right ml-3 fa-sm"></i>
                </button>
              </div>
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
            <a href="{{ route('public.privacy-policy') }}" class="text-muted text-decoration-none font-weight-light">
              {{ __('Privacy Policy') }}
            </a>
          </div>
          <div class="col-12 text-center font-weight-normal">
            Name of Your Company {{ now()->year }} | {{ __('All rights reserved') }}
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
    $('#scrollToTop').fadeIn()
  } else {
    $('#scrollToTop').fadeOut()
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
      $('#scrollToTop').fadeIn(500)
    } else {
      $('#scrollToTop').fadeOut(500)
    };
  }); 

  /* Preloader */
  $(window).on('load', function() { // makes sure the whole site is loaded  
      $('#preloader').delay(2000).fadeOut('slow'); // will fade out the white DIV that covers the website. 
      $('body').delay(2000).css({'overflow':'visible'});
  }) 

  // /* Cookie Alert */
  // $('#cookieAlert').hover(function(){
  //   $(this).find('.privacy-policy-link').fadeIn(1000);
  // }, function(){
  //   $(this).find('.privacy-policy-link').fadeOut(1000);
  // })

</script> 

@yield('scripts')
</body>

</html>
