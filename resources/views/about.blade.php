@extends('layouts.app')

@section('content')

  <!-- start preloader -->
  <div class="preloader" id="preloader"></div>
  <!-- end preloader -->

  <a href="about-us.html#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

  <!-- header-section start -->
  @include('partials._head')
  <!-- header-section end -->

  <!-- banner-section start -->
  <section id="banner-section" class="inner-banner">
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
                          <h1>About Us</h1>
                          <div class="breadcrumb-area">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb d-flex justify-content-center">
                                      <li class="breadcrumb-item"><a href="https://pixner.net/begam/index.html">Home</a></li>
                                      <li class="breadcrumb-item"><a href="about-us.html#">Pages</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
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

  <!-- About Us In start -->
  <section id="about-us-section">
      <div class="overlay pt-120">
          <div class="container wow fadeInUp">
              <div class="main-container">
                  <div class="row d-flex justify-content-center">
                      <div class="col-lg-8">
                          <div class="section-header text-center">
                              <h2 class="title">ABOUT Begam</h2>
                              <p>Begam a  gaming platform hub Esports tournaments for the biggest titles on every device. Begam is an immersive online gaming experience for all Esports fans out there. Doesn???t matter if you???re a new gamer, casual player, an amateur pro or a registered professional, if you???re passionate about playing and competing in the hottest tournaments,
                                  Begam has what you need.</p>
                              <p>Our team is made up of gamers, nerds, techies, and dreamers, who love what we do and are dedicated to bringing you the best in competitive gaming. Whether it???s local, GCC, MENA or even global, we???ve got tournaments for everyone.</p>
                              <a href="about-us.html#" class="cmn-btn">Learn More</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- About Us In end -->

  <!-- Counter In start -->
  <section id="counter-section">
      <div class="overlay pt-120 pb-120">
          <div class="container">
              <div class="row mp-none">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/counter-icon-1.png" alt="image">
                          </div>
                          <h3><span class="counter">84</span>K</h3>
                          <p>Matches Played</p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/counter-icon-2.png" alt="image">
                          </div>
                          <h3>$<span class="counter">96</span>m</h3>
                          <p>Winnings Paid</p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/counter-icon-3.png" alt="image">
                          </div>
                          <h3><span class="counter">180</span></h3>
                          <p>Active Ladders</p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/counter-icon-4.png" alt="image">
                          </div>
                          <h3><span class="counter">168</span>b</h3>
                          <p>XP Earned</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Counter In end -->

  <!-- Call To Action In start -->
  <section id="call-to-action" class="border-area">
      <div class="overlay pt-120">
          <div class="container">
              <div class="main-content">
                  <div class="row d-sm-flex justify-content-sm-end">
                      <div class="col-lg-4 col-md-1">
                          <img class="left" src="images/call-to-action-left.png" alt="image">
                      </div>
                      <div class="col-lg-4 col-md-5 col-sm-5 d-flex align-items-center">
                          <div class="section-item">
                              <h4>Invite Friends and Win Rewards.Join BEGAM Games today</h4>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                          <div class="btn-area d-flex justify-content-center justify-content-sm-end align-items-center">
                              <a href="https://pixner.net/begam/registration.html" class="cmn-btn">Join Now</a>
                          </div>
                          <img src="images/call-to-action-right.png" alt="image">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Call To Action In end -->

  <!-- Features In start -->
  <section id="features-section">
      <div class="overlay pt-120 pb-120">
          <div class="container wow fadeInUp">
              <div class="row justify-content-center">
                  <div class="col-lg-10">
                      <div class="section-header text-center">
                          <h2 class="title">Begam Games Features</h2>
                          <p>The biggest esports tournaments anytime, anywhere</p>
                      </div>
                  </div>
              </div>
              <div class="row pm-none">
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/features-icon-1.png" alt="image">
                          </div>
                          <h5>Premium Support</h5>
                          <p>Our dedicated admins are there to answer in no time, avg response time is 5mins.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/features-icon-2.png" alt="image">
                          </div>
                          <h5>Instant Deposits</h5>
                          <p>Make a deposit and receive your funds instantly to your account.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/features-icon-3.png" alt="image">
                          </div>
                          <h5>Climb the Leaderboards</h5>
                          <p>Compete in monthly leaderboard challenges for real cash and prizes.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/features-icon-4.png" alt="image">
                          </div>
                          <h5>Make 2x your $$</h5>
                          <p>Our dedicated admins are there to answer in no time, avg response time is 5mins.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/features-icon-5.png" alt="image">
                          </div>
                          <h5>Make up to 10X your $$</h5>
                          <p>Make up to 10X your money on multiplayer tourneys. With paid and free entry.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <img src="images/features-icon-6.png" alt="image">
                          </div>
                          <h5>Play at your Level</h5>
                          <p>With ranked divisions we help you find the right level to compete.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Features In end -->

  <!-- Testimonials In start -->
  <section id="testimonials-section">
      <div class="overlay pt-120">
          <div class="container wow fadeInUp">
              <div class="row justify-content-center">
                  <div class="col-lg-10">
                      <div class="section-header text-center">
                          <h2 class="title">Our Gamers Review</h2>
                          <p>Thousands of Happy Gamers All Around the World</p>
                      </div>
                  </div>
              </div>
              <div class="testimonials-slider mp-none">
                  <div class="single">
                      <div class="single-item text-center">
                          <p>I play Tournament every day, it's a great way to relax and win cash too!</p>
                          <div class="bottom-area d-flex justify-content-between">
                              <div class="left-area d-flex">
                                  <div class="img">
                                      <div class="img-area">
                                          <img src="images/testimonials-user-1.png" alt="image">
                                      </div>
                                  </div>
                                  <div class="title-area">
                                      <h6>Brice Tong</h6>
                                      <span>Texas, USA</span>
                                  </div>
                              </div>
                              <div class="amount">
                                  <h6>$306</h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single">
                      <div class="single-item text-center">
                          <p>I play Tournament every day, it's a great way to relax and win cash too!</p>
                          <div class="bottom-area d-flex justify-content-between">
                              <div class="left-area d-flex">
                                  <div class="img">
                                      <div class="img-area">
                                          <img src="images/testimonials-user-2.png" alt="image">
                                      </div>
                                  </div>
                                  <div class="title-area">
                                      <h6>Alva Adair</h6>
                                      <span>Frankfurt, Germany</span>
                                  </div>
                              </div>
                              <div class="amount">
                                  <h6>$306</h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single">
                      <div class="single-item text-center">
                          <p>I play Tournament every day, it's a great way to relax and win cash too!</p>
                          <div class="bottom-area d-flex justify-content-between">
                              <div class="left-area d-flex">
                                  <div class="img">
                                      <div class="img-area">
                                          <img src="images/testimonials-user-3.png" alt="image">
                                      </div>
                                  </div>
                                  <div class="title-area">
                                      <h6>Ray Sutton</h6>
                                      <span>Ontario, Canada</span>
                                  </div>
                              </div>
                              <div class="amount">
                                  <h6>$380</h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single">
                      <div class="single-item text-center">
                          <p>I play Tournament every day, it's a great way to relax and win cash too!</p>
                          <div class="bottom-area d-flex justify-content-between">
                              <div class="left-area d-flex">
                                  <div class="img">
                                      <div class="img-area">
                                          <img src="images/testimonials-user-2.png" alt="image">
                                      </div>
                                  </div>
                                  <div class="title-area">
                                      <h6>Alva Adair</h6>
                                      <span>Frankfurt, Germany</span>
                                  </div>
                              </div>
                              <div class="amount">
                                  <h6>$306</h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Testimonials In end -->

  <!-- Team In start -->
  <section id="team-section" class="pb-120">
      <div class="overlay pt-120">
          <div class="container wow fadeInUp">
              <div class="row justify-content-center">
                  <div class="col-lg-10">
                      <div class="section-header text-center">
                          <h2 class="title">our management team</h2>
                          <p>Meet the solid base of quality experts in their field with 15+ years of experience</p>
                      </div>
                  </div>
              </div>
              <div class="row wrapper">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="top-item text-center">
                              <img src="images/team-1.png" alt="image">
                              <div class="social-area">
                                  <ul class="d-flex justify-content-center">
                                      <li><a href="about-us.html#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li class="border-area"><a href="about-us.html#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="about-us.html#"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="bottom-area">
                              <a href="about-us.html#"><h5>Tarah Landry</h5></a>
                              <p>Chief Executive Officer</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="top-item text-center">
                              <img src="images/team-2.png" alt="image">
                              <div class="social-area">
                                  <ul class="d-flex justify-content-center">
                                      <li><a href="about-us.html#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li class="border-area"><a href="about-us.html#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="about-us.html#"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="bottom-area">
                              <a href="about-us.html#"><h5>Abe Gordon</h5></a>
                              <p>Chief Financial Officer</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="top-item text-center">
                              <img src="images/team-3.png" alt="image">
                              <div class="social-area">
                                  <ul class="d-flex justify-content-center">
                                      <li><a href="about-us.html#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li class="border-area"><a href="about-us.html#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="about-us.html#"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="bottom-area">
                              <a href="about-us.html#"><h5>Neville Saylor</h5></a>
                              <p>Chief Technology Officer</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <div class="top-item text-center">
                              <img src="images/team-1.png" alt="image">
                              <div class="social-area">
                                  <ul class="d-flex justify-content-center">
                                      <li><a href="about-us.html#"><i class="fab fa-facebook-f"></i></a></li>
                                      <li class="border-area"><a href="about-us.html#"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="about-us.html#"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="bottom-area">
                              <a href="about-us.html#"><h5>Russel Laughlin</h5></a>
                              <p>Technology Manager</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Testimonials In end -->

  <!-- footer-section start -->
  @include('partials._footer')
  <!-- footer-section end -->

  @include('partials._js')


@endsection
