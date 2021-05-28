@extends('layouts.main')

@section('main')

{{-- Cards Section --}}

<section id="cardsSection" class="position-relative d-none" style="min-height: 20vh">
  <div class="container py-5">
    <div class="row py-4">
      <div class="col-12 col-lg-4">
        <div class="card rounded-0 border-0 shadow" style="height: 18rem; z-index: 4" data-aos="fade-in">
          <div class="card-body position-relative text-center d-flex flex-column justify-content-center">
            <div style="position: absolute; left: 0; top: 0; border-bottom-right-radius: 50%" class="bg-honey-dew py-3 px-4">
              {{-- <i class="fas fa-magic fa-lg text-ocean-green"></i>  --}}
              <img src="{{ asset('img/icons/gif/1388-page-view-quilt-outline.gif') }}" alt="">
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
          <img src="{{ asset('img/clients/repromaterijal-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div>
      <div class="swiper-slide bg-transparent">
        <a href="">
          <img src="{{ asset('img/clients/limotesla-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div>
      <div class="swiper-slide bg-transparent">
        <a href="" class="w-auto">
          <img src="{{ asset('img/clients/bosnjak-commerce-logo-white.png')}}" alt="client-logo" height="100" width="100">
        </a>
      </div> 
  </div>
</section>
 
   
{{-- Services Section --}}

