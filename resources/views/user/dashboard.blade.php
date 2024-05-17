<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Analytics | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
   
    @include('user.includes.head')

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    @include('user.includes.topbar')

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

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
            @include('user.includes.sidebar')
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
                                                <h4 class="fs-16 mb-1">Wellcome Back, Anna!</h4>
                                                <p class="text-muted mb-0">Here's what's happening with StoryHub today.</p>
                                            </div>
                                            <div class="mt-3 mt-lg-0">
                                                <form action="javascript:void(0);">
                                                    <div class="row g-3 mb-0 align-items-center">
            
                                                        <div class="col-auto">
                                                            <button type="button" class="btn btn-soft-success" href="url('user/add_story')"><i class="ri-add-circle-line align-middle me-1"></i> Add Story</button>
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
                                        </div><!-- end card header -->
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
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Total Stories</p>
                                                    </div>
                                                  
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-2">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="559.25">0</span> </h4>
                                                        <a href="{{url('user/view_story')}}" class="text-decoration-underline">See Details</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary rounded fs-3">
                                                            <i class="bx ri-red-packet-fill text-primary " ></i>
                                                        </span> 
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

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
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="559.25">0</span> </h4>
                                                        <a href="{{url('user/view_story')}}" class="text-decoration-underline">See Details</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary rounded fs-3">
                                                            <i class="bx ri-folder-history-fill text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
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
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-2"><span class="counter-value" data-target="559.25">0</span></h4>
                                                        <a href="{{url('user/view_story')}}" class="text-decoration-underline">See Details</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary rounded fs-3">
                                                            <i class="bx ri-folder-history-fill text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                   
                                </div> <!-- end row-->


                            

                                <div class="row">
                          
                                    <h3 class="card-title mb-3 " style="font-weight:700">Recent Stories</h3>
                           

                 <div class="col-xl-6">
                     <div class="card">
                       <!-- end card header -->
                         <div class="card-body">
                         <div class="" style="float:right"  >
                            
                            <i class="ri-edit-2-fill" style="color:green; font-size:20px"></i>  
                            <i class="ri-delete-bin-fill" style="color:red; font-size:18px"></i>
                        </div>

                                 <div class="live-preview">
                                 <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                     <div class="carousel-inner" role="listbox">
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-7.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Sunrise above a beach</h5>
                                                 <p>You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item active">
                                             <img src="{{asset('public/assets/images/small/img-2.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Working from home little spot</h5>
                                                 <p>Consistency piques people’s interest is that it has become more and more popular over the years, which is excellent.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-9.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Dramatic clouds at the Golden Gate Bridge</h5>
                                                 <p>Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each letter.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                     </a>
                                     <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                     </a>
                                 </div>
                             </div>
                          
                         </div><!-- end card-body -->
                         <div class="card-footer">
                                     <a href="{{url('user/story_detail')}}" class="link-success float-end">Read More <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                     <div id="basic-rater" dir="ltr"></div>
                                 </div>
                                 
                     </div><!-- end card -->
                 </div>
                 <!--end col-->

                 <div class="col-xl-6">
                     <div class="card">
                       <!-- end card header -->
                         <div class="card-body">
                         <div class="" style="float:right"  >
                            
                            <i class="ri-edit-2-fill" style="color:green; font-size:20px"></i>  
                            <i class="ri-delete-bin-fill" style="color:red; font-size:18px"></i>
                        </div>

                                 <div class="live-preview">
                                 <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                     <div class="carousel-inner" role="listbox">
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-7.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Sunrise above a beach</h5>
                                                 <p>You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item active">
                                             <img src="{{asset('public/assets/images/small/img-2.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Working from home little spot</h5>
                                                 <p>Consistency piques people’s interest is that it has become more and more popular over the years, which is excellent.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-9.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Dramatic clouds at the Golden Gate Bridge</h5>
                                                 <p>Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each letter.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                     </a>
                                     <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                     </a>
                                 </div>
                             </div>
                          
                         </div><!-- end card-body -->
                         <div class="card-footer">
                                     <a href="{{url('user/story_detail')}}" class="link-success float-end">Read More <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                     <div id="basic-rater" dir="ltr"></div>
                                 </div>
                                 
                     </div><!-- end card -->
                 </div>
                 <div class="col-xl-6">
                     <div class="card">
                       <!-- end card header -->
                         <div class="card-body">
                         <div class="" style="float:right"  >
                            
                            <i class="ri-edit-2-fill" style="color:green; font-size:20px"></i>  
                            <i class="ri-delete-bin-fill" style="color:red; font-size:18px"></i>
                        </div>

                                 <div class="live-preview">
                                 <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                     <div class="carousel-inner" role="listbox">
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-7.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Sunrise above a beach</h5>
                                                 <p>You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item active">
                                             <img src="{{asset('public/assets/images/small/img-2.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Working from home little spot</h5>
                                                 <p>Consistency piques people’s interest is that it has become more and more popular over the years, which is excellent.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-9.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Dramatic clouds at the Golden Gate Bridge</h5>
                                                 <p>Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each letter.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                     </a>
                                     <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                     </a>
                                 </div>
                             </div>
                          
                         </div><!-- end card-body -->
                         <div class="card-footer">
                                     <a href="{{url('user/story_detail')}}" class="link-success float-end">Read More <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                     <div id="basic-rater" dir="ltr"></div>
                                 </div>
                                 
                     </div><!-- end card -->
                 </div>
                 <div class="col-xl-6">
                     <div class="card">
                       <!-- end card header -->
                         <div class="card-body">
                         <div class="" style="float:right"  >
                            
                            <i class="ri-edit-2-fill" style="color:green; font-size:20px"></i>  
                            <i class="ri-delete-bin-fill" style="color:red; font-size:18px"></i>
                        </div>

                                 <div class="live-preview">
                                 <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
                                     <div class="carousel-inner" role="listbox">
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-7.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Sunrise above a beach</h5>
                                                 <p>You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item active">
                                             <img src="{{asset('public/assets/images/small/img-2.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Working from home little spot</h5>
                                                 <p>Consistency piques people’s interest is that it has become more and more popular over the years, which is excellent.</p>
                                             </div>
                                         </div>
                                         <div class="carousel-item">
                                             <img src="{{asset('public/assets/images/small/img-9.jpg')}}" alt="" class="d-block img-fluid mx-auto">
                                             <div class="carousel-caption text-white-50">
                                                 <h5 class="text-white">Dramatic clouds at the Golden Gate Bridge</h5>
                                                 <p>Increase or decrease the letter spacing depending on the situation and try, try again until it looks right, and each letter.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Previous</span>
                                     </a>
                                     <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                         <span class="sr-only">Next</span>
                                     </a>
                                 </div>
                             </div>
                          
                         </div><!-- end card-body -->
                         <div class="card-footer">
                                     <a href="{{url('user/story_detail')}}" class="link-success float-end">Read More <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                     <div id="basic-rater" dir="ltr"></div>
                                 </div>
                                 
                     </div><!-- end card -->
                 </div>
             </div>
             <!--end row-->

                                    </div> <!-- .col-->
                                </div> <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->

                       
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <!-- End Page-content -->

           

  

    @include('user.includes.footer')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
</html>