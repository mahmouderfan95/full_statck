<!-- nav -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light bg-nav">
    <div class="container">
        <a class="navbar-brand" href="#">Full Stack</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse effect-4" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
            <a class="nav-link active" href="#">@if(app()->getLocale() == 'ar')@lang('site.Home') @else Home @endif <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@if(app()->getLocale() == 'ar')@lang('site.About us') @else About Us @endif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@if(app()->getLocale() == 'ar')@lang('site.Services') @else Services @endif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@if(app()->getLocale() == 'ar')@lang('site.Our Works') @else Our Works @endif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@if(app()->getLocale() == 'ar')@lang('site.Contact Us') @else Contact Us @endif</a>
            </li>
            @if(auth()->guest())
            <li class="nav-item">
                <a class="nav-link" href="{{route('getRegister')}}">@if(app()->getLocale() == 'ar')@lang('site.Register') @else Register @endif</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route("getLogin")}}">@if(app()->getLocale() == 'ar')@lang('site.Login') @else Login @endif</a>
            </li>
            @endif
            @if(auth()->check())
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->firstName}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('profile',auth()->user()->id)}}">profile</a>
                <a class="dropdown-item" href="{{route('logout')}}">logout</a>
                {{-- <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a> --}}
            </div>
            </li>
            @endif

        </ul>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-language fa-fw"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            </li>
        {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
        </div>
    </div>
    <!-- container -->
  </nav>
<!-- nav -->
