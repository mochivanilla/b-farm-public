<div class="pace-overlay"></div>
  <header id="header" class="header-front-page" style="background-image: url({{ asset('assets/images/bg_selada.png') }});background-attachment: fixed;">
    <div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-8">
            <a href="/" title="Illdy Theme Demo">
              {{-- <img class="header-logo-img" src="https://demo.colorlib.com/illdy/wp-content/uploads/sites/58/2016/03/cropped-footer-logo-1.png" width="" /> --}}
            </a>
          </div>
          <div class="col-sm-8 col-xs-4">
            <nav class="header-navigation">
              <ul id="menu-illdy-main" class="clearfix">
                <li id="menu-item-16" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-16">
                  <a href="/">Home</a>
                </li>
                <li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-17">
                  <a href="{{ route('rekomendasi.index') }}">Rekomendasi Menu</a>
                </li>
                <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-18">
                  <a href="#about">About</a>
                </li>
                <li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-19">
                  <a href="#projects">Events</a>
                </li>
                <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-20">
                  <a href="#contact-us">Contact</a>
                </li>
                @if (auth()->user() != null)
                {{--  <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-21">
                  <a style="cursor: pointer;">
                    {{ auth()->user()->name }}
                    <ul>
                      <li class="menu-item">Logout</li>
                    </ul>
                  </a>
                </li>  --}}
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->name }}
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button class="nav-link btn-sm btn-logout w-100" type="submit">Logout</button>
                    </form>
                  </div>
                </li>
                @else
                <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-21">
                  <a data-toggle="modal" data-target="#loginModal" style="cursor: pointer;">Login</a>
                </li>
                @endif
              </ul>
            </nav>
            <button class="open-responsive-menu">
              <i class="fa fa-bars"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <nav class="responsive-menu">
      <ul>
        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-16">
          <a href="/">Home</a>
        </li>
        <li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-17">
          <a href="{{ route('rekomendasi.index') }}">Rekomendasi Menu</a>
        </li>
        <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-18">
          <a href="#about">About</a>
        </li>
        <li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-19">
          <a href="#projects">Events</a>
        </li>
        <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-20">
          <a href="#contact-us">Contact</a>
        </li>
        <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-21">
          <a data-toggle="modal" data-target="#loginModal" style="cursor: pointer;">Login</a>
        </li>
      </ul>
    </nav>
    <div class="bottom-header front-page">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-nowrap">EXPERT CARES FOR YOUR HEALTH</h2>
          </div>
          <div class="col-sm-8 col-sm-offset-2">
            <div class="section-description">Membantu menjaga kesehatanmu dengan mengkonsumsi sayuran  yang bebas hama dan pestisida.</div>
            <a href="/" title="Learn more" class="header-button-one">Learn more</a>
            <a href="/" title="Download" class="header-button-two">Bergabung</a>
          </div>
        </div>
      </div>
    </div>
  </header>