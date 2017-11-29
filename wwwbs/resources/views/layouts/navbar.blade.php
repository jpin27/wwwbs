<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="/img/uofslogo-black.png" height="40"></a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#services">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#practitioners">Practitioners</a>
        </li>

        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About WWWBS</a>
        </li>

        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ 'log' }}">Login</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ URL::to('register1') }}">Register</a></li>
            @else


                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                {{Auth::user()->firstName}}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                </li>
            @endguest
        </ul>


      </ul>
    </div>

  </div>
</nav>
