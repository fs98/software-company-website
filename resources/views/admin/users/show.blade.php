@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Pregled Korisnika</h1>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Korisnici</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
    </ol>
  </nav>

  <div class="row">
    <div class="ol-12 col-lg-4">
      <!-- User Card -->
      <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">{{ __('Korisnik') }}</h6>
        </div>
        <div class="card-body my-5">
          <div class="d-flex flex-column align-items-center text-center">
            <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" alt="Admin" class="rounded-circle" width="150">
            <div class="mt-3">
              <h4>{{ $user->name }}</h4>
              <p class="small my-0">{{ $user->role->name }}</p> 
              <div class="mb-2">
                {!! $user->verified_at !!} 
              </div>
              <a class="btn btn-success" href="{{ route('users.edit', $user) }}">Uredi</a>
              <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline" id="delete-user">
                @csrf
                @method('DELETE')
                <a class="btn btn-outline-success" onclick="deleteConfirm('delete-user')">Izbriši</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-8">
      <!-- User Card -->
      <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">{{ __('Detalji') }}</h6>
        </div>
        <div class="card-body my-5">
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="my-0 text-success">Puno ime</h6>
              <span class="text-muted">{{ $user->name }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="my-0 text-success">Email</h6>
              <span class="text-secondary">{{ $user->email }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="my-0 text-success">Uloga</h6>
              <span class="text-secondary">{{ $user->role->name }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="my-0 text-success">Verifikovan</h6>
              <span class="text-secondary">{!! $user->email_verified_at !!}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="my-0 text-success">Dodan</h6>
              <span class="text-secondary">{{ $user->created_at }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
              <h6 class="my-0 text-success">Posljednji put ažuriran</h6> 
              <span class="text-secondary">{{ $user->updated_at }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
