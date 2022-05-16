@extends('layouts.app')


@section('content')
  <!-- start preloader -->
  <div class="preloader" id="preloader"></div>
  <!-- end preloader -->

  <a href="" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

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
                          <h1>Tournaments</h1>
                          <div class="breadcrumb-area">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb d-flex justify-content-center">
                                      <li class="breadcrumb-item"><a href="">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Tournaments</li>
                                  </ol>
                              </nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="testimonials-carousel d-flex align-items-center">
              <div class="bottom-item">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="left-item">
                              <p class="text-sm">Registration Opened</p>
                              <h4>Leader Cup #7</h4>
                              <div class="draw-counter d-flex">
                                  <div class="time-parameter left">
                                      <h5>26</h5>
                                      <span>SEP</span>
                                  </div>
                                  <div class="head">
                                      <div class="date-area d-flex justify-content-center"
                                          data-countdown="2022/06/20">
                                      </div>
                                      <div class="time-parameter">
                                          <span>DAY</span>
                                          <span>HRS</span>
                                          <span>MIN</span>
                                          <span>SEC</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="btn-area">
                                  <a href="https://pixner.net/begam/registration.html" class="cmn-btn">Join now!</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <div class="right-area">
                              <img class="img-char" src="images/character.png" alt="image">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="bottom-item">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="left-item">
                              <p class="text-sm">Registration Opened</p>
                              <h4>Leader Cup #7</h4>
                              <div class="draw-counter d-flex">
                                  <div class="time-parameter left">
                                      <h5>26</h5>
                                      <span>SEP</span>
                                  </div>
                                  <div class="head">
                                      <div class="date-area d-flex justify-content-center"
                                          data-countdown="2022/06/20">
                                      </div>
                                      <div class="time-parameter">
                                          <span>DAY</span>
                                          <span>HRS</span>
                                          <span>MIN</span>
                                          <span>SEC</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="btn-area">
                                  <a href="tournaments.html#" class="cmn-btn">Join now!</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <div class="right-area">
                              <img class="img-char" src="images/character.png" alt="image">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="bottom-item">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="left-item">
                              <p class="text-sm">Registration Opened</p>
                              <h4>Leader Cup #7</h4>
                              <div class="draw-counter d-flex">
                                  <div class="time-parameter left">
                                      <h5>26</h5>
                                      <span>SEP</span>
                                  </div>
                                  <div class="head">
                                      <div class="date-area d-flex justify-content-center"
                                          data-countdown="2022/06/20">
                                      </div>
                                      <div class="time-parameter">
                                          <span>DAY</span>
                                          <span>HRS</span>
                                          <span>MIN</span>
                                          <span>SEC</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="btn-area">
                                  <a href="tournaments.html#" class="cmn-btn">Join now!</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <div class="right-area">
                              <img class="img-char" src="images/character.png" alt="image">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="bottom-item">
                  <div class="row">
                      <div class="col-lg-5">
                          <div class="left-item">
                              <p class="text-sm">Registration Opened</p>
                              <h4>Leader Cup #7</h4>
                              <div class="draw-counter d-flex">
                                  <div class="time-parameter left">
                                      <h5>26</h5>
                                      <span>SEP</span>
                                  </div>
                                  <div class="head">
                                      <div class="date-area d-flex justify-content-center"
                                          data-countdown="2022/06/20">
                                      </div>
                                      <div class="time-parameter">
                                          <span>DAY</span>
                                          <span>HRS</span>
                                          <span>MIN</span>
                                          <span>SEC</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="btn-area">
                                  <a href="tournaments.html#" class="cmn-btn">Join now!</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <div class="right-area">
                              <img class="img-char" src="images/character.png" alt="image">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- banner-section end -->

  <!-- Browse Tournaments start -->
  <section id="tournaments-section" class="pt-120 tournaments">
      <div class="overlay pt-120 pb-120">
          <div class="container wow fadeInUp">
              <div class="row d-flex justify-content-center">
                  <div class="col-lg-8 text-center">
                      <div class="section-header">
                          <h2 class="title">Browse Tournaments</h2>
                          <p>Find the perfect tournaments for you. Head to head matches
                              where you pick the game, rules and prize.</p>
                      </div>
                  </div>
              </div>
              <div class="row mb-40 mp-none">
                  <div class="col-lg-3 col-md-3">
                      <div class="single-input">
                          <span>Status</span>
                          <select>
                              <option>Status</option>
                              <option value="1">Upcoming 1</option>
                              <option value="2">Upcoming 2</option>
                              <option value="3">Upcoming 3</option>
                              <option value="5">Upcoming 5</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                      <div class="single-input">
                          <span>Search</span>
                          <input type="text" placeholder="Search">
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                      <div class="single-input">
                          <span>Team Size</span>
                          <select>
                              <option>Select Team Size</option>
                              <option value="1">Size 1</option>
                              <option value="2">Size 2</option>
                              <option value="3">Size 3</option>
                              <option value="4">Size 4</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3">
                      <div class="single-input">
                          <span>Entry Fee</span>
                          <select>
                              <option>Select Entry Fee</option>
                              <option value="1">50</option>
                              <option value="2">60</option>
                              <option value="3">70</option>
                              <option value="4">80</option>
                          </select>
                      </div>
                  </div>
              </div>

              @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success</strong> {{ $message }}
                  <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif


                  @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error</strong> {{ $errors()->first() }}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true text-dark">&times;</span>
                      </button>
                    </div>
                  @endif
            @foreach($utournament as $tournament)
              <div class="single-item mp-none">

                  <div class="row">
                      <div class="col-lg-3 col-md-3 d-flex align-items-center">
                          <img class="top-img" src="{{ asset('Tournament/'.$tournament->image) }}" alt="image">
                      </div>
                      <div class="col-lg-6 col-md-9 d-flex align-items-center">
                          <div class="mid-area">
                              <h4>{{ $tournament->name }}</h4>
                              <div class="title-bottom d-flex">
                                  <div class="time-area bg">
                                      <img src="images/waitng-icon.png" alt="image">
                                      <span>Starts in </span>
                                      <span class="time">{{ $tournament->check_in }}</span>
                                  </div>
                                  <div class="date-area bg">
                                      <span class="date">{{ $tournament->start_date }}</span>
                                  </div>
                              </div>
                              <div class="single-box d-flex">
                                  <div class="box-item">
                                      <span class="head">ENTRY FEE</span>
                                      <span class="sub">{{ $tournament->entry_fee }}</span>
                                  </div>
                                  <div class="box-item">
                                      <span class="head">Team Size</span>
                                      <span class="sub">{{ $tournament->team_size }}</span>
                                  </div>
                                  <div class="box-item">
                                      <span class="head">Max Teams</span>
                                      <span class="sub">{{ $tournament->slots }}</span>
                                  </div>
                                  <div class="box-item">
                                      <span class="head">Enrolled</span>
                                      <span class="sub">{{ $tournament->enrolled }}</span>
                                  </div>
                                  <div class="box-item">
                                      <span class="head">skill Level</span>
                                      <span class="sub">{{ $tournament->skill_level }}</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 d-flex align-items-center">
                          <div class="prize-area text-center">
                              <div class="contain-area">
                                  <span class="prize"><img src="images/price-coin.png" alt="image">prize</span>
                                  <h4 class="dollar">{{ $tournament->prize_claim }}</h4>
                                <form action="{{ route('tournaments.store') }}" method="POST">
                                  @csrf
                                  @if(Auth::check())
                                      <input type="hidden" name="tournament_id" value="{{$tournament->id}}">
                                      <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                                      @if($row = DB::table('tournament_user')->where([
                                         ['user_id', '=', Auth::user()->id],
                                         ['tournament_id', '=', $tournament->id],
                                         ])->exists())
                                      <button class="cmn-btn text-light" type="submit" name="button">
                                          Leave Competition
                                      </button>
                                      @else
                                      <button class="cmn-btn text-light "type="submit" name="button">
                                        Join Tournament
                                      </button>

                                    @endif

                                  @else
                                    <button class="cmn-btn text-light "type="submit" name="button">
                                      Login To Join 
                                    </button>

                                  @endif







                              </form>


                                  <p>Top 3 Players Win a Cash Prize</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>
  <!-- Browse Tournaments end -->

  <!-- Players of the Week In start -->
  <section id="players-week-section">
      <div class="overlay pt-120 pb-120">
          <div class="container wow fadeInUp">
              <div class="row justify-content-center">
                  <div class="col-lg-7 mb-30">
                      <div class="section-header text-center">
                          <h2 class="title">Players of the Week</h2>
                          <p>We take a look at the best player of the week awarded
                              on Monday for the previous Monday to Sunday</p>
                      </div>
                  </div>
              </div>
              <div class="row mp-none">
                  <div class="col-lg-4 col-md-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <div class="img-wrapper">
                                  <img src="images/player-1.png" alt="image">
                              </div>
                          </div>
                          <a href="https://pixner.net/begam/profile.html"><h5>Barton Griggs</h5></a>
                          <p class="date">
                              <span class="text-sm earn">1970 XP Earned</span>
                              <span class="text-sm">04/05 - 04/12</span>
                          </p>
                          <p class="text-sm credit">
                              <span class="text-sm"><img src="images/credit-icon.png" alt="image"> +20 credits</span>
                          </p>
                          <a href="https://pixner.net/begam/profile.html" class="cmn-btn">View Profile</a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single-item mid-area text-center">
                          <div class="top-level">
                              <img src="images/star.png" alt="image">
                          </div>
                          <div class="img-area">
                              <div class="img-wrapper">
                                  <img src="images/player-2.png" alt="image">
                              </div>
                          </div>
                          <a href="https://pixner.net/begam/profile.html"><h5>Mervin Trask</h5></a>
                          <p class="date">
                              <span class="text-sm earn">1970 XP Earned</span>
                              <span class="text-sm">04/05 - 04/12</span>
                          </p>
                          <p class="text-sm credit">
                              <span class="text-sm"><img src="images/credit-icon.png" alt="image"> +20 credits</span>
                          </p>
                          <a href="https://pixner.net/begam/profile.html" class="cmn-btn">View Profile</a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <div class="img-wrapper">
                                  <img src="images/player-3.png" alt="image">
                              </div>
                          </div>
                          <a href="https://pixner.net/begam/profile.html"><h5>Adria Poulin</h5></a>
                          <p class="date">
                              <span class="text-sm earn">1970 XP Earned</span>
                              <span class="text-sm">04/05 - 04/12</span>
                          </p>
                          <p class="text-sm credit">
                              <span class="text-sm"><img src="images/credit-icon.png" alt="image"> +20 credits</span>
                          </p>
                          <a href="https://pixner.net/begam/profile.html" class="cmn-btn">View Profile</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Players of the Week In end -->

  <!-- How Works start -->
  <section id="how-works-section">
      <div class="overlay pt-120">
          <div class="container wow fadeInUp">
              <div class="row d-flex justify-content-center">
                  <div class="col-lg-6 text-center">
                      <div class="section-header">
                          <h2 class="title">How It Works</h2>
                          <p>It's easier than you think. Follow 4 simple easy steps</p>
                      </div>
                  </div>
              </div>
              <div class="row mp-top">
                  <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
                      <div class="single-item">
                          <div class="icon-area">
                              <span>1</span>
                              <img src="images/how-icon-1.png" alt="image">
                          </div>
                          <div class="text-area">
                              <h5>Signup</h5>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center obj-rel">
                      <div class="single-item">
                          <div class="icon-area">
                              <span>2</span>
                              <img src="images/how-icon-2.png" alt="image">
                          </div>
                          <div class="text-area">
                              <h5>Deposit</h5>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center obj-alt">
                      <div class="single-item">
                          <div class="icon-area">
                              <span>3</span>
                              <img src="images/how-icon-3.png" alt="image">
                          </div>
                          <div class="text-area">
                              <h5>Compete</h5>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center obj-rel">
                      <div class="single-item">
                          <div class="icon-area">
                              <span>4</span>
                              <img src="images/how-icon-4.png" alt="image">
                          </div>
                          <div class="text-area">
                              <h5>Get Paid</h5>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row d-flex justify-content-center">
                  <div class="col-lg-6 text-center">
                      <a href="https://pixner.net/begam/registration.html" class="cmn-btn">Join Now!</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- How Works end -->

  <!-- Call to Action In start -->
  <section id="call-to-action">
      <div class="overlay pt-120 pb-120">
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
  <!-- Call to Action In end -->

  <!-- Call Action In start -->
  <section id="call-action">
      <div class="overlay pb-120">
          <div class="container wow fadeInUp">
              <div class="row d-flex justify-content-between align-items-center">
                  <div class="col-lg-6 col-md-6">
                      <div class="left-area">
                          <h2 class="title">Build Your Esports Profile</h2>
                          <p>Showcase your achievements, match history and win rate while you build your reputation on Begam.</p>
                          <a href="https://pixner.net/begam/registration.html" class="cmn-btn-second">Sign Up Free</a>
                      </div>
                  </div>
                  <div class="col-lg-5 col-md-6">
                      <div class="right-area">
                          <img src="images/profile-info.png" alt="image">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Call Action In end -->

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
                                  <form action="tournaments.html#">
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
                              <li><a href="tournaments.html#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="tournaments.html#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="tournaments.html#"><i class="fab fa-instagram"></i></a></li>
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
                              <p>Copyright © 2021. All Rights Reserved By
                                  <a href="tournaments.html#">BEGAM</a>
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
  <script src="js/wow.js"></script>
  <script src="js/main.js"></script>

@endsection
