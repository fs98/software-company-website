@extends('layouts.main')

@section('main')

{{-- Cards Section --}}

<section id="cardsSection" class="position-relative d-none" style="min-height: 20vh">
  <div class="container py-5">
    <div class="row py-4">
      <div class="col-12 col-lg-4">
        <div class="card rounded-0 border-0 shadow" style="height: 18rem; z-index: 4" data-aos="fade-in" data-aos-duration="1000">
          <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
            <div style="position: absolute; left: 0; top: 0; border-bottom-right-radius: 50%" class="bg-honey-dew py-3 px-4">
              <i class="fas fa-magic fa-lg text-ocean-green"></i> 
            </div>
            {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}  
            <h1 class="card-title text-dark-jungle-green font-weight-bold text-uppercase mt-3">Plan i dizajn</h1> 
            <p class="card-text h5 text-muted font-weight-light">Važno je unaprijed planirati web aplikaciju
              kako bi se izbjegla bilo kakva zabuna.</p> 
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 mt-5 mt-lg-0">
        <div class="card rounded-0 border-0 shadow" style="height: 18rem" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="1000">
          <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
            <div style="position: absolute; left: 0; top: 0; border-bottom-right-radius: 50%" class="bg-honey-dew py-3 px-4">
              <i class="fas fa-code fa-lg text-ocean-green"></i> 
            </div>
            {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}  
            <h1 class="card-title text-dark-jungle-green font-weight-bold text-uppercase mt-3">Development</h1> 
            <p class="card-text h5 text-muted font-weight-light">Koristimo najnovije tehnologije i okvire
              za izgradnju web i mobilnih aplikacija na visokoj razini.</p> 
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4 mt-5 mt-lg-0">
        <div class="card rounded-0 border-0 shadow" style="height: 18rem" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="2000">
          <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
            <div style="position: absolute; left: 0; top: 0; border-bottom-right-radius: 50%" class="bg-honey-dew py-3 px-4">
              <i class="fas fa-check-circle fa-lg text-ocean-green"></i> 
            </div>
            {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}  
            <h1 class="card-title text-dark-jungle-green font-weight-bold text-uppercase mt-3">Testiranje</h1> 
            <p class="card-text h5 text-muted font-weight-light">Naš je tim zadužen za testiranje projekata
              slijedeći stroge uloge i postupke.</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- End of Cards Section --}}

{{-- Slider Section --}}

<section class="py-5 bg-honey-dew" id="sliderSection">
  <!-- Swiper -->
  <div class="swiper-container mySwiper" class="bg-ocean-green">
    <div class="swiper-wrapper">
      <div class="swiper-slide bg-transparent">
        <a href="" class="w-auto">
          <img src="{{ asset('img/clients/bluestars-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div>
      <div class="swiper-slide bg-transparent">
        <a href="">
          <img src="{{ asset('img/clients/imrex-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div>
      <div class="swiper-slide bg-transparent">
        <a href="">
          <img src="{{ asset('img/clients/limotesla-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div>
      <div class="swiper-slide bg-transparent">
        <a href="" class="w-auto">
          <img src="{{ asset('img/clients/bluestars-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div>
      <div class="swiper-slide bg-transparent">
        <a href="">
          <img src="{{ asset('img/clients/imrex-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div>
      <div class="swiper-slide bg-transparent">
        <a href="">
          <img src="{{ asset('img/clients/limotesla-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div> 
  </div>
</section>
 
   
{{-- Next section --}}

<section class="my-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up">
        <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
          {{ __('Naše usluge')}}
        </h6>
        <h2 class="font-weight-semi-bold text-dark-jungle-green h2 mt-3">
          {{ __('Specijalizirali smo u')}}
        </h2>
      </div>
    </div>
  </div>
</section>


@endsection