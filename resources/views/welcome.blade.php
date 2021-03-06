@extends('layouts.app')

@section('content')

  <!-- start preloader -->
  <div class="preloader" id="preloader"></div>
  <!-- end preloader -->

  <a href="index.html#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

  <!-- header-section start -->
    @include('partials._head')
  <!-- header-section end -->

  <!-- banner-section start -->
  @include('partials._topheader')
  <!-- Available Game In end -->

  <!-- How Works start -->
  <section id="how-works-section" class="border-area">
      <div class="overlay pt-120 pb-120">
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
                      <a href="{{ route('tournaments.index') }}" class="cmn-btn">View Tournaments</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- How Works end -->

  <!-- Browse Tournaments start -->
  <section id="tournaments-section">
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


            @foreach ($tournaments as $tournament)
              <div class="single-item mp-none">
                  <div class="row">
                      <div class="col-lg-3 col-md-3 d-flex align-items-center">
                          <img class="top-img" src="{{ asset('Tournament/'.$tournament->image) }}" alt="image">
                      </div>
                      <div class="col-lg-6 col-md-9 d-flex align-items-center">
                          <div class="mid-area">
                              <a href="{{ route('tournaments.show', $tournament->id) }}"><h4>{{ $tournament->name }}</h4></a>
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
                                  <a href="{{ route('tournaments.show', $tournament->id) }}" class="cmn-btn">View Tournament</a>
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
                          <a href="#"><h5>Barton Griggs</h5></a>
                          <p class="date">
                              <span class="text-sm earn">1970 XP Earned</span>
                              <span class="text-sm">04/05 - 04/12</span>
                          </p>
                          <p class="text-sm credit">
                              <span class="text-sm"><img src="images/credit-icon.png" alt="image"> +20 credits</span>
                          </p>
                          <a href="#" class="cmn-btn">View Profile</a>
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
                          <a href="#"><h5>Mervin Trask</h5></a>
                          <p class="date">
                              <span class="text-sm earn">1970 XP Earned</span>
                              <span class="text-sm">04/05 - 04/12</span>
                          </p>
                          <p class="text-sm credit">
                              <span class="text-sm"><img src="images/credit-icon.png" alt="image"> +20 credits</span>
                          </p>
                          <a href="#" class="cmn-btn">View Profile</a>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single-item text-center">
                          <div class="img-area">
                              <div class="img-wrapper">
                                  <img src="images/player-3.png" alt="image">
                              </div>
                          </div>
                          <a href="#"><h5>Adria Poulin</h5></a>
                          <p class="date">
                              <span class="text-sm earn">1970 XP Earned</span>
                              <span class="text-sm">04/05 - 04/12</span>
                          </p>
                          <p class="text-sm credit">
                              <span class="text-sm"><img src="images/credit-icon.png" alt="image"> +20 credits</span>
                          </p>
                          <a href="#" class="cmn-btn">View Profile</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Players of the Week In end -->

  <!-- Features In start -->
  <section id="features-section">
      <div class="overlay pt-120">
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
                              <h4>Invite Friends and Win Rewards. Join GamingAfrik Games today</h4>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                          <div class="btn-area d-flex justify-content-center justify-content-sm-end align-items-center">
                              <a href="/register" class="cmn-btn">Join Now</a>
                          </div>
                          <img src="images/call-to-action-right.png" alt="image">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Call to Action In end -->

  <!-- Testimonials In start -->
  <section id="testimonials-section">
      <div class="overlay pt-120 pb-120">
          <div class="container wow fadeInUp">
              <div class="row justify-content-center">
                  <div class="col-lg-10">
                      <div class="section-header text-center">
                          <h2 class="title">Our Gamers Review</h2>
                          <p>Thousands of Happy Gamers All Around the World</p>
                      </div>
                  </div>
              </div>
              <div class="row mp-none">
                  <div class="col-lg-4 col-md-6 col-sm-6">
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
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <p>When I hang out with my friends, we play Tournament, its so much fun</p>
                          <div class="bottom-area d-flex justify-content-between">
                              <div class="left-area d-flex">
                                  <div class="img">
                                      <div class="img-area">
                                          <img src="images/testimonials-user-1.png" alt="image">
                                      </div>
                                  </div>
                                  <div class="title-area">
                                      <h6>Alva Adair</h6>
                                      <span>Frankfurt, Germany</span>
                                  </div>
                              </div>
                              <div class="amount">
                                  <h6>$496</h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-6">
                      <div class="single-item text-center">
                          <p>I joined for the community but ended up winning cash, amazing.</p>
                          <div class="bottom-area d-flex justify-content-between">
                              <div class="left-area d-flex">
                                  <div class="img">
                                      <div class="img-area">
                                          <img src="images/testimonials-user-1.png" alt="image">
                                      </div>
                                  </div>
                                  <div class="title-area">
                                      <h6>Ray Sutton</h6>
                                      <span>Ontario, Canada</span>
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

  <!-- Call Action In start -->
  <section id="call-action" class="pb-120">
      <div class="overlay">
          <div class="container wow fadeInUp">
              <div class="row d-flex justify-content-between align-items-center">
                  <div class="col-lg-6 col-md-6">
                      <div class="left-area">
                          <h2 class="title">Build Your Esports Profile</h2>
                          <p>Showcase your achievements, match history and win rate while you build your reputation on Begam.</p>
                          <a href="" class="cmn-btn-second">Sign Up Free</a>
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
  @include('partials._footer')
  <!-- footer-section end -->

  @include('partials._js')


@endsection
