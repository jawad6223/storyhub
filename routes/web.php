<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\usercontroller;



  /*-------------------------Admin Routes---------------------*/

    // Group Controller
 Route::controller(admincontroller::class)->group(function(){

    // Prefix User Name
 Route::prefix('admin')->group(function () {

    // Login
    Route::get('/','login');
    Route::get('/login','login');
    Route::post('loginaction','adminloginaction');

    // Forget
    Route::get('/forget','forget');
    Route::post('/forget_action','forget_action');

    // Middleware
 Route::group(['middleware' => 'admin'], function () {

    // Dashboard
    Route::get('dashboard','dashboard');

    //profile
    Route::get('profile','profile');
    Route::post('profile_edit_action','profile_edit_action');
    Route::get('story_hub_profile','story_hub_profile');
    Route::get('@/{id}','profile_search');

    //update password
    Route::get('update_password','update_password');
    Route::post('update_password_action','update_password_action');
 
    //Logout
    Route::get('logout','logout');

    // Subscription Package
    Route::get('/subscription_pkg', 'subscription_pkg' );
    Route::post('subscription_pkg_action','subscription_pkg_action');

    // Category 
    Route::get('/story_category', 'story_category');
    Route::post('story_category_action','story_category_action');
    Route::get('cat_delete/{id}','category_delete');

    // ADD story
    Route::get('/add_story', 'add_story');
    Route::post('/add_story_action', 'add_story_action');

    // View Story
    Route::get('/view_story', 'view_story');
    Route::get('/story_detail/{id}','story_detail');
    Route::get('/story_hub/{id}','story_hub');
    Route::post('/story_search', 'story_search');
    Route::get('story_gallery/{id}','story_gallery');
    Route::post('file-upload',  'dropzoneFileUpload' )->name('dropzoneFileUpload');

    // Delete Story
    Route::get('/story_delete/{id}','story_delete');

    // Edit Story
    Route::get('edit_story/{id}','edit_story');
    Route::post('/edit_story_action', 'edit_story_action');
    Route::get('edit_story_gallery/{id}','edit_story_gallery');
    Route::get('delete_story_gallery_img/{id}','delete_story_gallery_img');
    Route::post('file-upload1',  'dropzoneFileUpload1' )->name('dropzoneFileUpload1');

// active_sub
    Route::get('active_sub','active_sub');
    Route::get('delete_sub/{id}','delete_sub');
    Route::get('reactive_sub/{id}','reactive_sub');
    Route::get('block_sub','block_sub');

// transaction
    Route::get('transaction','transaction');

});  
// End Middleware

});



   //update password
   route::get('update_password','update_password');
   route::post('update_password_action','update_password_action');
});




 /*-------------------------user Routes---------------------*/

   
   // Group Controller
 Route::controller(usercontroller::class)->group(function(){

    // Login
    Route::get('/','login');
    

    // Prefix User Name
 Route::prefix('user')->group(function () {



    // /User
    Route::get('/','login');
    Route::get('/login','login');
    Route::post('loginaction','userloginaction');

    // Signup
    Route::get('/signup','signup');
    route::post('signupaction','signupaction'); 
  
    // Verification
    Route::get('verification/{id}','verification');
    Route::post('verification_action', 'verification_action');
    Route::get('again_verification_action/{id}', 'again_verification_action');
    

      // Forget
      Route::get('/forget','forget');
      Route::post('/forget_action','forget_action');
      
   // Middleware
   Route::group(['middleware' => 'user'], function () {

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    });

    //profile
    Route::get('profile','profile');
    Route::post('profile_edit_action','profile_edit_action');
    Route::get('@/{id}','profile_search');

 // ADD story
 Route::get('/add_story', 'add_story');
 Route::post('/add_story_action', 'add_story_action');

     // View Story
     Route::get('/view_story', 'view_story');
     Route::get('/story_detail/{id}','story_detail');
     Route::get('/story_hub/{id}','story_hub');
     Route::post('/story_search', 'story_search');
     Route::get('story_gallery/{id}','story_gallery');
     Route::post('file-upload2',  'dropzoneFileUpload2' )->name('dropzoneFileUpload2');
 
     // Delete Story
     Route::get('/story_delete/{id}','story_delete');
 
     // Edit Story
     Route::get('edit_story/{id}','edit_story');
     Route::post('/edit_story_action', 'edit_story_action');
     Route::get('edit_story_gallery/{id}','edit_story_gallery');
     Route::get('delete_story_gallery_img/{id}','delete_story_gallery_img');
     Route::post('file-upload3',  'dropzoneFileUpload3' )->name('dropzoneFileUpload3');

     
    //update password
    route::get('update_password','update_password');
    route::post('update_password_action','update_password_action');

    //subscription 
    Route::get('get_subscription','get_subscription');
    Route::post('stripe', 'stripePost')->name('user/stripe.post');

    Route::get('logout','logout');

  
});

});
});