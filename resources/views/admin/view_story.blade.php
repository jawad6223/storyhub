<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
   <!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
   <head>
      <meta charset="utf-8" />
      <title>Analytics | Velzon - admin & Dashboard Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose admin & Dashboard Template" name="description" />
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

               <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               </div>
            </div>
         </div>

                  <div class="row">
                
                                 <!--end col-->
                                 <div class="col-md-8">
                                  
                                    @foreach($story as $story)

                                 
                               
                                    <div class="card card-body">
                                       <div class="d-flex mb-4 align-items-center">
                                          <div class="flex-shrink-0">
                                             <a  href="{{url('admin/@/' . $story->story_user->user_name )}}">  
                                             <img src="{{asset('storage/app/' . $story->story_user->image)}}"  alt="" class="avatar-sm rounded-circle" /> </a>
                                          </div>
                                          <div class="flex-grow-1 ms-2">
                                             <a  href="{{url('admin/@/' . $story->story_user->user_name )}}">
                                                <h5 class="card-title mb-1">{{$story->story_user->name}}</h5>
                                             </a>
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
                                       <h5 class="mb-1"> <b></b>{{$story->title}} </b> 
                                  

                                    </h5>
                                      
                                       <p class="card-text text-muted">

                                       @php $des = htmlspecialchars_decode(nl2br($story->description)) 
                                   
                                  
                                    @endphp

                                    {!! Str::limit(strip_tags($story->description), 400) !!}
                                    <!-- {!! html_entity_decode($story->description) !!} -->

                                      <!-- {{ Str::limit($des, 500) }} -->
                                          <!-- {!! htmlspecialchars_decode(nl2br($des)) !!} -->
                                       </p>
                                       <div class="card-footer">
                                          @if(!empty($story->linked_by))
                                       <a href="{{url('admin/story_hub/'.$story->linked_by)}}" class="link-success "><i class=" ri-links-line align-middle ms-1 lh-1"></i> View Reference story </a>
                                         @endif
                                          <a href="{{url('admin/story_hub/'.$story->id)}}" class="link-success float-end">Read More <i class="ri-arrow-right-s-line align-middle ms-1 lh-1"></i></a>
                                         
                                          <!-- <div id="basic-rater" dir="ltr"></div> -->
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                                 <!--end col-->
                                 <div class="col-md-4">
                                    <div class="card">
                                       <div class="card-header align-items-center d-flex">
                                          <h2 class="card-title mb-0 flex-grow-1" style="font-weight:700">Search Filter</h2>
                                       </div>
                                       <!-- end card header -->
                                       <div class="card-body">
                                          <div class="live-preview">
                                             <form  action="{{url('admin/story_search')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row gy-4 ">
                                                   <div class=" col-md-12">
                                                      <div>
                                                         <label for="borderInput" class="form-label">Tags</label>
                                                         <input type="text" name="tag" class="form-control border-dashed" id="borderInput" placeholder="Enter your name">
                                                      </div>
                                                   </div>
                                                   <div class=" col-md-12">
                                                      <label for="basiInput" class="form-label" >Category</label>
                                                      <select class="form-select mb-3 border-dashed" name="category" aria-label="Default select example">
                                                         <option  value="">Select your Category </option>
                                                         @foreach($cat as $cat) 
                                                         <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                         @endforeach
                                                      </select>
                                                   </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary lg " style="float:right" >
                                                Search </button> 
                                             </form>
                                          </div>
                                       </div>
                                       <!--end row-->
                                    </div>
                                 </div>
                         
                        <!--end tab-content-->
                     </div>
                  </div>
                  <!--end col-->
               </div>
            </div>
            <!--end row-->
         </div>
         <!-- container-fluid -->
      </div>
      <!-- End Page-content -->
      <!-- End Page-content -->
      @include('admin.includes.footer')
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