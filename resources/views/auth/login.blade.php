@extends('layouts.auth')

@section('content')
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                      <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                      <div class="col-lg-6">
                          <div class="p-5">
                              <div class="text-center">
                                  <h1 class="h4 text-gray-900 mb-4">{{ __('KatrielDev Admin') }}</h1>
                              </div>
                              <form class="user" method="POST" action="{{ route('login') }}">
                                  @csrf

                                  <div class="form-group">  
                                    <input  id="email" type="email" class="form-control form-control-user  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email adresa ili korisničko ime" required autocomplete="email" autofocus>
                                    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>

                                  <div class="form-group"> 
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}"  placeholder="Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  
                                  <div class="form-group">
                                      <div class="custom-control custom-checkbox small">
                                          <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="remember">{{ __('Zapamti me') }}</label>
                                      </div>
                                  </div>

                                  <button type="submit" class="btn btn-success btn-user btn-block">
                                    {{ __('Prijava') }}
                                  </button> 
                                  @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-secondary btn-user btn-block">
                                      {{ __('Nemate račun? Registrujte se.') }}
                                    </a> 
                                  @endif
                                  
                              </form>
                              <hr>
                              <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Zaboravili ste lozinku?') }}
                                    </a>
                                @endif  
                              </div> 
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>

  </div>

</div>
@endsection
