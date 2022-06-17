<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>HeroBiz<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar ml-auto">
      <ul>

        <li class="dropdown"><a href="#"><span>Home</span></a>
        </li>

        {{-- <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
        <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
        <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
        <li><a class="nav-link scrollto" href="index.html#team">Team</a></li> --}}
        <li><a href="blog.html">Blog</a></li>
        <li class="dropdown megamenu "><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li>
              <a href="#">Column 1 link 1</a>
              <a href="#">Column 1 link 2</a>
              <a href="#">Column 1 link 3</a>
            </li>
            <li>
              <a href="#">Column 2 link 1</a>
              <a href="#">Column 2 link 2</a>
              <a href="#">Column 3 link 3</a>
            </li>
            <li>
              <a href="#">Column 3 link 1</a>
              <a href="#">Column 3 link 2</a>
              <a href="#">Column 3 link 3</a>
            </li>
            <li>
              <a href="#">Column 4 link 1</a>
              <a href="#">Column 4 link 2</a>
              <a href="#">Column 4 link 3</a>
            </li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Drop Down 1</a></li>
                <li><a href="#">Deep Drop Down 2</a></li>
                <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto ml-auto" href="index.html#contact">Contact</a></li>
     
    

    @guest
                            @if (Route::has('login'))
                            <li>
                              <a class="btn-getstarted scrollto " href="{{ route('login') }}">Login</a>
                            </li>
                            @endif

                            {{-- @if (Route::has('register'))
                              <a class="btn-getstarted scrollto" href="{{ route('register') }}">register</a>
                            @endif --}}
                        @else
                        <li class="dropdown">
                          <a class="btn-getstarted scrollto " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span>{{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;{{ Auth::user()->lastname }}</span> <i class="bi bi-chevron-down dropdown-indicator"></i>
                          </a>
                          <ul>
                            <li><a href="#">Drop Down 2</a></li>
                           <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            
                            </li>
                            
                          </ul>
                        </li> 
                        @endguest
                      </ul>
                      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->
  </div>
</header><!-- End Header -->