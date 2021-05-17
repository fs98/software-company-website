@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Korisnici</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-success">{{ __('Pregled korisnika') }}</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="usersTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>{{ __('Ime') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Verifikovan') }}</th>
                        <th>{{ __('Kreiran') }}</th>
                        <th>{{ __('Uloga') }}</th>
                        <th>{{ __('Akcije') }}</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>{{ __('Ime') }}</th>
                      <th>{{ __('Email') }}</th>
                      <th>{{ __('Verifikovan') }}</th>
                      <th>{{ __('Kreiran') }}</th>
                      <th>{{ __('Uloga') }}</th>
                      <th>{{ __('Akcije') }}</th>
                    </tr>
                </tfoot>
                <tbody>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{!! $user->email_verified_at !!}</td>
                      <td>{{ $user->created_at }}</td>
                      <td>{{ $user->role->name }}</td>
                      <td></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div> 

    <script>
      $(document).ready(function () {
        $('#usersTable').DataTable({
          "language": {
            "lengthMenu": "Prikaži _MENU_ rezultata po stranici",
            "zeroRecords": "Nema podataka u tabeli",
            "info": "Strana _PAGE_ od _PAGES_",
            "infoEmpty": "Nema dostupnih podataka.", 
            "search": "Pretraga",
            "infoFiltered": "(Filtrirano iz ukupno _MAX_ rezultata)",
            "paginate": {
              "previous": "Nazad",
              "next": "Naprijed",
            }
        }
        });
      });
    </script>

@endsection