<section class="py-5 position-relative" id="servicesSection">
  <div class="container my-5">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up">
        <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
          {{ __('Naše usluge')}}
        </h6>
        <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
          {{ __('Specijalizirali smo')}}
        </h1>
      </div>
    </div>
    <div class="row mt-5 mb-5">
      <div class="col-12 col-md-6 col-lg-4 mt-5" data-aos="fade-up">
        <div class="card p-3 rounded-0 border-0 shadow-sm services-card" style="min-height: 22rem">
          <div class="card-body d-flex justify-content-center align-items-start position-relative">
            <div class="my-3 text-center">
              {{-- <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                <i class="fa fa-magic fa-stack-1x fa-xs text-honey-dew"></i>
              </span> --}}
              <img src="{{ asset('img/icons/gif/1388-page-view-quilt-outline.gif') }}" alt="">
              <h3 class="card-title font-weight-bold text-uppercase mt-4">Web dizajn</h3> 
              <p class="card-text text-muted h6 px-4">
                Katrieldev tim web stranicu vaše tvrtke će pretvoriti u online izlog. 
              </p>
            </div>
            <a href="#" class="btn float-right rounded-0 bg-ocean-green border-0 py-3 d-none services-button" style="position: absolute; bottom: 0; margin-bottom: -35px; width: 55%">
              <span class="h5 font-weight-normal text-uppercase text-honey-dew">
                Više <i class="fas fa-chevron-right ml-3 fa-sm"></i>
              </span>
            </a>
          </div>
        </div>
      </div> 
      <div class="col-12 col-md-6 col-lg-4 mt-5" data-aos="fade-up">
        <div class="card p-3 rounded-0 border-0 shadow-sm services-card" style="min-height: 22rem">
          <div class="card-body d-flex justify-content-center align-items-start position-relative">
            <div class="my-3 text-center">
              {{-- <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                <i class="fa fa-magic fa-stack-1x fa-xs text-honey-dew"></i>
              </span> --}}
              <img src="{{ asset('img/icons/gif/1331-repository-outline.gif') }}" alt="">
              <h3 class="card-title font-weight-bold text-uppercase mt-4">Web development</h3> 
              <p class="card-text text-muted h6 px-4">
                Razvijanjem web stranica i aplikacija mi pomažemo klijentima da svijetu ispričaju svoju priču. 
              </p>
            </div>
            <a href="#" class="btn float-right rounded-0 bg-ocean-green border-0 d-none services-button py-3" style="position: absolute; bottom: 0; margin-bottom: -35px; width: 55%">
              <span class="h5 font-weight-normal text-uppercase text-honey-dew">
                Više <i class="fas fa-chevron-right ml-3 fa-sm"></i>
              </span>
            </a>
          </div>
        </div>
      </div> 
      <div class="col-12 col-md-6 col-lg-4 mt-5" data-aos="fade-up">
        <div class="card p-3 rounded-0 border-0 shadow-sm services-card" style="min-height: 22rem">
          <div class="card-body d-flex justify-content-center align-items-start position-relative">
            <div class="my-3 text-center">
              {{-- <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                <i class="fa fa-magic fa-stack-1x fa-xs text-honey-dew"></i>
              </span> --}}
              <img src="{{ asset('img/icons/gif/981-consultation-outline.gif') }}" alt="">
              <h3 class="card-title font-weight-bold text-uppercase mt-4">Start Up</h3> 
              <p class="card-text text-muted h6 px-4">
                Fokusirajte se na rast Vašeg poslovanja - za ostalo se brinemo mi. 
              </p>
            </div>
            <a href="#" class="btn float-right rounded-0 bg-ocean-green border-0 d-none services-button py-3" style="position: absolute; bottom: 0; margin-bottom: -35px; width: 55%">
              <span class="h5 font-weight-normal text-uppercase text-honey-dew">
                Više <i class="fas fa-chevron-right ml-3 fa-sm"></i>
              </span>
            </a>
          </div>
        </div>
      </div> 
      <div class="col-12 col-md-6 col-lg-4 mt-5" data-aos="fade-up">
        <div class="card p-3 rounded-0 border-0 shadow-sm services-card" style="min-height: 22rem">
          <div class="card-body d-flex justify-content-center align-items-start position-relative">
            <div class="my-3 text-center">
              {{-- <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                <i class="fa fa-mobile fa-stack-1x fa-xs text-honey-dew"></i>
              </span> --}}
              <img src="{{ asset('img/icons/gif/1326-command-window-line-outline.gif') }}" alt="">
              <h3 class="card-title font-weight-bold text-uppercase mt-4">
                Izrada mobilnih aplikacija
              </h3> 
              <p class="card-text text-muted h6 px-4">
                Naš tim će napraviti savršenu mobilnu aplikaciju koja će probiti granice vašeg trenutnog posla.
              </p>
            </div>
            <a href="#" class="btn float-right rounded-0 bg-ocean-green border-0 d-none services-button py-3" style="position: absolute; bottom: 0; margin-bottom: -35px; width: 55%">
              <span class="h5 font-weight-normal text-uppercase text-honey-dew">
                Više <i class="fas fa-chevron-right ml-2 fa-sm"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-5" data-aos="fade-up">
        <div class="card p-3 rounded-0 border-0 shadow-sm services-card" style="min-height: 22rem">
          <div class="card-body d-flex justify-content-center align-items-start position-relative">
            <div class="my-3 text-center">
              {{-- <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                <i class="fa fa-cubes fa-stack-1x fa-xs text-honey-dew"></i>
              </span>   --}}
              <img src="{{ asset('img/icons/gif/1378-3-d-outline.gif') }}" alt="">
              <h3 class="card-title font-weight-bold text-uppercase mt-4">3D Konfigurator</h3> 
              <p class="card-text text-muted h6 px-4">
                3D konfigurator pomaže vašim kupcima da kreiraju prilagođene proizvode u skladu sa njihovim željama i ukusom.
              </p>
            </div>
            <a href="#" class="btn float-right rounded-0 bg-ocean-green border-0 d-none services-button py-3" style="position: absolute; bottom: 0; margin-bottom: -35px; width: 55%">
              <span class="h5 font-weight-normal text-uppercase text-honey-dew">
                Više <i class="fas fa-chevron-right ml-3 fa-sm"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-5" data-aos="fade-up">
        <div class="card p-3 rounded-0 border-0 shadow-sm services-card" style="min-height: 22rem">
          <div class="card-body d-flex justify-content-center align-items-start position-relative">
            <div class="my-3 text-center">
              {{-- <span class="fa-stack fa-3x">
                <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
                <i class="fa fa-shopping-cart fa-stack-1x fa-xs text-honey-dew"></i>
              </span> --}}
              <img src="{{ asset('img/icons/gif/139-basket-outline.gif') }}" alt="">
              <h3 class="card-title font-weight-bold text-uppercase mt-4">Web shop</h3> 
              <p class="card-text text-muted h6 px-4">
                Izbrišite granice i vrata svoje trgovine otvorite cijelom svijetu.
              </p>
            </div>
            <a href="#" class="btn float-right rounded-0 bg-ocean-green border-0 d-none services-button py-3" style="position: absolute; bottom: 0; margin-bottom: -35px; width: 55%">
              <span class="h5 font-weight-normal text-uppercase text-honey-dew">
                Više <i class="fas fa-chevron-right ml-3 fa-sm"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Technologies Section --}}
 
