<header id="header-section">
    <div class="overlay">
        <div class="container">
            <div class="row d-flex header-area">
                <div class="logo-section flex-grow-1 d-flex align-items-center">
                    <a class="site-logo site-title" href="#"><img src="images/logo.png"
                            alt="site-logo"></a>
                </div>
                <button class="navbar-toggler ml-auto collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="navbar navbar-expand-lg p-0">
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu ml-auto">
                            <li><a href="/" class="{{ Request::is('/') ? "active" : "" }}">Home</a></li>
                            <li><a href="{{ route('tournaments.index') }}" class="{{ Request::is('tournaments*') ? "active" : "" }}">Tournaments</a>

                            </li>
                              <li><a href="#" class="">Shop</a></li>

                            <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? "active" : "" }}">Contact</a></li>
                              <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? "active" : "" }}">About US</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="right-area header-action d-flex align-items-center">
                    {{-- <div class="search-icon">
                        <a href="index.html#"><img src="images/search_btn.png" alt="icon"></a>
                    </div> --}}

                    @if(Auth::check())

                    <a href="/profile" class="login-btn">Profile</a>
                    <a href="{{ route('logout') }}" class="cmn-btn">Logout</a>
                  @else
                    <a href="{{ route('login') }}" class="login-btn">Login</a>
                    <a href="{{ route('register') }}" class="cmn-btn">Join Now!</a>

                  @endif
                </div>
            </div>
        </div>
    </div>
</header>
