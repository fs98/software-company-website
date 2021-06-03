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
              {{ __('Katriel Dev')}}
            </h6>
            <h1 class="font-weight-semi-bold text-dark-jungle-green h1 mt-3">
              {{ __('Privacy Policy')}}
            </h1>
          </div>
        </div>
        <div class="row pb-4" data-aos="fade-up">
          <div class="col-12">
            <!-- Swiper -->
             <p>
               {{ __('The website(\'katrieldev.com\') respects your privacy.') }}
             </p>
             <p>
              {{ __('This Privacy Policy governs your access and usage of the katrieldev.com website, including all content, functionality and services offered.') }}
              <p>
                {{ __('When accessing katrieldev.com, we can query certain information about you, both automatically and through your actions that you take during your visit to our website.') }}
              </p>
              <p>
                {{ __('According to the General Data Protection Regulation (GDPR), all website visitors have their own rights.') }}
              </p>
              <p>
                {{ __('These rights include:') }}
                <ul>
                  <li>{{ __('the right to request access to the information stored by the Website and the rights to correct or delete your personal information')}}</li>
                  <li>{{ __('the right to restrict processing of your personal information')}}</li>
                  <li>{{ __('the right to object personal data processing and transfer')}}</li>
                  <li>{{ __('the right to withdraw consent at any time, without prejudice to the lawfulness of the consent processing that occurred prior to your withdrawal of consent')}}</li>
                </ul>
              </p> 
            </p>
          </div> 
          <div class="col-12">
            <h4 class="font-weight-semi-bold">
              {{ __('Use and disclosure of personal information') }}
            </h4>
            <p>
              {{ __('Your personal information on the current website(\'katrieldev.com\') will be used for:') }}
              <ul>
                <li>{{ __('technical management of the website,')}}</li>
                <li>{{ __('preference analysis,')}}</li>
                <li>{{ __('offer submissions for a direct communication with you.')}}</li> 
              </ul>
            </p> 
          </div>
          <div class="col-12">
            <h4 class="font-weight-semi-bold">
              {{ __('Policy regarding the use and storage of Cookies') }}
            </h4>
            <p>
              {{ __('katrieldev.com uses cookies.') }}
            </p>
            <p>
              {{ __('Cookies are files that are temporarily stored on your hard drive, which allows the katrieldev.com website to identify your computer the next time you visit the katrieldev.com site.') }}
            </p>
            <p>
              {{ __('The cookies stored on the website are for analytical, statistical and functionality purposes, with the sole intention to offer a better user experience.') }}
            </p>
            <p>
              {{ __('Cookies can be:') }}
              <ul>
                <li>{{ __('persistent cookies that remain stored on the user\'s computer (up to 26 months) after the visit')}}</li>
                <li>{{ __('temporary cookies that are only stored for the given session.')}}</li> 
              </ul>
            </p> 
            <p>
              {{ __('If you disagree to the use of Cookies, you can easily delete and / or permanently exclude cookies at any given time.') }}
            </p>
          </div>
          <div class="col-12">
            <h4 class="font-weight-semi-bold">
              {{ __('Newsletter and subscription') }}
            </h4>
            <p>
              {{ __('By giving consent to receive Newsletter posts, the given website(\'katrieldev.com\') will send you the latest Newsletter posts.') }}
            </p>
            <p>
              {{ __('The information provided in the subscription process of the Newsletter will only be used to send new posts.') }}
            </p>
            <p>
              {{ __('If you wish to unsubscribe from the Newsletter, you can do so at any given time. The unsubscribe option is located at bottom of every given posts you have received.') }}
            </p>
            <p>
              {{ __('In the case you cancel your subscription, all personal information collected by the website(\'katrieldev.com\') for subscription purposes will have its processing ceased.') }}
            </p>
            <p>
              {{ __('All information collected will be stored for the period during which you receive Newsletter posts whilst having a subscription.') }}
            </p>
            <p>
              {{ __('The legal basis for receiving Newsletter posts is your consent (Article 6 (1) of the General Data Protection Regulation). If you have not given your consent, Newsletter posts won\'t be sent to you.') }}
            </p> 
          </div>
          <div class="col-12">
            <h4 class="font-weight-semi-bold">
              {{ __('Processing duration') }}
            </h4>
            <p>
              {{ __('Your data is stored and processed for a maximum period of 26 months.') }}
            </p>
            <p>
              {{ __('If there is consent to process data for promotional purposes that extends beyond the prescribed period, your data is stored until the authorization withdrawal.') }}
            </p>  
          </div>
          <div class="col-12">
            <h4 class="font-weight-semi-bold">
              {{ __('User rights') }}
            </h4>
            <p>
              {{ __('It is up to the user to decide what information about themselves is made available.') }}
            </p>
            <p>
              {{ __('In the event of a change, please notify the changes at info@katrieldev.com in order to correct or update your personal information.') }}
            </p>
            <p>
              {{ __('You have the right to withdraw your consent at any given time, by using opt-out forms.') }}
            </p>
            <p>
              {{ __('Personal data covered by the withdrawal statement will no longer be processed from the date of permit withdrawal.') }}
            </p>  
            <p>
              {{ __('In addition to the withdrawal rights, users, in accordance with applicable data protection regulations, are entitled to:')}}
              <ul>
                <li>{{ __('access and confirmation regarding personal information,') }}</li>
                <li>{{ __('the right to rectification,') }}</li>
                <li>{{ __('the right of erasure (the \'right to be forgotten\'),') }}</li>
                <li>{{ __('the right to limit processing,') }}</li>
                <li>{{ __('the right to data portability,') }}</li>
                <li>{{ __('the right to object.') }}</li>
              </ul>
            </p>
            <p>
              {{ __('Users also have the right to complain to the data protection supervisor.') }}
            </p>
          </div>
          <div class="col-12">
            <h4 class="font-weight-semi-bold">
              {{ __('Automated processing') }}
            </h4>
            <p>
              {{ __('Please note that some information (such as the type of Internet browser you use, the number of visits, average time spent on pages, content viewed and such) is processed automatically when you access the website(\'katrieldev.com\').') }}
            </p>
            <p>
              {{ __('The information provided is used to evaluate the attractiveness of the website.') }}
            </p>  
          </div>
          <div class="col-12">
            <h4 class="font-weight-semi-bold">
              {{ __('Connections to other sites') }}
            </h4>
            <p>
              {{ __('This privacy policy applies to the katrieldev.com website.') }}
            </p>
            <p>
              {{ __('This website may contain links to other providers which aren\'t covered by this privacy policy.') }}
            </p>  
            <p>
              {{ __('When leaving the katrieldev.com website, please familiarize yourself with the privacy policies of each website that collects personal information.') }}
            </p>
          </div>
          <div class="col-12 text-right mt-3">
            <p class="text-muted">
              <span>{{ __('Updated on the') }}  09. 09. 2019.</span><br>
              <span>Email: info@katrieldev.com</span><br>
              <span>Tel: +387 30 708 300</span> 
            </p>
          </div>
        </div>
      </div>
    </section>


@endsection

@section('scripts') 