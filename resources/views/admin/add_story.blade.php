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
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h2 class="card-title mb-0 flex-grow-1" style="font-weight:700"> Add Story</h2>
                  </div>
                  <!-- end card header -->
                  <div class="card-body">
                     <div class="live-preview">
                     <form  action="{{url('admin/add_story_action')}}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="row gy-4 mt-1">
                           <div class=" col-md-4">
                              <div>
                                 <label for="borderInput" class="form-label">Story Title</label>
                                 <input type="text" name="title" required class="form-control border-dashed" id="borderInput" placeholder="Enter your name">
                              </div>
                           </div>
                           <div class=" col-md-4">
                              <div>
                                 <label for="basiInput"  class="form-label">Story Category</label>
                                 <select class="form-select mb-3 border-dashed" aria-label="Default select example" required name="category">
                                    <option selected value="">Select your Category </option>
                                    @foreach($cat as $cat) 
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                 
                                 </select>
                              </div>
                           </div>

                           <div class=" col-md-4">
                              <div>
                                 <label for="basiInput"  class="form-label">Linked By</label>
                                 <select class="form-select mb-3 border-dashed" aria-label="Default select example"  name="linked_by">
                                    <option selected value="">Select your Story </option>
                                    @foreach($story as $story) 
                                    <option value="{{$story->id}}">{{$story->title}}</option>
                                    @endforeach
                                 
                                 </select>
                              </div>
                           </div>

                           

                           <!--end col-->
                           <!--end col-->
                           <!--                               
                              <div class=" col-md-4">
                                  <div>
                                      <label for="borderInput" class="form-label">Primary Image</label>
                                      <input type="file" class="form-control border-dashed" id="borderInput" placeholder="Enter your name">
                                  </div>
                              </div>
                              -->
                        </div>
                        <!--end row-->
                        <div class="row gy-4 ">
                           <div class=" col-md-12">
                              <div >
                                 <label for="basiInput" class="form-label">Write Your Story</label>
                                
                            <textarea name="description" id="myTextarea"  >
                                As a < type of user >, I want to < some goal > so that < some reason >.
                            </textarea>
                         
                                 <!-- end Snow-editor-->
                              </div>
                              <!-- end card-body -->
                              <!-- end card -->
                           </div>


                           <div class="row gy-4 ">
                           <div class=" col-md-12">
                              <div >
                                 <label for="basiInput" class="form-label">Acceptance Criteria</label>
                                
                            <textarea name="criteria" id="myTextarea1"  >
                                Given – the beginning state of the scenario
When – specific action that the user makes
Then – the outcome of the action in “When”
And – used to continue any of three previous statements.
                            </textarea>
                         
                                 <!-- end Snow-editor-->
                              </div>
                              <!-- end card-body -->
                              <!-- end card -->
                           </div>

                           <div class="row mt-3  ">
                              <div class=" col-md-12">
                             
                             
                             <button type="submit" class="btn btn-primary lg " style="float:right;margin-left:20px;" >
                                 Add Gallery</button> 
                                 &nbsp;
                                 <button type="submit" name="name" value="1" class="btn btn-primary lg " style="float:right" >
                                 Post Story </button> 
                              </div>
                           </div>
                        </div>
</form>
                     </div>
                  </div>
               </div>
            </div>
            <!--end col-->
         </div>
         <!--end row-->
         <!-- end preloader-menu -->
      </div>
      <!-- End Page-content -->
      @include('admin.includes.footer')
      <script>
   
      tinymce.init({
        selector: '#myTextarea',
        tox_menubar: 'false',
      });
    </script>
    <script>
   
   tinymce.init({
     selector: '#myTextarea1',
     tox_menubar: 'false',
   });
 </script>
      @if (session('message'))
      <script>
         Swal.fire({
           position: 'top-end',
           icon: 'success',
           title: 'Successfully Updated',
           showConfirmButton: false,
           timer: 2500
         })
      </script>
      @endif
   </body>
   <!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
</html>