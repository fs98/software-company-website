@extends('layouts.main')

@section('main')
    
<section class="bg-black position-relative py-5">
  <h1 style="position: absolute; z-index: 1; transform: rotate(-90deg); left: 0; top: 50%" class="text-white display-1 font-weight-bold">Procesi</h1>
  <div class="container">
    <div class="row py-5">
      <div class="col-12 col-md-6">
        <img src="{{  asset('img/images/mockup-1.svg') }}" alt="" class="img-fluid">
      </div>
      <div class="col-12 col-md-6">
        <h1 class="text-white font-weight-bold mb-5">Proces izrade projekta</h1>
        <div>

          {{-- Step One --}}
          <div class="mb-5"> 
            <div class="d-flex align-items-center">
              <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="img-fluid" height="30" width="30">  
              <h6 class="text-uppercase text-white font-weight-bold ml-3 my-0">{{ __('Plan i dizajn') }}</h6>
            </div>
            <div class="ml-5 mt-2 text-white">
              {{ __('Važno je unaprijed planirati web aplikaciju kako bi se izbjegla bilo kakva zabuna.') }}
            </div>
          </div>

          {{-- Step Two --}}
          <div class="mb-5"> 
            <div class="d-flex align-items-center">
              <img src="{{ asset('img/icons/development.svg') }}" alt="" class="img-fluid" height="30" width="30">  
              <h6 class="text-uppercase text-white ml-3 my-0 font-weight-bold">{{ __('Development') }}</h6>
            </div>
            <div class="ml-5 mt-2 text-white">
              {{ __('Koristimo najnovije tehnologije i okvire za izgradnju web i mobilnih aplikacija na visokoj razini. ') }}
            </div>
          </div>

          {{-- Step Three --}}
          <div> 
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
    </div>
  </div>
</section>

@endsection