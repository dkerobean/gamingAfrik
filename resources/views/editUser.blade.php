@extends('layouts.app')

@section('content')

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
              <div class="row ">
                  <div class="col-md-8 ">
                    @if ($message = Session::get('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success</strong> {{ $message }}
                        <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      @endif


                        {{-- @if ($errors->any())
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error</strong> {{ $errors()->first() }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true text-dark">&times;</span>
                            </button>
                          </div>
                        @endif --}}

                        <br>
                      <form action="{{ route('edit.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                          <h5>Leave your message</h5>
                          <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" placeholder="Enter username" value="{{ $user->username }}">
                            </div>

                          <div class="form-group">

                              <label for="username">Name</label>
                              <input type="text" name="Name" placeholder="Enter username" value="{{ $user->name }}">
                          </div>

                          <div class="input-group mb-3">
          								<input type="file" class="form-control cmn-btn " name="profile_image"  aria-describedby="inputGroupFileAddon3" aria-label="Upload" >
          								</div>

                          <button class="cmn-btn" type="submit">Update</button>
                      </form>
                  </div>

              </div>
          </div>
      </div>
  </section>


@endsection
