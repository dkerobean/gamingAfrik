@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- Login Reg In start -->
<section id="login-reg">
    <div class="overlay pb-120">
        <div class="container">
            <div class="top-area">
                <div class="row d-flex align-items-center">
                    <div class="col-sm-5 col">
                        <a class="back-home" href="https://pixner.net/begam/index.html">
                            <img src="images/left-icon.png" alt="image">
                            Back To GamingAfrik
                        </a>
                    </div>
                    <div class="col-sm-5 col">
                        <a href="registration.html#">
                            <img src="images/logo.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row pt-120 d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="login-reg-main text-center">
                        <h4>Let's get started</h4>
                        <div class="form-area">
                          <form method="POST" action="{{ route('register') }}">
                              @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                  <label>Password</label>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>

                                <div class="form-group">
                                  <label>Confirm Password</label>
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="cmn-btn">Sign Up Free</button>
                                </div>
                            </form>
                            <div class="or">
                                <p>OR</p>
                            </div>
                            <div class="sign-in">
                                <p>Sign in with your</p>
                            </div>
                            <div class="reg-with">
                                <div class="social-area d-flex justify-content-center">
                                    <a href="javascript:void(0)"><img src="images/social-icon-1.png" alt="image"></a>
                                    <a class="twitch" href="javascript:void(0)"><img src="images/social-icon-2.png" alt="image"></a>
                                    <a class="google" href="javascript:void(0)"><img src="images/social-icon-3.png" alt="image"></a>
                                </div>
                            </div>
                            <div class="account">
                                <p>Already have an account? <a href="#">Sign In</a></p>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Reg In end -->

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/main.js"></script>
@endsection
