@extends('layouts.admin')

@section('content')

  <!--start page wrapper -->
  		    <div class="page-wrapper">
              <div class="page-content">
                  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">



                  </div>
                  <!--end row-->
                  <div class="row row-cols-1 row-cols-xl-2">


                  </div>

                  <div class="card radius-10">
                      <div class="card-body">
                          <div class="d-flex align-items-center">
                              <div>
                                  <h5 class="mb-0">All Users</h5>
                              </div>
                              <div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
                              </div>
                          </div>
                          <hr/>
                          <div class="table-responsive">
                              <table class="table align-middle mb-0">
                                  <thead class="table-light">
                                      <tr>
                                          <th>Username</th>
                                          <th>Name</th>
                                          <th>Wins</th>
                                          <th>Date Joined</th>
                                          <th>Is Verified</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                    @foreach($users as $user)
                                      <tr>
                                          <td>{{ $user->username }}</td>
                                          <td>
                                              <div class="d-flex align-items-center">
                                                  <div class="recent-product-img">
                                                      <img src="assets/images/icons/tshirt.png" alt="">
                                                  </div>
                                                  <div class="ms-2">
                                                      <h6 class="mb-1 font-14">{{ $user->name }}</h6>
                                                  </div>
                                              </div>
                                          </td>
                                          <td>{{ $user->wins }}</td>
                                          <td>{{ $user->created_at->diffForhumans() }}</td>
                                          <td>$96.00</td>
                                          <td>
                                              <div class="d-flex align-items-center text-danger"> <i class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
                                                  <span>Pending</span>
                                              </div>
                                          </td>
                                          <td>

                                              <div class="d-flex order-actions">  <a href="{{ route('users.edit',$user->id) }}" class=""><i class="bx bx-edit"></i></a>
                                                  <a href="{{ route('users.edit',$user->id) }}" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
                                              </div>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
    </div>


@endsection
