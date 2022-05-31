@extends('layouts.app')

@section('content')

  <!-- start preloader -->
  <div class="preloader" id="preloader"></div>
  <!-- end preloader -->

  <a href="contact.html#" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>

  <!-- header-section start -->
    @include('partials._head')
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
                          <h1>Contact</h1>
                          <div class="breadcrumb-area">
                              <nav aria-label="breadcrumb">
                                  <ol class="breadcrumb d-flex justify-content-center">
                                      <li class="breadcrumb-item"><a href="">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

  <!-- Contact Start -->






  <section id="contact-section" class="pt-120 pb-120">
      <div class="overlay">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-10">
                      <div class="section-header text-center">
                          <h5>CONTACT US</h5>
                          <h2 class="title">Get in touch today!</h2>
                          <p>We're here to support your dreams. We're here to help</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-8">
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

                        <br>
                      <form action="{{ route('contacts.store') }}" method="POST">
                        @csrf
                          <h5>Leave your message</h5>
                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" placeholder="Enter your Name">
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" name="email" placeholder="Enter your email">
                          </div>
                          <div class="form-group">
                              <label for="email">Message</label>
                              <textarea rows="6" name="message" placeholder="Enter your message"></textarea>
                          </div>
                          <button class="cmn-btn" type="submit">Submit Now</button>
                      </form>
                  </div>
                  <div class="col-md-4">
                      <div class="right-sidebar">
                          <h6 class="head-area">More Information</h6>
                          <div class="single-area d-flex align-items-center">
                              <div class="img-area">
                                  <img src="images/email-icon.png" alt="image">
                              </div>
                              <div class="right-area">
                                  <h6>Email</h6>
                                  <p class="text-sm"><a href="" class="__cf_email__" data-cfemail="6e0c0b090f032e09030f0702400d0103">[email&#160;protected]</a></p>
                              </div>
                          </div>
                          <div class="single-area d-flex align-items-center">
                              <div class="img-area">
                                  <img src="images/phone-icon.png" alt="image">
                              </div>
                              <div class="right-area">
                                  <h6>Phone</h6>
                                  <p class="text-sm">(123) 456 - 7890</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Contact End -->

  <!-- footer-section start -->
  @include('partials._footer')
  <!-- footer-section end -->

  <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.5.1.min.js"></script>
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
