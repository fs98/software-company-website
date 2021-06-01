@extends('layouts.main')

@section('main')

    {{-- Navbar Section --}}

    <section id="heroDiv" class="position-relative w-100 overflow-hidden bg-dark custom-border-radius"> {{-- style="border-end-end-radius: 40%" --}}
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
    </section>

    {{-- Image Section --}}
    <section id="imageSection" class="position-relative d-flex justify-content-center align-items-end" style="min-height: 15vh">
    </section>

    {{-- Portfolio Slider --}}
    <section id="portfolioSection" class="position-relative">
      <div class="container">
        <div class="row py-4">
          <div class="col-12 py-5 text-center" data-aos="fade-up">
            <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
              {{ __('Portfolio')}}
            </h6>
            <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
              {{ __('Throughout our history, we had the pleasure of cooperating with various clients from different areas of interest.')}}
            </h1>
          </div>
        </div>
        <div class="row pb-4">
          <div class="col-12 pb-5" style="min-height: 20vh">
            <!-- Swiper -->
            <div class="swiper-container porfolio-swiper portfolio-swiper-container">
              <div class="swiper-wrapper portfolio-swiper-wrapper">

                <div class="swiper-slide portfolio-swiper-slide position-relative">
                  <a href="https://sucasa.ba/" class="h-100 w-100 text-decoration-none" target="_blank">
                    <img src="{{ asset('img/projects/sucasa.png') }}" alt="">
                  </a>
                </div> 

                <div class="swiper-slide portfolio-swiper-slide position-relative">
                  <a href="https://limo-tesla.com/" class="h-100 w-100 text-decoration-none" target="_blank">
                    <img src="{{ asset('img/projects/limotesla.png') }}" alt="">
                  </a>
                </div>

                <div class="swiper-slide portfolio-swiper-slide position-relative">
                  <a href="https://bluestars.ch/" class="h-100 w-100 text-decoration-none" target="_blank">
                    <img src="{{ asset('img/projects/blue-stars.png') }}" alt="">
                  </a>
                </div> 

                <div class="swiper-slide portfolio-swiper-slide position-relative">
                  <a href="https://villarevelin.com/" class="h-100 w-100 text-decoration-none" target="_blank">
                    <img src="{{ asset('img/projects/villa-revelin.png') }}" alt="">
                  </a>
                </div>  

                <div class="swiper-slide portfolio-swiper-slide position-relative">
                  <a href="https://scu-bih.ba/" class="h-100 w-100 text-decoration-none" target="_blank">
                    <img src="{{ asset('img/projects/scu.png') }}" alt="">
                  </a>
                </div> 

                <div class="swiper-slide portfolio-swiper-slide position-relative">
                  <a href="https://www.bosnjak-commerce.com/" class="h-100 w-100 text-decoration-none" target="_blank">
                    <img src="{{ asset('img/projects/bosnjak-commerce.png') }}" alt="">
                  </a>
                </div> 

              </div>
            </div> 
          </div>
          <div class="col-12 bg-danger text-center mb-5 position-relative">
            <div class="swiper-button-next" style="bottom: 0; top: unset; right: 50%; margin-right: -20px;"></div>
            <div class="swiper-button-prev" style="bottom: 0; top: unset; left: unset; right: 50%; margin-right: 20px"></div>
          </div>
        </div>
      </div>
    </section>


@endsection

@section('scripts') 