<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Analytics | Velzon - user & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose user & Dashboard Template" name="description" />
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
                    <div class="profile-foreground position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg">
                            <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                        </div>
                    </div>
                    <div class="pt-4 ">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="avatar-lg">
                                    <img  src="{{asset('storage/app/' . $story->story_user->image)}}"  alt="user-img" class="img-thumbnail rounded-circle" />
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-md-8">
                                <div class="p-2">
                                    <h3 class="text-white mb-1">{{$story->story_user->name}}</h3>
                                    <div class="hstack text-white-50 gap-1">
                                        <div class="me-2">{{$story->created_at}}</div>
                                     
                                    </div>
                                   
                                 
                                </div>
                            </div>
                         

                        </div>
                        <!--end row-->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                            <div class="d-flex">
                                    <!-- Nav tabs -->
                                   
                                    <div style="margin-left:auto">
                                        <a href="{{url('user/edit_story/'.$story->id)}}" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Story</a>
                                    </div>
                                    &nbsp; 
                                    <div class="flex-shrink-0">
                                        <a href="{{url('user/story_delete/'.$story->id)}}" class="btn btn-danger"><i class="ri-delete-bin-fill align-bottom"></i> Delete Story</a>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                           
                                            <!--end col-->
                                            <div class="col-xxl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                    <h5 class="mb-1"> <b></b> Title : </b>{{$story->title}} 
                                                
                                                @foreach($cat as $cat) 
                                                @if($story->category_id == $cat->id) 

                                                   <span style="float:right"> <b>  Catergory: </b> {{$cat->name}}  </span> @endif
                                                    @endforeach 

                                                </h5>
                                                <br>
                                                <h5> Story </h5>
                                                    <p>{!! htmlspecialchars_decode(nl2br($story->description)) !!}</p>
<h6>Acceptance Criteria</h6>
                                                    <p>{!! htmlspecialchars_decode(nl2br($story->criteria)) !!}</p>

                                                   
                                                    <div class="row gallery">
                                                        @foreach($img as $img)
                                                        <div class="element-item col-sm-6 col-md-4 col-lg-3 project designing development" data-category="designing development">
                                                    <div class="gallery-box card">
                                                        <div class="gallery-container">
                                                            <a class="image-popup" href="{{asset('public/images/'. $img->file)}}" title="">
                                                                <img class="gallery-img img-fluid mx-auto" src="{{asset('public/images/'. $img->file)}}" alt="" />
                                                                <div class="gallery-overlay">
                                                                    <!-- <h5 class="overlay-caption">Glasses and laptop from above</h5> -->
                                                                </div>
                                                            </a>
                                                        </div>

                                                    
                                                    </div>
                                                </div>
                                                @endforeach
                                           
                                            @if(!empty($story->linked_by))
                                                        <div class="card-footer">
                                          
                                       <a href="{{url('user/story_hub/'.$story->linked_by)}}" class="link-success float-end"><i class=" ri-links-line align-middle ms-1 lh-1"></i> View Reference story </a>
                                        
                                      
                                          <!-- <div id="basic-rater" dir="ltr"></div> -->
                                       </div>
                                       
                                       @endif 
                                                        
                                                       </div>
                                                    </div>
                                                    <!--end card-body-->
                                                </div><!-- end card -->

                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                   
                                </div>
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

            <!-- End Page-content -->

            
    @include('user.includes.footer')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
</html>