@extends('layouts.admin')

@section('content')

  <!--start page wrapper -->
  <div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Forms</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
          </nav>
        </div>
        <div class="ms-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
              <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <!--end breadcrumb-->
      <div class="row">
        <div class="col-xl-7 mx-auto">
          <h6 class="mb-0 text-uppercase">Create Tournament</h6>
          <hr/>
          <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
              <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                </div>
                <h5 class="mb-0 text-primary">New Tournament</h5>
              </div>
              <hr>
              <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputFirstName" class="form-label">Name</label>
                  <input type="email" class="form-control" id="inputFirstName" name="name">
                </div>
                <div class="col-md-6">
                  <label for="inputLastName" class="form-label">Game</label>
                  <input type="password" class="form-control" id="inputLastName" name="game">
                </div>

                <div class="col-md-6">
                  <label for="inputPassword" class="form-label">Available Slots</label>
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword" class="form-label">Entry Fee</label>
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword" class="form-label">Video Url</label>
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword" class="form-label">Prize</label>
                  <input type="text" class="form-control" id="inputPassword">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Description</label>
                  <textarea class="form-control" id="inputAddress" placeholder="Description..." rows="3"></textarea>
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Rules</label>
                  <textarea class="form-control" id="inputAddress2" placeholder="Rules..." rows="3"></textarea>
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Format</label>
                  <textarea class="form-control" id="inputAddress2" placeholder="Format..." rows="3"></textarea>
                </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">Enrolled</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Skill Level</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Available Slots </label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">1st</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">2nd</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputCity" class="form-label">3rd</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>

                <div class="col-md-6">
                  <label class="form-label">Check In:</label>
                  <input type="time" class="form-control">
                </div>

                <div class=" col-md-6">
                  <label class="form-label">Start Date:</label>
                  <input type="date" class="form-control">
                </div>
                <div class="input-group mb-3">

									<input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
								</div>
                <div class="col-12">
                  
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary px-5">Create Tournament</button>
                </div>
              </form>
            </div>
          </div>

      <!--end row-->
    </div>
  </div>
  <!--end page wrapper -->

@endsection
