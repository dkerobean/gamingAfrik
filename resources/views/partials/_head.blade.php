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
                            <li><a href="#" class="active">Home</a></li>
                            <li class=""><a href="index.html#0">Tournaments</a>

                            </li>
                              <li><a href="#" class="">Shop</a></li>

                            <li><a href="{{ route('contact') }}">Contact</a></li>
                              <li><a href="{{ route('about') }}" class="">About US</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="right-area header-action d-flex align-items-center">
                    {{-- <div class="search-icon">
                        <a href="index.html#"><img src="images/search_btn.png" alt="icon"></a>
                    </div> --}}

                    <a href="https://pixner.net/begam/login.html" class="login-btn">Login</a>
                    <a href="https://pixner.net/begam/registration.html" class="cmn-btn">Join Now!</a>
                </div>
            </div>
        </div>
    </div>
</header>
