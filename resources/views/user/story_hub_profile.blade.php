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

         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               </div>
            </div>
         </div>
            <div class="profile-foreground position-relative mx-n4 mt-n4">
               <div class="profile-wid-bg">
                  <img src="{{asset('public/assets/images/profile-bg.jpg')}}" alt="" class="profile-wid-img" />
               </div>
            </div>
            <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
               <div class="row g-4">
                  <div class="col-auto">
                     <div class="avatar-lg">
                        <img src="{{asset('storage/app/' . $user->image)}}" alt="user-img" class="img-thumbnail rounded-circle" />
                     </div>
                  </div>
                  <!--end col-->
                  <div class="col">
                     <div class="p-2">
                        <h3 class="text-white mb-1">{{$user->name}}</h3>
                        <p class="text-white-75">{{$user->user_name}}</p>
                        <div class="hstack text-white-50 gap-1">
                           <div class="me-2"><i class="ri-mail-open-line me-1 text-white-75 fs-16 align-middle"></i>{{$user->email}}</div>
                           <div>
                              <i class="ri-phone-line me-1 text-white-75 fs-16 align-middle"></i>{{$user->contact}}
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end col-->
               </div>
               <!--end row-->
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div>
                     <!-- <div class="d-flex">
                      
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                        </ul>
                        <div class="flex-shrink-0">
                        <a href="{{url('user/add_story')}}" class="btn btn-success" ><i class="ri-file-history-fill align-bottom"></i> Share New Story</a>
                     
                           <a href="pages-profile-settings.html" class="btn btn-success" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                        </div>
                     </div> -->
                     <!-- Tab panes -->
                     <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                           <div class="row">
                              <div class="col-xxl-4">
                                 <div class="card" style="height:150px;">
                                    <div class="card-body">
                                       <h3 class="card-title mb-4"  style="font-weight:700">Portfolio</h3>
                                       <hr>
                                       <div class="d-flex flex-wrap gap-3" >
                                          <div>
                                             <a href="{{$user->website}}" class="avatar-xs d-block" target="blank">
                                             <span class="avatar-title rounded-circle fs-16 bg-success">
                                             <i class="ri-global-fill"></i>
                                             </span>
                                             </a>
                                          </div>
                                          <div>
                                             <a href="{{$user->facebook}}" class="avatar-xs d-block" target="blank">
                                             <span class="avatar-title rounded-circle fs-16 bg-primary">
                                             <i class="ri-facebook-fill"></i>
                                             </span>
                                             </a>
                                          </div>
                                          <div>
                                             <a href="{{$user->twitter}}" class="avatar-xs d-block" target="blank">
                                             <span class="avatar-title rounded-circle fs-16 " style="background-color:#26a7de">
                                             <i class="ri-twitter-fill" style="background-color:#26a7de"></i>
                                             </span>
                                             </a>
                                          </div>
                                          <div>
                                             <a href="{{$user->linkedin}}" class="avatar-xs d-block" target="blank">
                                             <span class="avatar-title rounded-circle fs-16 " style="background-color:#0e76a8" >
                                             <i class=" ri-linkedin-fill"></i>
                                             </span>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end card body -->
                                 </div>
                                 <!-- end card -->
                              
                              </div>
                              <!--end col-->
                              <div class="col-xxl-8">
                                 <div class="card">
                                    <div class="card-body" style="height:150px;overflow: hidden;">
                                       @error('image')
                                       <div class="alert alert-danger mb-2" id="hi" role="alert">
                                          {{$message}}
                                       </div>
                                       @enderror
                                       @error('email')
                                       <div class="alert alert-danger mb-2" id="hi" role="alert">
                                          {{$message}}
                                       </div>
                                       @enderror
                                       <h3 class="card-title mb-3" style="font-weight:700">Description</h3>
                                       <hr>
                                       <p>{{$user->description}}</p>
                                    </div>
                                    <!--end card-body-->
                                 </div>
                                 <!-- end card -->
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

       
               

                     @foreach($story as $story)
                     <div class="col-lg-12">
                        <div class="card card-body">
                           <div class="d-flex mb-4 align-items-center">
                              <div class="flex-shrink-0">
                              <a  href="{{url('user/@/' . $story->story_user->user_name )}}">  

                                 <img src="{{asset('storage/app/' . $story->story_user->image)}}" alt="" class="avatar-sm rounded-circle" />
</a>
                                </div>
                              <div class="flex-grow-1 ms-2">
                                 <h5 class="card-title mb-1">{{$story->story_user->name}}</h5>
                                 <p class="text-muted mb-0">{{$story->created_at}}</p>
                              </div>
                              <div class="" style="float:right"  >
                                             <!-- <a href="{{url('user/edit_story/'.$story->id)}}"> <i class="ri-edit-2-fill" style="color:green; font-size:20px"></i>  </a>
                                             <a href="{{url('user/story_delete/'.$story->id)}}"><i class="ri-delete-bin-fill" style="color:red; font-size:18px"></i></a>   -->
                                             @foreach($cat as $cat1) 
                                                    
                                                    @if($story->category_id == $cat1->id) 
                                                    <span style="float:right;margin-bottom:25px;"> <b> Catergory: </b> {{$cat1->name}} </span> @endif
                                                     @endforeach 
                                          
                                          </div>
                                          
                           </div>
                           <h5 class="mb-1"> <b></b>{{$story->title}} </b> </h5>
                           @php $des = Str::limit($story->description, 500); @endphp
                           <p class="card-text text-muted">
                              {!! htmlspecialchars_decode(nl2br($des )) !!}
                           </p>
                           <div class="card-footer">
                               @if(!empty($story->linked_by))
                                       <a href="{{url('user/story_hub/'.$story->linked_by)}}" class="link-success "><i class=" ri-links-line align-middle ms-1 lh-1"></i> View Reference story </a>
                                         @endif
                                          <a href="{{url('user/story_hub/'.$story->id)}}" class="link-success float-end">Read More <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                     
                                        <!-- <div id="basic-rater" dir="ltr"></div> -->
                           </div>
                        </div>
                     </div>
                     @endforeach
                
                 
                  </div>
            <!--end row-->
         </div>
         <!-- container-fluid -->
      </div>
      <!-- End Page-content -->
      <!-- End Page-content -->
      @include('user.includes.footer')
      @if (session('message1'))
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
      <script>
         $('#hi').delay(2000).slideUp(1200);
      </script>
   </body>
   <!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
</html>