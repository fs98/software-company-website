@extends('layouts.main')

@section('main')
    
<section class="bg-black py-5">
  <div class="container-fluid">
    <div class="row py-5">

      <div class="col-12 col-lg-2 d-flex flex-column align-items-center justify-content-center">
        <h1 style="" class="text-white display-1 font-weight-bold translate-lg-90-deg mb-5 mb-lg-0">Procesi</h1>
      </div>

      <div class="d-none d-xl-block col-xl-4 ">
        <img src="{{ asset('img/images/mockup-1 (1).png') }}" alt="" class="" height="500">
      </div>
      
      <div class="col-12 col-lg-10 col-xl-4 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
        <h1 class="text-white font-weight-bold mb-5">Proces izrade projekta</h1>
        <div>

          {{-- Step One --}}
          <div class="mb-5" data-aos="zoom-in" data-aos-duration="1000"> 
            <div class="d-flex align-items-center">
              <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="img-fluid" height="30" width="30">  
              <h6 class="text-uppercase text-white font-weight-bold ml-3 my-0">{{ __('Plan i dizajn') }}</h6>
            </div>
            <div class="ml-5 mt-2 text-white">
              {{ __('Važno je unaprijed planirati web aplikaciju kako bi se izbjegla bilo kakva zabuna.') }}
            </div>
          </div>

          {{-- Step Two --}}
          <div class="mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="1000"> 
            <div class="d-flex align-items-center">
              <img src="{{ asset('img/icons/development.svg') }}" alt="" class="img-fluid" height="30" width="30">  
              <h6 class="text-uppercase text-white ml-3 my-0 font-weight-bold">{{ __('Development') }}</h6>
            </div>
            <div class="ml-5 mt-2 text-white">
              {{ __('Koristimo najnovije tehnologije i okvire za izgradnju web i mobilnih aplikacija na visokoj razini. ') }}
            </div>
          </div>

          {{-- Step Three --}}
          <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="2000"> 
            <div class="d-flex align-items-center">
              <img src="{{ asset('img/icons/testing.svg') }}" alt="" class="img-fluid" height="30" width="30">  
              <h6 class="text-uppercase text-white ml-3 my-0 font-weight-bold">{{ __('Testiranje') }}</h6>
            </div>
            <div class="ml-5 mt-2 text-white"> 
              {{ __('Naš je tim zadužen za testiranje projekata sljedeći stroge uloge i postupke.') }}
            </div>
          </div>

        </div> 
      </div>
      <div class="d-none d-xl-block col-lg-2"></div>
    </div>
  </div>
</section>

@endsection