@extends('layouts.main')

@section('main')

    {{-- Navbar Section --}}

    <section id="heroDiv" class="position-relative w-100 overflow-hidden bg-dark custom-border-radius"> {{-- style="border-end-end-radius: 40%" --}}
      <div class="container mt-0 pt-0" style="position: fixed; left: 50%; -webkit-transform: translateX(-50%); transform: translateX(-50%)">
        <nav class="navbar navbar-dark mt-0 pt-5" id="navbar">
          <a class="navbar-brand" href="{{ route('public.home') }}">
            <img src="{{ asset('img/icons/logo.svg') }}" alt="logo" height="45" width="auto">
          </a>
          <button onclick="openNav()" class="navbar-toggler text-right rounded-0 border-0 mt-0 pt-0 pr-0" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" onclick="openNav()">
            <img src="{{ asset('img/icons/toggler-icon.svg') }}" alt="toggler-icon" height="25" width="auto">
          </button>
        </nav>
      </div> 
    </section>

    {{-- Image Section --}}
    <section id="imageSection" class="position-relative d-flex justify-content-center align-items-end" style="min-height: 20vh">
    </section>

    {{-- Portfolio Slider --}}
    <section id="portfolioSection" class="position-relative">
      <div class="container">
        <div class="row pt-4">
          <div class="col-12 py-5 text-center" data-aos="fade-up">
            <h6 class="font-weight-semi-bold text-ocean-green h6 text-uppercase">
              {{ __('Your Company')}}
            </h6>
            <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
              {{ __('Privacy Policy')}}
            </h1>
          </div>
        </div>
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-12"> 
             @for ($i = 0; $i < 6; $i++)
              <p>
                {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum pharetra ex, nec condimentum augue convallis et. In ullamcorper ornare odio. Maecenas ut vulputate libero. Etiam id ullamcorper mauris, eu auctor enim. In tortor dui, pulvinar ut mauris vel, venenatis viverra massa. In consectetur hendrerit volutpat. Etiam aliquet, arcu sit amet fringilla ultrices, massa mauris eleifend ex, vitae condimentum quam lectus at orci. Phasellus eget gravida massa. Donec scelerisque, felis ac scelerisque mollis, nisi eros condimentum massa, et vulputate augue metus non tortor. Sed ac metus mattis, pharetra felis vel, facilisis velit. Sed eu diam in lacus commodo elementum. Curabitur in mauris gravida, aliquet libero ultrices, fringilla nunc. Proin malesuada velit id lorem tristique euismod.') }}
              </p>
             @endfor 
          </div>  
        </div>
      </div>
    </section>


@endsection

@section('scripts') 