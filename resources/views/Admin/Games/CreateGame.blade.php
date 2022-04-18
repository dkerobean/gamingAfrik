@extends('layouts.admin')

@section('content')

  <!--start page wrapper  -->

  <div class="page-wrapper">
    <div class="page-content">
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Forms </div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
          </nav>
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
                <h5 class="mb-0 text-primary">New Game</h5>
              </div>
              <hr>
              <form action="{{ route('games.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">

                @csrf
                <div class="col-md-6">
                  <label for="" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>

                <div class="input-group mb-3">
								<input type="file" class="form-control" name="image"  aria-describedby="inputGroupFileAddon3" aria-label="Upload" >
								</div>

                <div class="col-12">
                  <button type="submit" class="btn btn-success btn-lg px-5">Create</button>
                </div>


              </form>
            </div>
          </div>



      <!--end row-->
    </div>
  </div>
  <!--end page wrapper -->

@endsection
