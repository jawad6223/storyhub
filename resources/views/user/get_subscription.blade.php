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
         
            <div class="row">
               <div class="col-xxl-12">
                  <div class="card card-height-100 ">
                     <div class="card-header">
                        <h5 class="card-title mb-0">Subscription</h5>
                     </div>
                     <div class="card-body">
                        <div class="mx-auto" style="max-width: 350px">
                           <div class="text-bg-info bg-gradient p-4 rounded-3 mb-3">
                              <div class="d-flex">
                                 <div class="flex-grow-1">
                                    <i class="bx bx-chip h1 text-warning"></i>
                                 </div>
                                 <div class="flex-shrink-0">
                                    <i class="bx bxl-visa display-2 mt-n3"></i>
                                 </div>
                              </div>
                              <div class="card-number1 fs-20" id="card-num-elem">
                                 XXXX XXXX XXXX XXXX
                              </div>
                              <div class="row mt-4">
                                 <div class="col-4">
                                    <div>
                                       <div class="text-white-50">Card Holder</div>
                                       <div id="card-holder-elem" class="fw-medium fs-14">Full Name</div>
                                    </div>
                                 </div>
                                 <div class="col-4">
                                    <div class="expiry">
                                       <div class="text-white-50">Expires</div>
                                       <div class="fw-medium fs-14">
                                          <span id="expiry-month-elem">00</span>
                                          /
                                          <span id="expiry-year-elem">0000</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-4">
                                    <div>
                                       <div class="text-white-50">CVC</div>
                                       <div id="cvc-elem" class="fw-medium fs-14">---</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card div elem -->
                        </div>
                        <form 
                           action="{{ route('user/stripe.post') }}"
                           method="post" class="require-validation"
                           data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                           @csrf 
                           <input name="user_id" value="{{$id}}" type='hidden'>
                           <div class='col-md-12 error form-group hide' style="margin:30px;">
                                    <span class=' alert' style="display:none; font-size:13px; color:red;"> </span>
                                 </div>
                                 
                              <div class="mb-3 required">
                              <label for="card-num-input" class="form-label">Card Number</label>
                              <input  maxlength="19"  name="card_number" placeholder="0000 0000 0000 0000" required 
                                 class='form-control card-number' maxlength="16" size='20' type='text'/>
                           </div>
                           <!-- <div class="mb-3">
                              <label for="card-holder-input" class="form-label">Card Holder</label>
                              <input type="text" class="form-control" id="card-holder-input" placeholder="Enter holder name" />
                              </div>
                              -->
                           <div class="row">
                              <div class="col-lg-4 form-group expiration required">
                                 <div>
                                    <label class='control-label'>Expiration Month</label>
                                    <input class='form-control card-expiry-month'   required placeholder='MM' name="expiration_month" size='2' type='text'>
                                 </div>
                              </div>
                              <!-- end col -->
                              <div class="col-lg-4 form-group expiration required">
                                 <label for="expiry-year-input" class="form-label" name="expiration_year">Expiry Year</label>
                                 <input class='form-control card-expiry-year' required placeholder='YYYY'   name="expiration_year" size='4' type='text'>
                              </div>
                              <!-- end col -->
                              <div class="col-lg-4">
                                 <div class=" cvc required ">
                                    <label for="cvc-input" class="form-label">CVC</label>
                                    <input autocomplete='off'  required class='form-control card-cvc' name="cvc" placeholder='ex. 311' size='4' type='password'>
                                 </div>
                              </div>
                              <!-- end col -->
                           </div>
                           <!-- end row -->
                           <button class="btn btn-danger w-100 mt-3" type="submit">Pay Now</button>
                        </form>
                        <!-- end card form elem -->
                     </div>
                  </div>
                  <!-- end card -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row-->
         </div>
         <!-- container-fluid -->
      </div>
      <!-- End Page-content -->
      <!-- End Page-content -->
      @include('user.includes.footer')
      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <script type="text/javascript">
         $(function() {
         var $form = $(".require-validation");
         $('form.require-validation').bind('submit', function(e) {
           var $form = $(".require-validation"),
               inputSelector = ['input[type=email]', 'input[type=password]',
                   'input[type=text]', 'input[type=file]',
                   'textarea'
               ].join(', '),
               $inputs = $form.find('.required').find(inputSelector),
               $errorMessage = $form.find('div.error'),
               valid = true;
           $errorMessage.addClass('hide');
           $('.has-error').removeClass('has-error');
           $('.alert').show();
           $inputs.each(function(i, el) {
               var $input = $(el);
               if ($input.val() === '') {
                   $input.parent().addClass('has-error');
                   $errorMessage.removeClass('hide');
                   e.preventDefault();
               }
           });


           if  (!$form.data('cc-on-file')) {
               e.preventDefault();
               Stripe.setPublishableKey($form.data('stripe-publishable-key'));
               Stripe.createToken({
                   number: $('.card-number').val(),
                   cvc: $('.card-cvc').val(),
                   exp_month: $('.card-expiry-month').val(),
                   exp_year: $('.card-expiry-year').val()
               }, stripeResponseHandler);
           }
         });
         function stripeResponseHandler(status, response) {
           console.log(response);
           if (response.error) {
               $('.error')
                   .removeClass('hide')
                   .find('.alert')
                   .text(response.error.message);
           } else {
               /* token contains id, last4, and card type */
               var token = response['id'];
               $form.find('input[type=text]','input[type=password]').empty();
               $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
               $form.get(0).submit();
           }
         }
         });
      </script>

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