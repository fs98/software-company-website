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
  <script src="{{ asset('js/app.js') }}" defer></script> 

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
  <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">

  @yield('links')

</head>

<body>

  <header class="min-vh-100 position-relative w-100 overflow-hidden bg-black">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" class="min-h-100 min-w-100 w-auto h-auto">
      <source src="{{ asset('img/videos/header-video.mp4' )}}" type="video/mp4"> 
    </video>
    <div class="container h-100 position-relative">
      <nav class="navbar navbar-dark py-5">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img/icons/logo.svg') }}" alt="logo" height="55" width="auto">
        </a>
        <button class="navbar-toggler text-right border-0 pr-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="{{ asset('img/icons/toggler-icon.svg') }}" alt="toggler-icon" height="35" width="auto">
        </button>
      </nav>
      <div class="d-flex justify-content-between align-items-center" style="margin-top: 25vh">
        <div class="text-white">
          <h1 class="display-1 text-uppercase font-weight-bold">
            {{ __('Vaš cilj')}}
          </h1>
          <h1 class="display-4 mb-0 bg-purple py-3 pr-5 pl-4 font-weight-bold">
            {{ __('... naša je motivacija') }}
          </h1>
        </div>
        <div class="ml-3">
          <img src="{{ asset('img/icons/line.svg') }}" alt="line" width="350">
        </div>
      </div>
    </div>
  </header>

{{-- 
  <header>
    <div class="fixed-top text-center">
      <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h5 class="text-white h4">Collapsed content</h5>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div>
      <div class="container">
        <nav class="navbar navbar-light">
          <a class="navbar-brand" href="#">Hidden brand</a>
          <button class="navbar-toggler text-right" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </nav>
      </div>
    </div>  
      <div class="video-container bg-danger" style="position: absolute; overflow: hidden; min-width: 100%; top: 0; left: 0">
        <video autoplay loop muted id="video-bg" class="w-100">
          
          <source src="http://bigcom.com/assets/2014/08/iChooseB.mp4" type="video/mp4">
  
        </video>
      </div>
    
  </header> --}}

  <main>
    @yield('main')
  </main>
  
  <footer class="position-relative" style="background-image: url('https://hireukrainiandevelopers.com/wp-content/uploads/2019/09/ebq6umm-min-1.jpg.webp'); background-size: cover; background-repeat: no-repeat; ">
    <section style="background-color: rgba(0, 0, 0, 0.95)">
      <div class="container py-5 h-100">

        {{-- Top Footer Row --}}
        <div class="row pt-5 mt-5 h-100">
  
          {{-- Left Side of Footer --}}
          <div class="col-12 col-lg-6 d-flex flex-column align-items-start justify-content-between">
              <img src="{{ asset('img/icons/logo.svg') }}" alt="logo" height="100" width="auto" class="mb-3">
  
              <h1 class="text-white font-weight-bold line-height-1-5 mb-5 mt-3">
                {{ __('Vaš uspjeh je') }} 
                <br class="d-none d-lg-block">
                {{ __('naša motivacija.') }}
              </h1>
  
              <div>
                <div class="mb-3">
                  <a href="" class="text-purple text-decoration-none purple-link mb-3">  
                    <div class="row">
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-map-marker-alt fa-stack-1x fa-inverse"></i>
                      </span> 
                      <span class="text-white d-flex align-items-center ml-3"> 
                        Donje Putićevo 109, 72270 Travnik
                        <br>
                        Bosna i Hercegovina
                      </span>
                    </div>
                  </a>
                </div>
                <div class="mb-3"> 
                  <a href="" class="text-purple text-decoration-none purple-link mt-3">  
                    <div class="row">
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                      </span> 
                      <span class="text-white d-flex align-items-center ml-3"> 
                        +387 30 555 666 
                      </span>
                    </div> 
                  </a>
                </div>
                <div>  
                  <a href="mailto:info@katrieldev.com" class="text-purple text-decoration-none purple-link mt-3">  
                    <div class="row">
                      <span class="fa-stack fa-2x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-envelope fa-stack-1x fa-inverse"></i>
                      </span>
                      <span class="text-white d-flex align-items-center ml-3"> 
                        info@katrieldev.com 
                      </span>
                    </div> 
                  </a>
                </div>
              </div> 
          </div>    
  
          {{-- Right Side of Footer --}}
          <div class="col-12 col-lg-6 d-flex justify-content-start justify-content-lg-end align-items-center mt-5 mt-lg-0">
            <form action=""> 
              <div class="form-group">
                <input type="text" class="form-control bg-transparent border-top-0 border-right-0 border-left-0 rounded-0 border-white border-weight-2 footer-input mb-4" id="name" placeholder="{{ __('Ime') }}">
              </div>  
              <div class="form-group">
                <input type="email" class="form-control bg-transparent border-top-0 border-right-0 border-left-0 rounded-0 border-white border-weight-2 footer-input mb-4" id="email" placeholder="{{ __('Email') }}">
              </div>
              <div class="form-group">
                <input type="text" class="form-control bg-transparent border-top-0 border-right-0 border-left-0 rounded-0 border-white border-weight-2 footer-input mb-4" id="phone" placeholder="{{ __('Telefon') }}">
              </div>
              <div class="form-group">
                <textarea class="form-control bg-transparent border-top-0 border-right-0 border-left-0 rounded-0 border-white border-weight-2 footer-input" id="message" rows="4" placeholder="{{ __('Poruka') }}"></textarea>
                <small id="formDesription" class="form-text text-white mt-4">
                  {{ __('Your details will not be shared with any third party..') }}
                  <a href="#">
                    {{ __('Privacy Policy') }}  
                  </a></small>
              </div>
              <button class="btn bg-purple text-white btn-block mt-4 font-size-16 font-weight-bold py-2 rounded-0">
                {{ __('Pošalji') }} 
              </button> 
            </form>
          </div>
       
        </div>
      
      </div>
    </section>

    <section style="background-color: rgba(0, 0, 0, 0.95)" class="pt-5 pt-lg-0">
      <div class="container pb-5">
        <div class="row">
          <div class="col-12 text-center">
            <a href="" class="text-white h4 mr-5">
              <i class="fab fa-facebook-f fa-2x"></i>
            </a>
            <a href="" class="text-white h4 mr-5">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="" class="text-white h4 mr-5">
              <i class="fab fa-twitter fa-2x"></i>
            </a>
            <a href="" class="text-white h4">
              <i class="fab fa-linkedin-in fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-purple text-white" style="opacity: 95%;">
      <div class="container bg-purple py-3">
        <div class="row">
          <div class="col-12 text-center">
            Copyright &copy; by KatrielDev {{ now()->year }}
          </div>
        </div>
      </div>
    </section>
    
  </footer>

@yield('scripts')
</body>

</html>
