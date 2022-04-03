@extends('layouts.admin')

@section('content')

  <!--start page wrapper  -->

  <div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tournament</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
          </nav>
        </div>
        <
      </div>
      <!--end breadcrumb-->
      <div class="row">
        <div class="col-xl-7 mx-auto">
          <h6 class="mb-0 text-uppercase">Update Tournament</h6>
          <hr/>
          <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
              <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                </div>
                <h5 class="mb-0 text-primary">Edit Tournament</h5>
              </div>
              <hr>
              <form action="{{ route('tournament.update',$tournament->id) }}" method="POST" class="row g-3" >
                @csrf
                @method('PUT')
                <div class="col-md-6">
                  <label for="" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" value="{{ $tournament->name }}">
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Game</label>
                  <input type="text" class="form-control"  name="game" value="{{ $tournament->game }}">
                </div>


                <div class="col-md-6">
                  <label for="" class="form-label">Entry Fee</label>
                  <input type="text" class="form-control"  name="entry_fee" value="{{ $tournament->entry_fee }}">
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Video Url</label>
                  <input type="text" class="form-control"  name="video_url" value="{{ $tournament->video_url}}">
                </div>
                <div class="col-md-6">
                  <label for="" class="form-label">Prize</label>
                  <input type="text" class="form-control"  name="prize" value="{{ $tournament->prize}}">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Prize Claim</label>
                  <input type="text" class="form-control"  name="prize_claim" value="{{ $tournament->prize_claim }}">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Available Slots</label>
                  <input type="text" class="form-control"  name="slots" value="{{ $tournament->slots }}">
                </div>


                <div class="col-12">
                  <label for="" class="form-label">Description</label>
                  <textarea class="form-control"  name="description" defaultValue="{{ $tournament->description }}" rows="3"> {{ $tournament->description }}</textarea>
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Rules</label>
                  <textarea class="form-control"  name="rules" value="{{ $tournament->rules }}" rows="3"> {{ $tournament->rules }}</textarea>
                </div>
                <div class="col-12">
                  <label for="" class="form-label">Format</label>
                  <textarea class="form-control"  name="format" value="{{ $tournament->format }}" rows="3"> {{ $tournament->format }}</textarea>
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label">Enrolled</label>
                  <input type="text" class="form-control" name="enrolled" value="{{ $tournament->enrolled }}">
                </div>

                <div class="col-md-4">
                  <label for="" class="form-label">Skill Level</label>
                  <input type="text" class="form-control" name="enrolled" value="{{ $tournament->skill_level }}">
                </div>

                <div class="col-md-4">
                  <label for="" class="form-label">Team Size</label>
                  <input type="text" class="form-control" name="enrolled" value="{{ $tournament->team_size }}">
                </div>




                <div class="col-md-4">
                  <label for="" class="form-label">1st</label>
                  <input type="text" class="form-control" name="first" value="{{ $tournament->first }}" >
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label">2nd</label>
                  <input type="text" class="form-control" name="second" value="{{ $tournament->second }}">
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label">iMAGE</label>
                  <input type="text" class="form-control" name="image" value="{{ $tournament->image }}" >
                </div>
                <div class="col-md-4">
                  <label for="" class="form-label">3rd</label>
                  <input type="text" class="form-control" name="third" value="{{ $tournament->third }}" >
                </div>



                <div class="col-md-6">
                  <label class="form-label">Check In:</label>
                  <input type="time" name="check_in" class="form-control" value="{{ $tournament->check_in }}">
                </div>

                <div class=" col-md-6">
                  <label class="form-label">Start Date:</label>
                  <input type="date" name="start_date" class="form-control" value="{{ $tournament->start_date }}">
                </div>
                <div class="input-group mb-3">

                  <input type="file" class="form-control" name=""  aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                </div>
                <div class="col-12">

                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-success btn-lg px-5"><i class='bx bxs-lock-open'></i>Update</button>
                </div>


              </form>
            </div>
          </div>



      <!--end row-->
    </div>
  </div>
  <!--end page wrapper -->

@endsection