<section class="bg-white">
  <div class="container py-5">
    <div class="row my-5">
      <div class="col-12 text-center" data-aos="fade-up">
        <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
          {{ __('Tehnologije')}}
        </h6>
        <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
          {{ __('Naše usluge')}}
        </h1>
      </div>
    </div>

    <div class="row pt-5 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 row-cols-xl-7 technologies-row" data-aos="fade-up">
      <div class="col text-center pb-5">
        <img src="{{ asset('img/icons/Java-Logo.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/g3438.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/800px-Spring_Framework_Logo_2018.svg.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/3740142a5b6d7e5c73afc223f837c2ed-play_full_color.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/ember_Ember-Dark.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/angular-3.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/1280px-Ionic_Logo.svg.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/Laravel_logo_wordmark_logotype.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/1280px-JQuery-Logo.svg.png') }}" class="img-fluid" alt="" width="90">
      </div> 
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/three-js-logo.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/WordPress-logotype-alternative.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/Horizontal-logo-light-background-en.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/Shopify-Logo.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/woocommerce-logo.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/postgresql-logo.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/mysql.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/SQLite370.svg.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/58481021cef1014c0b5e494b.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/3-300x300.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/Stripe_logo,_revised_2016.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/PayPal-Logo.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/1280px-Amazon_Web_Services_Logo.svg.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/logo-standard.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/1200px-Adobe_XD_CC_icon.svg.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/Adobe_Illustrator_CC_icon.svg.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/Adobe_InDesign_CC_icon.svg.png') }}" class="img-fluid" alt="" width="90">
      </div>
      <div class="col d-flex justify-content-center align-items-center text-center pb-5">
        <img src="{{ asset('img/icons/Adobe-Photoshop-Logo.png') }}" class="img-fluid" alt="" width="90">
      </div>
    </div>
  </div>
</section> 

{{-- About Us --}}
<section id="aboutUsSection" class="position-relative" style="background-color: rgba(255, 255, 255, 0.4)">
  <div class="container py-5">
    <div class="row my-5">
      <div class="col-12 text-center" data-aos="fade-up">
        <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
          {{ __('upoznajte nas')}}
        </h6>
        <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
          {{ __('Ukratko o nama')}}
        </h1>
      </div>
    </div>
    <div class="row py-5 no-gutters" data-aos="fade-up">
      <div class="col-12 col-md-6 mb-4 col-lg-3 text-center">
        <div class="">
          <h1 class="font-weight-bold"><span class="count">8</span> +</h1>
          <h5 class="font-weight-light">godina postojanja</h5>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-4 col-lg-3 text-center">
        <div>
          <h1 class="font-weight-bold"><span class="count">100</span> +</h1>
          <h5 class="font-weight-light">uspješnih priča</h5>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-4 col-lg-3 text-center">
        <div class="">
          <h1 class="font-weight-bold"><span class="count">200</span> +</h1>
          <h5 class="font-weight-light">sklopljenih prijateljstava</h5>
        </div>
      </div>
      <div class="col-12 col-md-6 mb-4 col-lg-3 text-center">
        <div class="">
          <h1><i class="fas fa-infinity"></i></h1>
          <h5 class="font-weight-light">linija koda</h5>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Next Section --}}
