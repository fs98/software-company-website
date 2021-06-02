@component('mail::message')
# Nova poruka od {{ $name }}

## Email:
{{ $email }}

## Pitanje: 
{{ $question }}

## Broj telefona:  
{{ $phone ?? 'Nije unesen.' }}<br>
 
{{ config('app.name') }}
@endcomponent
