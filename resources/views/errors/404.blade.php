@extends('layouts.app')

@section('content')
  <!-- start preloader -->
  <div class="preloader" id="preloader"></div>
  <!-- end preloader -->

  <a href="error.html#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

  <!-- header-section start -->
  <header id="header-section">
      <div class="overlay">
          <div class="container">
              <div class="row d-flex header-area">
                  <div class="logo-section flex-grow-1 d-flex align-items-center">
                      <a class="site-logo site-title" href="https://pixner.net/begam/index.html"><img src="images/logo.png"
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
                              <li><a href="https://pixner.net/begam/index.html">Home</a></li>
                              <li class="menu_has_children"><a href="error.html#0">Tournaments</a>
                                  <ul class="sub-menu">
                                      <li><a href="https://pixner.net/begam/tournaments.html">Tournaments</a></li>
                                      <li><a href="https://pixner.net/begam/tournaments-single.html">Tournaments Single</a></li>
                                  </ul>
                              </li>
                              <li class="menu_has_children"><a href="error.html#0" class="active">Pages</a>
                                  <ul class="sub-menu">
                                      <li><a href="https://pixner.net/begam/about-us.html">About Us</a></li>
                                      <li><a href="https://pixner.net/begam/shop.html">Shop</a></li>
                                      <li><a href="https://pixner.net/begam/shop-details.html">Shop Details</a></li>
                                      <li><a href="https://pixner.net/begam/profile.html">Profile</a></li>
                                      <li><a href="https://pixner.net/begam/cart.html">Cart</a></li>
                                      <li><a href="https://pixner.net/begam/check-out.html">Check Out</a></li>
                                      <li><a href="https://pixner.net/begam/features.html">Features</a></li>
                                      <li><a href="error.html">Error</a></li>
                                  </ul>
                              </li>
                              <li><a href="https://pixner.net/begam/contact.html">Contact</a></li>
                          </ul>
                      </div>
                  </nav>
                  <div class="right-area header-action d-flex align-items-center">
                      <div class="search-icon">
                          <a href="error.html#"><img src="images/search_btn.png" alt="icon"></a>
                      </div>
                      <div class="lang d-flex align-items-center">
                          <select>
                              <option value="1">EN</option>
                              <option value="2">BN</option>
                              <option value="3">ES</option>
                              <option value="4">NL</option>
                          </select>
                      </div>
                      <a href="https://pixner.net/begam/login.html" class="login-btn">Login</a>
                      <a href="https://pixner.net/begam/registration.html" class="cmn-btn">Join Now!</a>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- header-section end -->

  <!-- banner-section start -->
  <section id="banner-section" class="inner-banner profile features shop">
      <div class="ani-img">
          <img class="img-1" src="images/banner-circle-1.png" alt="icon">
          <img class="img-2" src="images/banner-circle-2.png" alt="icon">
          <img class="img-3" src="images/banner-circle-2.png" alt="icon">
      </div>
      <div class="banner-content d-flex align-items-center">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <div class="main-content">
                          <h1>Error</h1>
                          <div class="breadcrumb-area">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb d-flex justify-content-center">
                                      <li class="breadcrumb-item"><a href="https://pixner.net/begam/index.html">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Error</li>
                                  </ol>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- banner-section end -->

  <!-- Error Start -->
  <section id="error-section">
      <div class="overlay pb-120 pt-120">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-12">
                      <div class="main-content pt-120 pb-120 text-center">
                          <h3>Whoops..</h3>
                          <h5>page not found</h5>
                          <a href="https://pixner.net/begam/registration.html" class="cmn-btn">Join now!</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Error End -->

  <!-- footer-section start -->
  <footer id="footer-section">
      <div class="overlay">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="footer-top">
                          <div class="row justify-content-center">
                              <div class="col-lg-6 col-md-8">
                                  <div class="top-area text-center">
                                      <h3>Subscribe to Our Newsletter</h3>
                                      <p>Receive news, stay updated and special offers</p>
                                  </div>
                                  <form action="error.html#">
                                      <div class="subscribe d-flex">
                                          <input type="email" placeholder="Your Email Address">
                                          <button class="cmn-btn">Subscribe</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-mid pt-120">
          <div class="container">
              <div class="row d-flex">
                  <div class="col-lg-8 col-md-8 d-flex justify-content-md-between justify-content-center align-items-center cus-grid">
                      <div class="logo-section">
                          <a class="site-logo site-title" href="https://pixner.net/begam/index.html"><img src="images/logo.png" alt="site-logo"></a>
                      </div>
                      <ul class="menu-side d-flex align-items-center">
                          <li><a href="https://pixner.net/begam/index.html" class="active">Home</a></li>
                          <li><a href="https://pixner.net/begam/about-us.html">About Us</a></li>
                          <li><a href="https://pixner.net/begam/contact.html">Contact</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">
                      <div class="right-area">
                          <ul class="d-flex">
                              <li><a href="error.html#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="error.html#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="error.html#"><i class="fab fa-instagram"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="main-content">
                  <div class="row d-flex align-items-center justify-content-center">
                      <div class="col-lg-12 col-md-6">
                          <div class="left-area text-center">
                              <p>Copyright ?? 2021. All Rights Reserved By
                                  <a href="error.html#">BEGAM</a>
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer-section end -->

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/fontawesome.js"></script>
  <script src="js/countdown.jquery.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/main.js"></script>

@endsection
