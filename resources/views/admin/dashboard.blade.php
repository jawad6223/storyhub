<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
   <!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
   <head>
      <meta charset="utf-8" />
      <title>Analytics | Velzon - Admin & Dashboard Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      @include('admin.includes.head')
   </head>
   <body>
      <!-- Begin page -->
      <div id="layout-wrapper">
      @include('admin.includes.topbar')
      <!-- removeNotificationModal -->
      <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
               </div>
               <div class="modal-body">
                  <div class="mt-2 text-center">
                     <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                     <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                     </div>
                  </div>
                  <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                     <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                  </div>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
         <!-- LOGO -->
         <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
            <img src="{{asset('public/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
            <img src="{{asset('public/assets/images/logo-dark.png')}}" alt="" height="17">
            </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
            <img src="{{asset('public/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
            <img src="{{asset('public/assets/images/logo-light.png')}}" alt="" height="17">
            </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
            </button>
         </div>
         <div id="scrollbar">
            @include('admin.includes.sidebar')
            <!-- Sidebar -->
         </div>
         <div class="sidebar-background"></div>
      </div>
      <!-- Left Sidebar End -->
      <!-- Vertical Overlay-->
      <div class="vertical-overlay"></div>
      <!-- ============================================================== -->
      <!-- Start right Content here -->
      <!-- ============================================================== -->
      <div class="main-content">
      <div class="page-content">
         <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
               <div class="col-12">
                  <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  </div>
               </div>
            </div>
            <!-- end page title -->
            <div class="row">
               <div class="col">
                  <div class="h-100">
                     <div class="row mb-3 pb-1">
                        <div class="col-12">
                           <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                              <div class="flex-grow-1">
                                 <h4 class="fs-16 mb-1">Wellcome Back, {{Auth::user()->name}}!</h4>
                                 <p class="text-muted mb-0">Here's what's happening with StoryHub today.</p>
                              </div>
                              <div class="mt-3 mt-lg-0">
                                 <form action="javascript:void(0);">
                                    <div class="row g-3 mb-0 align-items-center">
                                       <div class="col-auto">
                                       <a href="{{url('admin/add_story')}}">
                                          <button type="button" class="btn btn-soft-success" > <i class="ri-add-circle-line align-middle me-1"></i> Share New Story</button> </a>
                                       </div>
                                       <!--end col-->
                                       <div class="col-auto">
                                          <button type="button" class="btn btn-soft-info btn-icon waves-effect waves-light layout-rightside-btn"><i class="ri-pulse-line"></i></button>
                                       </div>
                                       <!--end col-->
                                    </div>
                                    <!--end row-->
                                 </form>
                              </div>
                           </div>
                           <!-- end card header -->
                        </div>
                        <!--end col-->
                     </div>
                     <!--end row-->
                     <div class="row">
                        <div class=" col-md-4">
                           <!-- card -->
                           <div class="card card-animate">
                              <div class="card-body">
                                 <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                       <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Subscribers</p>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-end justify-content-between mt-2">
                                    <div>
                                       <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="{{$total_sub}}">0</span></h4>
                                       <a href="{{url('admin/active_sub')}}" class="text-decoration-underline">See Details</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-success rounded fs-3">
                                       <i class="bx ri-team-fill text-success " ></i>
                                       </span> 
                                    </div>
                                 </div>
                              </div>
                              <!-- end card body -->
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=" col-md-4">
                           <!-- card -->
                           <div class="card card-animate">
                              <div class="card-body">
                                 <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                       <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Active Subscribers</p>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-end justify-content-between mt-2">
                                    <div>
                                       <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="{{$active_sub}}">0</span> </h4>
                                       <a href="{{url('admin/active_sub')}}" class="text-decoration-underline">See Details</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-warning rounded fs-3">
                                       <i class="bx bx-user-circle text-warning"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <!-- end card body -->
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=" col-md-4">
                           <!-- card -->
                           <div class="card card-animate">
                              <div class="card-body">
                                 <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                       <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Block Subscribers</p>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-end justify-content-between mt-2">
                                    <div>
                                       <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="{{$block_sub}}">0</span> </h4>
                                       <a href="{{url('admin/active_sub')}}" class="text-decoration-underline">See Details</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-danger rounded fs-3">
                                       <i class="bx bx-user-circle text-danger"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <!-- end card body -->
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                     </div>
                     <!-- end row-->
                     <div class="row">
                        <div class=" col-md-4">
                           <!-- card -->
                           <div class="card card-animate">
                              <div class="card-body">
                                 <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                       <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Stories</p>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-end justify-content-between mt-2">
                                    <div>
                                       <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="{{$total_story}}">0</span> </h4>
                                       <a href="{{url('admin/view_story')}}" class="text-decoration-underline">See Details</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-primary rounded fs-3">
                                       <i class="bx ri-red-packet-fill text-primary " ></i>
                                       </span> 
                                    </div>
                                 </div>
                              </div>
                              <!-- end card body -->
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=" col-md-4">
                           <!-- card -->
                           <div class="card card-animate">
                              <div class="card-body">
                                 <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                       <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My Stories</p>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-end justify-content-between mt-2">
                                    <div>
                                       <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="{{$my_story}}">0</span> </h4>
                                       <a href="{{url('admin/profile')}}" class="text-decoration-underline">See Details</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-primary rounded fs-3">
                                       <i class="bx ri-folder-history-fill text-primary"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <!-- end card body -->
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                        <div class=" col-md-4">
                           <!-- card -->
                           <div class="card card-animate">
                              <div class="card-body">
                                 <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                       <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Other Stories</p>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-end justify-content-between mt-2">
                                    <div>
                                       <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="{{$other_story}}">0</span></h4>
                                       <a href="{{url('admin/view_story')}}" class="text-decoration-underline">See Details</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                       <span class="avatar-title bg-soft-primary rounded fs-3">
                                       <i class="bx ri-folder-history-fill text-primary"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <!-- end card body -->
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                     </div>
                
                     <div class="row">
                      

                      <div class="col-xl-12">
                          <div class="card">
                              <div class="card-header align-items-center d-flex">
                                  <h4 class="card-title mb-0 flex-grow-1">Recent Subscribers</h4>
                                
                              </div><!-- end card header -->

                              <div class="card-body">
                                          <div class="live-preview">
                                      <div class="table-responsive">
                                          <table class="table table-striped table-nowrap align-middle mb-0">
                                              <thead>
                                                  <tr>
                                                      <th scope="col">ID</th>
                                                      <th scope="col">Name</th>
                                                      <th scope="col">User Name</th>
                                                      <th scope="col">Email</th>
                                                      <th scope="col">Contact</th>
                                                     
                                                      <th scope="col">Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                              @php $count=1; @endphp 
                                              @foreach($user as $user)

                                                  <tr>
                                                      <td class="fw-medium">{{$count++}}</td>
                                                      <td>{{$user->name}}</td>
                                                      <td>{{$user->user_name}}</td>
                                                      <td>{{$user->email}}</td>
                                                      <td>{{$user->contact}}</td>

                                                           
                                                      <td>
                                                          
                                                      <a href="{{url('admin/@/' . $user->user_name )}}">   <i class=" ri-information-fill" style="color:green; font-size:18px"></i> </a> 
                                                      <a href="{{url('admin/delete_sub/' . $user->id)}}" onClick="return confirm('Are you sure?')">  <i class="ri-delete-bin-fill" style="color:red; font-size:18px"> </i> </a>
                                                  </td>
                                                  </tr>
                                            
                                                 @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                                  
                              </div><!-- end card-body -->
                          </div><!-- end card -->
                      </div>
                      <!-- end col -->
                  </div>
                  <!-- end row -->

                  </div>
                  <!-- end .h-100-->
               </div>
               <!-- end col -->
            </div>
         </div>
         <!-- container-fluid -->
      </div>
      <!-- End Page-content -->
      <!-- End Page-content -->

      @include('admin.includes.footer')
      @if (session('message'))
      <script>
         Swal.fire({
           position: 'top-end',
           icon: 'success',
           title: 'Successfully',
           showConfirmButton: false,
           timer: 2500
         })
      </script>
      @endif
   </body>
   <!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
</html>