@extends('layouts.main')

@section('main')
    
<section id="cardsSection" class="my-4">
  <div class="container py-4">
    <div class="row py-4">
      <div class="col-12 col-lg-4">
        <div class="card p-5 bg-ocean-green" style="border-radius: 35% 44% 30% 70% / 30% 22% 30% 30% ">
          <div class="card-body">
            {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}
            <h2 class="card-title mt-3 text-honey-dew font-weight-semi-bold text-uppercase">Plan i dizajn</h2> 
            <p class="card-text h6 text-bottle-green">Važno je unaprijed planirati web aplikaciju
              kako bi se izbjegla bilo kakva zabuna.</p> 
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card p-5 bg-ocean-green" style="border-radius: 35% 44% 30% 70% / 30% 22% 30% 30% ">
          <div class="card-body">
            {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}
            <h2 class="card-title mt-3 text-honey-dew font-weight-semi-bold text-uppercase">Development</h2> 
            <p class="card-text h6 text-bottle-green">Koristimo najnovije tehnologije i okvire
              za izgradnju web i mobilnih aplikacija na visokoj razini. </p> 
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="card p-5 bg-ocean-green" style="border-radius: 35% 44% 30% 70% / 30% 22% 30% 30% ">
          <div class="card-body">
            {{-- <img src="{{ asset('img/icons/plan-and-design.svg') }}" alt="" class="text-center"> --}}
            <h2 class="card-title mt-3 text-honey-dew font-weight-semi-bold text-uppercase">Testiranje</h2> 
            <p class="card-text h6 text-bottle-green">Naš je tim zadužen za testiranje projekata
              slijedeći stroge uloge i postupke.</p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-dark-jungle-green py-5 custom-border-top-radius" style="height: 400px">
  
</section>

@endsection