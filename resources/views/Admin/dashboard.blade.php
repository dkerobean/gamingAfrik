@extends('layouts.admin')

@section('content')

	<!--start page wrapper -->
	<div class="page-wrapper">
	  <div class="page-content">
	    <div class="card shadow-none bg-transparent border-bottom border-2">
	      <div class="card-body">
	        <div class="row align-items-center">
	          <div class="col-md-3">
	            <h4 class="mb-3 mb-md-0">Audience Overview</h4>
	          </div>
	          <div class="col-md-9">
	            <form class="float-md-end">
	              <div class="row row-cols-md-auto g-lg-3">
	                <label for="inputFromDate" class="col-md-2 col-form-label text-md-end">From Date</label>
	                <div class="col-md-4">
	                  <input type="date" class="form-control" id="inputFromDate">
	                </div>
	                <label for="inputToDate" class="col-md-2 col-form-label text-md-end">To Date</label>
	                <div class="col-md-4">
	                  <input type="date" class="form-control" id="inputToDate">
	                </div>
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	    <div class="card shadow-none bg-transparent">
	      <div class="card-body">
	        <div id="chart1"></div>
	      </div>
	    </div>
	    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
	      <div class="col">
	        <div class="card radius-10">
	          <div class="card-body">
	            <div class="d-flex align-items-center">
	              <div>
	                <p class="mb-0">Total Users</p>
	                {{-- <h5 class="mb-0">{{ $users->count() }}</h5> --}}
	              </div>
	              <div class="dropdown ms-auto">
	                <a class="dropdown-toggle dropdown-toggle-nocaret" href="index2.html#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-dark'></i>
	                </a>
	                <ul class="dropdown-menu">
	                  <li><a class="dropdown-item" href="javascript:;">Action</a>
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
	                  </li>
	                  <li>
	                    <hr class="dropdown-divider">
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
	                  </li>
	                </ul>
	              </div>
	            </div>
	            <div class="" id="chart2"></div>
	          </div>
	        </div>
	      </div>
	      <div class="col">
	        <div class="card radius-10">
	          <div class="card-body">
	            <div class="d-flex align-items-center">
	              <div>
	                <p class="mb-0">Tournaments </p>
	                <h5 class="mb-0">{{ $tournament->count() }}</h5>
	              </div>
	              <div class="dropdown ms-auto">
	                <a class="dropdown-toggle dropdown-toggle-nocaret" href="index2.html#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-dark'></i>
	                </a>
	                <ul class="dropdown-menu">
	                  <li><a class="dropdown-item" href="javascript:;">Action</a>
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
	                  </li>
	                  <li>
	                    <hr class="dropdown-divider">
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
	                  </li>
	                </ul>
	              </div>
	            </div>
	            <div class="" id="chart3"></div>
	          </div>
	        </div>
	      </div>
	      <div class="col">
	        <div class="card radius-10">
	          <div class="card-body">
	            <div class="d-flex align-items-center">
	              <div>
	                <p class="mb-0">Avg. Session Duration</p>
	                <h5 class="mb-0">00:03:20</h5>
	              </div>
	              <div class="dropdown ms-auto">
	                <a class="dropdown-toggle dropdown-toggle-nocaret" href="index2.html#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-dark'></i>
	                </a>
	                <ul class="dropdown-menu">
	                  <li><a class="dropdown-item" href="javascript:;">Action</a>
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
	                  </li>
	                  <li>
	                    <hr class="dropdown-divider">
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
	                  </li>
	                </ul>
	              </div>
	            </div>
	            <div class="" id="chart4"></div>
	          </div>
	        </div>
	      </div>
	      <div class="col">
	        <div class="card radius-10">
	          <div class="card-body">
	            <div class="d-flex align-items-center">
	              <div>
	                <p class="mb-0">Bounce Rate</p>
	                <h5 class="mb-0">51.46%</h5>
	              </div>
	              <div class="dropdown ms-auto">
	                <a class="dropdown-toggle dropdown-toggle-nocaret" href="index2.html#" data-bs-toggle="dropdown">	<i class='bx bx-dots-horizontal-rounded font-22 text-dark'></i>
	                </a>
	                <ul class="dropdown-menu">
	                  <li><a class="dropdown-item" href="javascript:;">Action</a>
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Another action</a>
	                  </li>
	                  <li>
	                    <hr class="dropdown-divider">
	                  </li>
	                  <li><a class="dropdown-item" href="javascript:;">Something else here</a>
	                  </li>
	                </ul>
	              </div>
	            </div>
	            <div class="" id="chart5"></div>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!--end row-->

	    <!--end row-->

	  </div>
	</div>
	<!--end page wrapper -->


@endsection
