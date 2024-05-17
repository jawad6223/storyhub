<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Analytics | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

    <script>
        var dropzone = new Dropzone('#file-upload', {
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            parallelUploads: 3,
            thumbnailHeight: 150,
            thumbnailWidth: 150,
            maxFilesize: 5,
            filesizeBase: 1500,
            thumbnail: function (file, dataUrl) {
                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function () {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }
        });
        
        var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;

        dropzone.uploadFiles = function (files) {
            var self = this;

            for (var i = 0; i < files.length; i++) {

                var file = files[i];
                totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                for (var step = 0; step < totalSteps; step++) {
                    var duration = timeBetweenSteps * (step + 1);
                    setTimeout(function (file, totalSteps, step) {
                        return function () { 
                            file.upload = {
                                progress: 100 * (step + 1) / totalSteps,
                                total: file.size,
                                bytesSent: (step + 1) * file.size / totalSteps
                            };

                            self.emit('uploadprogress', file, file.upload.progress, file.upload
                                .bytesSent);
                            if (file.upload.progress == 100) {
                                file.status = Dropzone.SUCCESS;
                                self.emit("success", file, 'success', null);
                                self.emit("complete", file);
                                self.processQueue();
                            }
                        };
                    }(file, totalSteps, step), duration);
                }
            }
        }

    </script>

    

@include('admin.includes.head')</head>

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
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Edit Story Gallery</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                <div class="row mb-5">

                                                        @foreach($img as $img)

                                                       <div class="col-sm-3">
                                                       <a href="{{url('admin/delete_story_gallery_img/'.$img->id)}}"><i class="ri-delete-bin-fill" style="color:red; font-size:18px;float:right"></i></a>  
                           
                                                <figure class="figure mb-0">
                                                    <img src="{{asset('public/images/'. $img->file)}}" style="height:300px;width:100%"  class="figure-img img-fluid rounded" alt="...">
                                                   
                                                </figure>
                                            </div>
                                            @endforeach
                                           

                                                       </div>
                                                       <p class="text-muted">DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.</p>
                   
                               
                                    
                  <div id="dropzone">
        <form action="{{ route('dropzoneFileUpload1') }}" class="dropzone"  id="file-upload1" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="story_id" id="post_id" value="{{$id}}">
            <div class="dz-message">
            <i class='sl sl-icon-cloud-upload'></i>  Drag and Drop Single/Multiple Files Here<br>
            </div>
        </form>
    
			  </div>
              <div class="row mt-3  ">
                              <div class=" col-md-12">
                             
                             
                           
                                 <a href="{{url('admin/profile')}}" class="btn btn-primary lg " style="float:right" >
                                Save </a> 
                              </div>
                           </div>
                           
                                    <!-- end dropzon-preview -->
                                </div>
                            <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

          
            <!-- End Page-content -->

        
  

    @include('admin.includes.footer')
    
<script src="{{asset('public/assets/js/dropzone/dropzone-script.js')}}"></script>
@if (session('message1'))
  <script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Successfully Delete',
  showConfirmButton: false,
  timer: 2500
})
</script>            
   @endif
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2023 15:33:36 GMT -->
</html>