    @extends('layouts.app')

@section('content')

  <!-- start preloader -->
  <div class="preloader" id="preloader"></div>
  <!-- end preloader -->

  <a href="profile.html#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

  <!-- header-section start -->
  @include('partials._head')
  <!-- header-section end -->

  <!-- banner-section start -->
  <section id="banner-section" class="inner-banner profile">
      <div class="ani-img">
          <img class="img-1" src="images/banner-circle-1.png" alt="icon">
          <img class="img-2" src="images/banner-circle-2.png" alt="icon">
          <img class="img-3" src="images/banner-circle-2.png" alt="icon">
      </div>l
      <div class="banner-content d-flex align-items-center">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <div class="main-content">
                          <h1>Profile Page</h1>
                          <div class="breadcrumb-area">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb d-flex justify-content-center">
                                      <li class="breadcrumb-item"><a href="">Home</a></li>
                                      <li class="breadcrumb-item"><a href="profile.html#">Pages</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Profile Page</li>
                                  </ol>
                              <b /nav>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="heading-area">
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
              <div class="row justify-content-between">
                  <div class="col-md-6">
                      <div class="profile-area d-flex align-items-center">

                            <div class="photo rounded-circle">
                                  <img src="{{ asset('UserProfile/'.Auth::user()->profile_image) }}" alt="Image" width="90" height="90">
                              </div>



                          <div class="name-area">
                              <h4>{{ Auth::user()->username; }}</h4>
                              <span><a href="{{ route('edit.edit', Auth::user()->id) }}">Edit Profile</a></span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 d-flex justify-content-center justify-content-md-end">
                      <div class="right d-flex align-items-center">
                          <a href="" class="cmn-btn">Message</a>
                          <div class="user-logo d-flex align-items-center justify-content-center">
                              <img src="images/user-icon.png" alt="Image">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- banner-section end -->

  <!-- Trophies Content Start -->
  <section id="all-trophies" class="pb-120">
      <div class="container">
          <div class="tab-content">
              <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="overview-tab">
                  <div class="row">
                      <div class="col-lg-3 col-md-6">
                          <div class="single-trophies d-flex align-items-center">
                              <div class="left d-flex align-items-center justify-content-center">
                                  <img src="images/trophies-icon-1.png" alt="image">
                              </div>
                              <div class="right">
                                  <p class="text-sm">Elite Trophies</p>
                                  <h4>0</h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="single-trophies d-flex align-items-center">
                              <div class="left d-flex align-items-center justify-content-center">
                                  <img src="images/trophies-icon-2.png" alt="image">
                              </div>
                              <div class="right">
                                  <p class="text-sm">gold-trophy</p>
                                  <h4>6</h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="single-trophies d-flex align-items-center">
                              <div class="left d-flex align-items-center justify-content-center">
                                  <img src="images/trophies-icon-3.png" alt="image">
                              </div>
                              <div class="right">
                                  <p class="text-sm">silver trophy</p>
                                  <h4>2</h4>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-md-6">
                          <div class="single-trophies d-flex align-items-center">
                              <div class="left d-flex align-items-center justify-content-center">
                                  <img src="images/trophies-icon-4.png" alt="image">
                              </div>
                              <div class="right">
                                  <p class="text-sm">Bronze Trophies</p>
                                  <h4>5</h4>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="statistics-area">
                      <div class="row">
                          <div class="col-lg-9">
                              <div class="total-area">
                                  <div class="head-area d-flex justify-content-between">
                                      <div class="left">
                                          <h5>Game Statistics</h5>
                                          <p class="text-sm">Player's game specific statistics</p>
                                      </div>
                                      <div class="right">
                                          <p class="text-sm">Last Update: <span>3 days ago</span></p>
                                      </div>
                                  </div>
                                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                      <li class="nav-item">
                                          <a class="nav-link active" id="fortnite-tab" data-toggle="tab" href="profile.html#fortnite" role="tab" aria-controls="fortnite"
                                              aria-selected="true">fortnite</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" id="warzone-tab" data-toggle="tab" href="profile.html#warzone" role="tab" aria-controls="warzone"
                                              aria-selected="false">warzone</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" id="lofl-tab" data-toggle="tab" href="profile.html#lofl" role="tab" aria-controls="lofl"
                                              aria-selected="false">lofl</a>
                                      </li>
                                      <li class="nav-item">
                                          <a class="nav-link" id="dota-tab" data-toggle="tab" href="profile.html#dota" role="tab" aria-controls="dota" aria-selected="false">dota</a>
                                      </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContents">
                                      <div class="tab-pane fade show active" id="fortnite" role="tabpanel" aria-labelledby="fortnite-tab">
                                          <div class="row">
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-1.png" alt="image">
                                                      <p>Tournaments Entered</p>
                                                      <h4>10</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-2.png" alt="image">
                                                      <p>Kills Per Game (Average)</p>
                                                      <h4>20</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-3.png" alt="image">
                                                      <p>Games Played League of Legends</p>
                                                      <h4>5</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-4.png" alt="image">
                                                      <p>Earnings (Per tournament)</p>
                                                      <h4>0</h4>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane fade" id="warzone" role="tabpanel" aria-labelledby="warzone-tab">
                                          <div class="row">
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-1.png" alt="image">
                                                      <p>Tournaments Entered</p>
                                                      <h4>10</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-2.png" alt="image">
                                                      <p>Kills Per Game (Average)</p>
                                                      <h4>20</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-3.png" alt="image">
                                                      <p>Games Played League of Legends</p>
                                                      <h4>5</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-4.png" alt="image">
                                                      <p>Earnings (Per tournament)</p>
                                                      <h4>0</h4>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane fade" id="lofl" role="tabpanel" aria-labelledby="lofl-tab">
                                          <div class="row">
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-1.png" alt="image">
                                                      <p>Tournaments Entered</p>
                                                      <h4>10</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-2.png" alt="image">
                                                      <p>Kills Per Game (Average)</p>
                                                      <h4>20</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-3.png" alt="image">
                                                      <p>Games Played League of Legends</p>
                                                      <h4>5</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-4.png" alt="image">
                                                      <p>Earnings (Per tournament)</p>
                                                      <h4>0</h4>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="tab-pane fade" id="dota" role="tabpanel" aria-labelledby="dota-tab">
                                          <div class="row">
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-1.png" alt="image">
                                                      <p>Tournaments Entered</p>
                                                      <h4>10</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-2.png" alt="image">
                                                      <p>Kills Per Game (Average)</p>
                                                      <h4>20</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-3.png" alt="image">
                                                      <p>Games Played League of Legends</p>
                                                      <h4>5</h4>
                                                  </div>
                                              </div>
                                              <div class="col-lg-3 col-md-6">
                                                  <div class="single-item text-center">
                                                      <img src="images/statistics-icon-4.png" alt="image">
                                                      <p>Earnings (Per tournament)</p>
                                                      <h4>0</h4>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="tournaments-slider">
                                  <div class="top-area">
                                      <h5>Active Tournaments</h5>
                                      <p class="text-sm">Tournaments I'm playing now</p>
                                  </div>
                                  <div class="tournaments-slide">
                                      <div class="single-slide">
                                          <a href="https://pixner.net/begam/tournaments-single.html"><img src="images/tournaments-slide-1.png" alt="Image"></a>
                                      </div>
                                      <div class="single-slide">
                                          <a href="https://pixner.net/begam/tournaments-single.html"><img src="images/tournaments-slide-2.png" alt="Image"></a>
                                      </div>
                                      <div class="single-slide">
                                          <a href="https://pixner.net/begam/tournaments-single.html"><img src="images/tournaments-slide-3.png" alt="Image"></a>
                                      </div>
                                      <div class="single-slide">
                                          <a href="https://pixner.net/begam/tournaments-single.html"><img src="images/tournaments-slide-2.png" alt="Image"></a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3">
                              <div class="sidebar-area">
                                  <div class="title-area">
                                      <h5>My Statistics</h5>
                                      <p class="text-sm">My Current progress</p>
                                  </div>
                                  <ul>
                                      <li>
                                          <span><img src="images/my-statistics-icon-1.png" alt="image">Avg. Finish Rank</span>
                                          <span>313</span>
                                      </li>
                                      <li>
                                          <span><img src="images/my-statistics-icon-2.png" alt="image">Total Games Played</span>
                                          <span>1193</span>
                                      </li>
                                      <li>
                                          <span><img src="images/my-statistics-icon-3.png" alt="image">Tournaments Played</span>
                                          <span>24</span>
                                      </li>
                                      <li>
                                          <span><img src="images/my-statistics-icon-4.png" alt="image">Times Paid</span>
                                          <span>10</span>
                                      </li>
                                      <li>
                                          <span><img src="images/my-statistics-icon-5.png" alt="image">Tournaments Won</span>
                                          <span>02</span>
                                      </li>
                                  </ul>
                              </div>
                              <div class="sidebar-area">
                                  <div class="title-area">
                                      <h5>Earnings</h5>
                                      <p class="text-sm">My current earnings</p>
                                  </div>
                                  <div class="parents-area">
                                      <div class="single-area d-flex align-items-center">
                                          <div class="img-area d-flex align-items-center justify-content-center">
                                              <img src="images/earnings-icon-1.png" alt="image">
                                          </div>
                                          <div class="right-area">
                                              <span><img src="images/coin-icon.png" alt="image">300</span>
                                              <p class="text-sm">Total Coins Earned</p>
                                          </div>
                                      </div>
                                      <div class="single-area d-flex align-items-center">
                                          <div class="img-area mid d-flex align-items-center justify-content-center">
                                              <img src="images/earnings-icon-2.png" alt="image">
                                          </div>
                                          <div class="right-area">
                                              <span><img src="images/coin-icon.png" alt="image">10</span>
                                              <p class="text-sm">Average Entry Fee</p>
                                          </div>
                                      </div>
                                      <div class="single-area d-flex align-items-center">
                                          <div class="img-area last d-flex align-items-center justify-content-center">
                                              <img src="images/earnings-icon-3.png" alt="image">
                                          </div>
                                          <div class="right-area">
                                              <span><img src="images/coin-icon.png" alt="image">$473.00</span>
                                              <p class="text-sm">Total Coins Earned</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Trophies Content End -->

  <!-- footer-section start -->
  @include('partials._footer')
  <!-- footer-section end -->

  @include('partials._js')

@endsection
