<div class="row">
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
          Search Ranking System
        </a>
      </div>
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        @if (isset($me->id))
        <ul class="nav navbar-nav">
          <li></li>
          <li></li>
        </ul>
        @endif
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          @if (isset($me->id))
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ $me->name }} <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascriplt:void(0)"><i class="fa fa-btn fa-my-account"></i>{!! trans('global.my-profile') !!}</a></li>
                <li><a href="{{ url('/auth/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{!! trans('global.logout') !!}</a></li>
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</div>