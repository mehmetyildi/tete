



<nav class="navbar navbar-default">
  <div class="languages">
    @if(app()->getLocale() == 'en')
    <a class="nav-link" href="{{ url('/tr') }}">TR</a>
    <a class="nav-link" href="{{ url('/sq') }}">ALB</a>
    @elseif(app()->getLocale()=='tr')
    <a class="nav-link" href="{{ url('/en') }}">EN</a>
    <a class="nav-link" href="{{ url('/sq') }}">ALB</a>
    @else
    <a class="nav-link" href="{{ url('/en') }}">EN</a>
    <a class="nav-link" href="{{ url('/tr') }}">TR</a>
    @endif
  </div>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="/storage/img/logo2.png" alt=""></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-link text-uppercase {{ (strpos($currentRouteName, 'about') !== false) ? 'active' : '' }}" href="{{ route('about') }}">{{ trans('local.corporate') }}</a></li>
        <li><a class="nav-link text-uppercase {{ (strpos($currentRouteName, 'spac') !== false) ? 'active' : '' }}" href="{{ route('spac') }}">{{ trans('local.spac') }}</a></li>
        <li><a class="nav-link text-uppercase {{ (strpos($currentRouteName, 'production') !== false) ? 'active' : '' }}" href="{{ route('production') }}">{{ trans('local.production') }}</a></li>
        <li><a class="nav-link text-uppercase {{ (strpos($currentRouteName, 'gallery') !== false) ? 'active' : '' }}" href="{{ route('gallery') }}">{{ trans('local.gallery') }}</a></li>
        <li><a class="nav-link text-uppercase {{ (strpos($currentRouteName, 'contact') !== false) ? 'active' : '' }}" href="{{ route('contact') }}">{{ trans('local.contact') }}</a></li>
      </ul>
    </div>
  </div>
</nav>