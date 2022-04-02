@extends('layouts.admin')

@section('content')

  <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tournaments</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">View Tournament</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">

                <a href="{{ route('tournament.create') }}" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Create Tournament</a>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">View Tournament</h6>
				<hr/>

				<!--end row-->
				<h6 class="mb-0 text-uppercase">Card with list group</h6>
				<hr/>
				<div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 row-cols-xl-3">
					<div class="col">
						<div class="card">
							<img src="assets/images/gallery/05.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
							<div class="card-body">	<a href="#" class="card-link"></a>

								<a href="javascript:;" class="btn btn-primary">Update</a>
								<a href="javascript:;" class="btn btn-danger">Update</a>

							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/gallery/06.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
							<div class="card-body">	<a href="#" class="card-link"></a>

								<a href="javascript:;" class="btn btn-primary">Update</a>
								<a href="javascript:;" class="btn btn-danger">Update</a>

							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assets/images/gallery/07.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Cras justo odio</li>
								<li class="list-group-item">Dapibus ac facilisis in</li>
								<li class="list-group-item">Vestibulum at eros</li>
							</ul>
							<div class="card-body">	<a href="#" class="card-link"></a>

								<a href="javascript:;" class="btn btn-primary">Update</a>
								<a href="javascript:;" class="btn btn-danger">Update</a>

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
