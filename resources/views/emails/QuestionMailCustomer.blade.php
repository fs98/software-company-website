@component('mail::message')
# {{ $mailGreeting }} {{ Str::ucfirst($name) }}

{{ $mailFirstLine}}

@component('mail::button', ['url' => 'https://katrieldev.com/'])
{{ $mailSecondLine }}
@endcomponent

{{ $mailThirdLine }}

{{ $mailThanks }}<br>
{{ config('app.name') }} tim.
@endcomponent
