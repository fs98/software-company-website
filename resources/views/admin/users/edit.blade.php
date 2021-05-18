@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Pregled Korisnika</h1>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Korisnici</a></li>
      <li class="breadcrumb-item"><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">Uređivanje</li>
    </ol>
  </nav>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">{{ __('Korisnički profil') }}</h6>
    </div>
    <div class="card-body">
      <form method="POST" action="{{ route('users.update', $user) }}">
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="form-group col-12 col-lg-4">
            <label for="name">Puno ime</label>
            <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus placeholder="Upišite puno ime korisnika">
  
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="form-row">  
          <div class="form-group col-12 col-lg-4">
            <label for="email">Email adresa</label>
            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email" placeholder="Upišite email adresu korisnika">
  
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div> 
        </div> 
        <div class="form-row">
          <div class="form-group col-12 col-lg-4">
            <label for="role">Uloga</label>
            <select class="form-control  @error('role') is-invalid @enderror" name="role" id="role">
              <option selected disabled>--Izaberi--</option>
              @foreach ($roles as $role)
              <option value="{{ $role->id }}" {{ old('type', $user->role->name) == $role->name ? "selected" : "" }}>{{ $role->name }}</option>  
              @endforeach
            </select>
          
            @error('type')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div> 
        <button class="btn btn-success" type="submit">Sačuvaj</button>  
      </form>
    </div> 
  </div>  

@endsection
