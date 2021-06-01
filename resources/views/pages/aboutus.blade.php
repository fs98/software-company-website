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
    <section id="imageSection" class="position-relative d-flex justify-content-center align-items-end" style="min-height: 35vh">
    </section>

    {{-- What Makes Us Special Section --}}
    <section id="whatMakesUsSpecial" class="position-relative">

      <div class="container py-5 d-flex flex-column justify-content-center">
        <div class="row py-4">
          <div class="col-12 text-center" data-aos="fade-up">
            <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
              {{ __('Unique')}}
            </h6>
            <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
              {{ __('What makes us special?')}}
            </h1>
          </div>
        </div>
        <div class="row py-5 align-items-center">
          <div class="col-12 col-lg-4 mt-5 mt-lg-0">
            <div class="card rounded-0 border-0 shadow-sm" style="height: 14rem" data-aos="fade-up">
              <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
                <div style="position: absolute; left: 0; top: 0; border-bottom-right-radius: 50%" class="bg-honey-dew py-3 px-4">
                  <i class="fas fa-trophy fa-lg text-ocean-green"></i> 
                </div>
                {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}  
                <h2 class="card-title text-dark-jungle-green font-weight-bold text-uppercase mt-3">{{ __('Quality') }}</h2> 
                <p class="card-text text-muted font-weight-light">{{ __('Quality competes with our other goals and we understand what it means to you.') }}</p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mt-5 mt-lg-0">
            <div class="card rounded-0 border-0 shadow-sm" style="height: 14rem" data-aos="fade-up">
              <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
                <div style="position: absolute; left: 0; top: 0; border-bottom-right-radius: 50%" class="bg-honey-dew py-3 px-4">
                  <i class="fas fa-hand-sparkles fa-lg text-ocean-green"></i> 
                </div>
                {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}  
                <h2 class="card-title text-dark-jungle-green font-weight-bold text-uppercase mt-3">{{ __('Creativity') }}</h2> 
                <p class="card-text text-muted font-weight-light">{{ __('Feel like you lack imagination? We like to create things with fun.') }}</p> 
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 mt-5 mt-lg-0">
            <div class="card rounded-0 border-0 shadow-sm" style="height: 14rem" data-aos="fade-up">
              <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
                <div style="position: absolute; left: 0; top: 0; border-bottom-right-radius: 50%" class="bg-honey-dew py-3 px-4">
                  <i class="fas fa-question fa-lg text-ocean-green"></i> 
                </div>
                {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}  
                <h2 class="card-title text-dark-jungle-green font-weight-bold text-uppercase mt-3 text-break">{{ __('Support') }}</h2> 
                <p class="card-text text-muted font-weight-light">{{ __('We are always there for our customers so they know they can count on us.') }}</p> 
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


    {{-- A Little bit about Us Container --}}
    <section id="aboutUs" class="position-relative">

      <div class="container py-5">
        <div class="row py-4">
          <div class="col-12 text-center" data-aos="fade-up">
            <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
              {{ __('Why us?')}}
            </h6>
            <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
              {{ __('A little bit about our company')}}
            </h1>
          </div>
        </div>
        <div class="row py-4 align-items-center">
          <div class="col-12" data-aos="fade-up"> 
            <p class="lead">{{ __('KatrielDev became part of the Katriel Group in 2013. Our company consists of a dedicated team of developers who use their knowledge and skills to turn any idea into a product. The products we offer you aim to improve the relationship between you and the end customer.') }}
            </p>
            <p class="lead">  
              {{ __('For this exact reason, KatrielDev goes through all the stages of development for a software solution, along with you. Thanks to the dedicated work of our team, we guarantee a high level of excellence in quality, and the support we give to our clients is extremely crucial for the longevity of the high quality quota we deliver. In today\'s extremely competitive market, KatrielDev has successfully distinguished itself as a reliable partner to companies from various business branches, and KatrielDev strives for constant perfection.') }}</p>
          </div>
        </div>
      </div>

    </section>

@endsection 