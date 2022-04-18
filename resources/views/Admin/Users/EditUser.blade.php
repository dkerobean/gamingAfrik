@extends('layouts.admin')

@section('content')

  <!--start page wrapper  -->

  <div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">USers </div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
          </nav>
        </div>
        <
      </div>
      <!--end breadcrumb-->
      <div class="row">
        <div class="col-xl-7 mx-auto">
          <h6 class="mb-0 text-uppercase">Edit USer</h6>
          <hr/>
          <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
              <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                </div>
                <h5 class="mb-0 text-primary">Update User</h5>
              </div>
              @if ($message = Session::get('success'))
                <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
                  <div class="text-white">{{ $message }}</div>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              @endif

                @if ($errors->any())
                  <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
                    <div class="text-white">{{ $errors->first() }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
              <hr>
              <form action="{{ route('users.update',$user->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                  <label for="" class="form-label">Wins</label>
                  <input type="text" class="form-control" name="wins">
                </div>

                <div class="col-md-4">
                  <label for="" class="form-label">Verified</label>
                  <select  name="is_verified" class="form-select">
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>

                  </select>
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Earnings</label>
                  <input type="text" class="form-control" name="Earnings">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Gold Trophy</label>
                  <input type="text" class="form-control" name="gold_trophy" value="{{ $user->gold_trophy }}">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Silver Trophy</label>
                  <input type="text" class="form-control" name="silver_trophy" value="{{ $user->silver_trophy }}">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Bronze Trophy</label>
                  <input type="text" class="form-control" name="bronze_trophy" value="{{ $user->bronze_trophy }}">
                </div>

                <div class="col-md-6">
                  <label for="" class="form-label">Elite Trophy</label>
                  <input type="text" class="form-control" name="elite_trophy" value="{{ $user->elite_trophy }}">
                </div>

                {{-- <div class="input-group mb-3">
								<input type="file" class="form-control" name="profile_image"  aria-describedby="inputGroupFileAddon3" aria-label="Upload" >
								</div> --}}

                <div class="col-12">
                  <button type="submit" class="btn btn-success btn-lg px-5">Update</button>
                </div>


              </form>
            </div>
          </div>



      <!--end row-->
    </div>
  </div>
  <!--end page wrapper -->

@endsection
