<div id="cookieAlert" class="js-cookie-consent cookie-consent alert border-0 alert-dismissible rounded-0 fade text-center show p-5" role="alert" data-aos="zoom-out">
  <div>
    <img src="{{ asset('img/icons/cookie-svgrepo-com.svg') }}" alt="cookies" height="60" width="60">
    <h3 class="font-weight-bold mt-3">
      {{ __('Have a cookie!') }}
    </h3>
    <h6 class="text-center font-weight-normal text-dark-jungle-green mt-1">
      {{ __('We use cookies to improve user experience and reliability.') }}
    </h6>
    <a class="js-cookie-consent-agree cookie-consent__agree btn text-ocean-green font-weight-semi-bold bg-honey-dew mt-3 px-4 py-2 rounded-0">
      {{ __('I love cookies!') }}
    </a>
    <br>
    <a href="{{ route('public.privacy-policy') }}" class="small text-muted text-decoration-none privacy-policy-link">
      {{ __('Privacy Policy')}}
    </a>
  </div>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> 