<section class="bg-dark-jungle-green position-relative" id="contactSection">
  <div class="container">
    <div class="row">
      <div class="col-12 left-colored-column py-5 bg-dark-jungle-green col-lg-6">
      
        <section class="my-5">
          <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
            {{ __('kontaktirajte nas')}}
          </h6>
          <h1 class="font-weight-semi-bold text-tea-green h1 mt-3">
            {{ __('Imate li neku ideju?')}}
          </h1>
          <h4 class="font-weight-extra-light text-honey-dew h4 mt-3">
            {{ __('Pomoći ćemo Vam da je realizujete!')}}
          </h4> 
  
          <div class="mt-5 d-flex align-items-center">
            <span class="fa-stack fa-1x">
              <i class="fa fa-circle fa-stack-2x text-ocean-green"></i>
              <i class="fa fa-map-marker fa-stack-1x fa-xs text-honey-dew"></i>
            </span>
            <span class="text-honey-dew font-weight-light ml-3">
              Donje Putićevo 109, 72270 Travnik
              <br>
              Bosna i Hercegovina
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
      <div class="col-12 col-lg-6 py-5 bg-honey-dew right-colored-column d-flex justify-content-end align-items-center">
        <form class="contact-form" style="width: 90%">
          <div class="form-group"> 
            <input type="text" class="form-control rounded-0 bg-transparent py-4 border-top-0 border-right-0 border-left-0" id="name" placeholder="Ime"> 
          </div>
          <div class="form-group"> 
            <input type="email" class="form-control rounded-0 bg-transparent py-4  border-top-0 border-right-0 border-left-0" id="email" placeholder="Email">
          </div>
          <div class="form-group"> 
            <input type="text" class="form-control rounded-0 bg-transparent py-4  border-top-0 border-right-0 border-left-0" id="phone" placeholder="Telefon">
          </div>
          <div class="form-group"> 
            <textarea class="form-control rounded-0 bg-transparent py-4  border-top-0 border-right-0 border-left-0" id="exampleFormControlTextarea1" rows="3" placeholder="Poruka" id="poruka"></textarea>
          </div> 
          <h6 class="small mt-4">
            <span>
              Your details will not be shared with any third party.
            </span> 
            <span>
              <a href="" class="text-ocean-green">Privacy Policy</a>
            </span> 
          </h6>
          <button type="submit" class="btn mt-3 rounded-0 bg-dark-jungle-green text-honey-dew text-uppercase px-5 py-3"> 
            <span class="h6 font-weight-semi-bold">Pošalji</span> 
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
        <a href="" class="text-muted text-decoration-none font-weight-light">Privacy Policy</a>
      </div>
      <div class="col-12 text-center font-weight-normal">
        KatrielDev {{ now()->year }} | Sva prava pridržana
      </div>
    </div>
  </div>
</section>

@endsection

@section('scripts')
<script>

var counted = 0;
$(window).scroll(function() {

  var oTop = $('#aboutUsSection').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 2500,
          easing: 'swing',
          step: function (now) {
              $(this).text(Math.ceil(now));
          }
      });
  });
    counted = 1;
  }

});

$(".services-card").hover(function(){
  $(this).css("transition", "0.3s").addClass("shadow-lg");
  $(this).find('a').fadeIn(200).removeClass("d-none");
  }, function(){
    $(this).css("transition", "0.3s").removeClass("shadow-lg");
    $(this).find('a').fadeOut(200).addClass("d-none");
});
</script>
@endsection