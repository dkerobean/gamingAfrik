@extends('layouts.admin')


@section('content')

  <!--start page wrapper -->
  <div class="page-wrapper">
    <div class="page-content">
      <!--start email wrapper-->
      <div class="email-wrapper">
        <div class="email-sidebar">
          <div class="email-sidebar-header d-grid"> <a href="javascript:;" class="btn btn-primary compose-mail-btn"><i class='bx bx-plus me-2'></i> Compose</a>
          </div>
          <div class="email-sidebar-content">
            <div class="email-navigation">
              <div class="list-group list-group-flush"> <a href="app-emailbox.html" class="list-group-item active d-flex align-items-center"><i class='bx bxs-inbox me-3 font-20'></i><span>Inbox</span><span class="badge bg-primary rounded-pill ms-auto">{{ $contacts->count() }}</span></a>
                <a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-star me-3 font-20'></i><span>Starred</span></a>
                <a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-alarm-snooze me-3 font-20'></i><span>Snoozed</span></a>
                <a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-send me-3 font-20'></i><span>Sent</span></a>
                <a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-file-blank me-3 font-20'></i><span>Drafts</span><span class="badge bg-primary rounded-pill ms-auto">4</span></a>
                <a href="javascript:;" class="list-group-item d-flex align-items-center"><i class='bx bxs-bookmark me-3 font-20'></i><span>Important</span></a>

              </div>
            </div>

          </div>
        </div>
        <div class="email-header d-xl-flex align-items-center">
          <div class="d-flex align-items-center">
            <div class="email-toggle-btn"><i class='bx bx-menu'></i>
            </div>
            <div class="btn btn-white">
              <input class="form-check-input" type="checkbox">
            </div>
            <div class="">
              <button type="button" class="btn btn-white ms-2"><i class='bx bx-refresh me-0'></i>
              </button>
            </div>
            <div class="">
              <button type="button" class="btn btn-white ms-2"><i class='bx bx-downvote me-0'></i>
              </button>
            </div>
            <div class="d-none d-md-flex">
              <button type="button" class="btn btn-white ms-2"><i class='bx bx-file me-0'></i>
              </button>
            </div>
            <div class="">
              <button type="button" class="btn btn-white ms-2"><i class='bx bx-trash me-0'></i>
              </button>
            </div>
          </div>
          <div class="flex-grow-1 mx-xl-2 my-2 my-xl-0">
            <div class="input-group">	<span class="input-group-text bg-transparent"><i class="bx bx-search"></i></span>
              <input type="text" class="form-control" placeholder="Search mail">
            </div>
          </div>
          <div class="ms-auto d-flex align-items-center">
            <button class="btn btn-sm btn-light">1-50 of 8,740</button>
            <button class="btn btn-white px-2 ms-2"><i class='bx bx-chevron-left me-0'></i>
            </button>
            <button class="btn btn-white px-2 ms-2"><i class='bx bx-chevron-right me-0'></i>
            </button>
          </div>
        </div>
        <div class="email-content">
          <div class="">
            <div class="email-list">

              @if ($message = Session::get('success'))
      					<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
      						<div class="text-white">{{ $message }}</div>
      						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      					</div>
      				@endif


      					@if ($errors->any())
      						<div class="alert alert-danger border-0 bg-primary alert-dismissible fade show">
      							<div class="text-white">{{ $errors->first() }}</div>
      							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      						</div>
      					@endif

              @foreach ($contacts as $contact)


              <a href="{{ route('contacts.show', $contact->id) }}">
                <div class="d-md-flex align-items-center email-message px-3 py-1 bg-body">
                  <div class="d-flex align-items-center email-actions">
                    <form class="" action="{{ route('contacts.destroy', $contact->id) }}" method="post">
                      @csrf
                      @method('DELETE')

                    </form>
                    <input class="form-check-input" type="checkbox" value="" /> <i class='bx bx-star font-20 mx-2 email-star'></i>
                    <p class="mb-0"><b>{{$contact->name}}</b>
                    </p>
                  </div>
                  <div class="">
                    <p class="mb-0">{{ $contact->message }}</p>
                  </div>
                  <div class="ms-auto">
                    <p class="mb-0 email-time">{{ $contact->created_at->diffForHumans() }}</p>
                  </div>
                </div>
              </a>

              @endforeach

            </div>
          </div>
        </div>
        <!--start compose mail-->
        <div class="compose-mail-popup">
          <div class="card">
            <div class="card-header bg-dark text-white py-2 cursor-pointer">
              <div class="d-flex align-items-center">
                <div class="compose-mail-title">New Message</div>
                <div class="compose-mail-close ms-auto">x</div>
              </div>
            </div>
            <div class="card-body">
              <div class="email-form">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="To" />
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Subject" />
                </div>
                <div class="mb-3">
                  <textarea class="form-control" placeholder="Message" rows="10" cols="10"></textarea>
                </div>
                <div class="mb-0">
                  <div class="d-flex align-items-center">
                    <div class="">
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">Action</button>
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">	<a class="dropdown-item" href="javascript:;">Action</a>
                          <a class="dropdown-item" href="javascript:;">Another action</a>
                          <a class="dropdown-item" href="javascript:;">Something else here</a>
                          <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                        </div>
                      </div>
                    </div>
                    <div class="ms-2">
                      <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-text-format"></i>
                      </button>
                      <button type="button" class="btn border-0 btn-sm btn-white"><i class='bx bx-link-alt'></i>
                      </button>
                      <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-emoji-tounge"></i>
                      </button>
                      <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-google-drive"></i>
                      </button>
                    </div>
                    <div class="ms-auto">
                      <button type="button" class="btn border-0 btn-sm btn-white"><i class="lni lni-trash"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end compose mail-->
        <!--start email overlay-->
        <div class="overlay email-toggle-btn-mobile"></div>
        <!--end email overlay-->
      </div>
      <!--end email wrapper-->
    </div>
  </div>
  <!--end page wrapper -->

@endsection
