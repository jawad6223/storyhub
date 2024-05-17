<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Stripe;

use  Carbon\Carbon;
 
use App\Models\subscription_package;
use App\Models\story_category;
use App\Models\story;
use App\Models\story_image;
use App\Models\card_transaction;


class usercontroller extends Controller
{
    //Login

    public function login(){
      return view('user.login');
    }
    // Login Action
public  function userloginaction(Request $req){

    $req->validate([
    'email' => 'required|email',
    'password'=> 'required',
    ]);
    
    if (Auth::attempt(['email' => $req->email, 'password' => $req->password,'user_role' => 2])) {
    
    if(auth::user()->user_role == 2 ){ 
    return redirect('user/view_story');
    }
    
    else{
    return back()->with(['error1'=> 'Password and Email does not match try again']);
    }
    
    }
    else{
    return back()->with(['error1'=> 'Password and Email does not match try again']);
    }}
    

    // Signup
    public function signup(){
        return view('user.signup');
    }
    // Signup Action
    public function signupaction(request $req)
  {
    $req->validate([
      'user_name' => 'required|unique:users,user_name',
      'email' => 'required|email|unique:users',
      'password' => 'required|max:16|min:6',     
    ]);
    
    $randomNumber = random_int(100000, 999999);
       
    $user11 = User::create([
       'user_name'=>$req->user_name,
       'email'=>$req->email,
       'password'=>bcrypt($req->password),
       'user_role'=> 2,
       'verification' => $randomNumber
    ]);

    // return redirect('user/verification/'.$user11->id);

    if($user11){
      $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $to = $req->email;
            $from = 'info@qubitars.com';
            $subject = 'SignUp (OTP) Confirmation';
            $message = '<h2 style="color:#040d50">StoryHub System<h2> <hr> <h4> Dear ' . $req->user_name .'</h4><p> Thank you for choosing StoryHub system use the following OTP to complete your SignUp procedure.</p>  <button style="color:#040d50">'. 
$randomNumber.' </button>';
            $headers .= 'From: info@qubitars.com'."\r\n".
            'Reply-To: info@qubitars.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
       
            if(mail($to, $subject, $message, $headers))
            {
                return redirect('user/verification/'.$user11->id);
            }
      
      
      
      
  }

  }

    //   verification
    public function verification($id){
        return view('user.verification',compact('id'));
}

// Verification Action
public function verification_action(request $req){
   
 
   $user_check=  User::find($req->user_id);
   
   if($user_check->verification == $req->verification ){
       
    User::where('id',$req->user_id)->update([
      'verification'=>null,
  ]);
       return redirect('user/login');
   }
   else{
        return back()->with('error','incorrect otp try again!!');
   }
   
}

// Again Verification Action
public function again_verification_action($id){
   
    $user = User::find($id);
    
    $randomNumber = random_int(100000, 999999);
       
    $user11 = User::where('id',$id)->update([
     'verification'=> $randomNumber,
  ]);
 
//   return redirect('user/verification/'.$user11->id);
    if($user11){
           
      $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $to = $user->email;
            $from = 'info@qubitars.com';
            $subject = 'Again SignUp (OTP) Confirmation';
            $message = '<h2 style="color:#040d50">StoryHub System<h2> <hr> <h4> Dear ' . $user->user_name .'</h4><p> Thank you for choosing StoryHub system use the following OTP to complete your SignUp procedure.</p>  <button style="color:#040d50">'. 
$randomNumber.' </button>';
            $headers .= 'From: info@qubitars.com'."\r\n".
            'Reply-To: info@qubitars.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
            
       
            if(mail($to, $subject, $message, $headers))
            {
                return redirect('user/verification/'.$user->id);
            }
       
      
  }
}

// Logout
function  logout(){
  auth::logout();
  return redirect('/user/login');
  } 

// Forget
public function forget(){
  return view('user.forget');
  }
    
  // Forget Action
  public function forget_action(request $req)
  {
  
  $req->validate([
  'email' => 'required|email',
  ]);
  
  $user = user::where('email', $req->email)->first();
  
  if ($user) {
  $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $pass = array(); //remember to declare $pass as an array
  $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
  for ($i = 0; $i < 8; $i++) {
  $n = rand(0, $alphaLength);
  $pass[] = $alphabet[$n];
  }
  
  $user->password = bcrypt(implode($pass));
  $user->save();
  
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $to = $req->email;
  $from = 'info@storyhub.org';
  $subject = 'StoryHub Password Reset';
  $message = '
  <h2 style="color:#040d50">
StoryHub System
  <h2>
  <hr>
  <h4> Dear ' . $user->name .'</h4>
  <p> There was a request for password  resetting Storyhub system generated password is <button style="color:#040d50">'. 
     implode($pass).' </button> 
  </p>
  ' ;
  $headers .= 'From: info@storyhub.org'."\r\n".
  'Reply-To: info@storyhub.org'. "\r\n" .
  'X-Mailer: PHP/' . phpversion();
  
  if(mail($to, $subject, $message, $headers))
  {
  return back()->with('message1','djj');
  }
  
  else{
  return back()->with('message2','djj');
  }
  
  }
  else{
  return back()->with('message','djj');
  }
  
  } 

  
    //update password
    public function update_password()
    {
      return view('user.change_password');
    } 

  function update_password_action(request $req){
    
    $id =Auth::id();
    $user= user::find($id);
 
   if(password_verify($req->oldpassword,$user->password)){
 
        $user->password = bcrypt($req->newpassword);
 $user->save();
        return back()->with('message','Update');
    }
    else{
        return back()->with(['error'=> 'Old Password  does not match try again']);
      }

  }

//profile
public function profile()
{
  
$id = auth::id();
$user = user::find($id);
$cat =  story_category::get(); 
$story =  story::orderBy('id', 'DESC')->with(['story_user'])->where('user_id',auth::id())->get();  
return view('user.profile',compact('user','story','cat'));
}

// Storu Hub profile
public function story_hub_profile()
{
  
$id = auth::id();
$user = user::find($id);
$cat =  story_category::get(); 
$story =  story::orderBy('id', 'DESC')->with(['story_user'])->where('user_id',auth::id())->get();  
return view('user.story_hub_profile',compact('user','story','cat'));
}

public function profile_search($id)
{
$user = user::where('user_name',$id)->first();
$cat =  story_category::get(); 
$story =  story::with(['story_user'])->where('user_id',$user->id)->get();  
return view('user.story_hub_profile',compact('user','story','cat'));
}
// Profile edit action
public function profile_edit_action(request $req)
{
$req->validate([
'email' => 'unique:users,email,' .$req->id.',id',
]);
$id =Auth::id();
$update  = user::find($id);
// Image 
if ($req->has('image')) {
$req->validate([
'image' => 'mimes:jpeg,jpg,bmp,png',
]);
$image_path = 'storage/app/' . $update->image;
//  dd($image_path);
File::delete($image_path);
$filename = $req->file('image')->store('media');
}
else {
$filename = $update->image;
}
user::where('id',$id)->update([
'name'=>$req->name,
'user_name'=>$req->user_name,
'email'=>$req->email,
'contact'=>$req->contact,
'image'=>$filename,
'website' =>$req->website,
'facebook'=>$req->facebook,
'twitter'=>$req->twitter,
'linkedin'=>$req->linkedin,
'description'=>$req->description,
]);
return redirect('user/profile')->with('message1','Successfully Updated Profile');  
}

//  ADD Story 
public function add_story()
{
  $cat =  story_category::get();  
  $id = auth::id();
  $count = story::where('user_id',$id)->count();
  $user =user::find($id);

  $story = story::where('user_id' , $id)->get();

  if( $user->status == 0 && $count < 1   ) {
    
return view('user.add_story',compact('cat','story'));
  }
  elseif($user->status == 1){
    return view('user.add_story',compact('cat','story'));
  }
  else{
    return view('user.get_subscription',compact('id') );
  }

}
public function add_story_action(request $req)
{

  $id =  story::create([
    'user_id'=>Auth::id(),
    'category_id' =>$req->category,
    'title' =>$req->title,
    'description' =>$req->description,
    'criteria' =>$req->criteria,
    'linked_by' =>$req->linked_by
]);


if($req->name == 1){
  return redirect('user/profile');
}
else{
return redirect('user/story_gallery/' . $id->id);
}
}
public function story_gallery($id)
{
return view('user.story_gallery',compact('id'));
}
public  function dropzoneFileUpload2(Request $req)  
{  
$image = $req->file('file');
$ext = $image->extension();
$imageName =  uniqid().'.'.$ext; 
if($ext == 'png' || $ext == 'jpg' ||$ext == 'jpeg'){
$saveimage = $image->move(public_path('images'),$imageName); 
story_image::create([
'story_id' =>$req->story_id,
'file' =>$imageName,
]);
return response()->json(['success'=>$imageName]);
}
else{
return back()->with('message','Something Wrong');
} 

}


public function view_story()
{
  $check =0;
  $id = auth::id();
  $user =user::find($id);
  if( $user->status == 0 ) {
    $check =1;
  }

$cat =  story_category::get(); 
$story =  story::orderBy('id', 'DESC')->with(['story_user'])->get();  
return view('user.view_story',compact('story','cat','check'));
}
public function story_detail($id)
{
  $cat =  story_category::get();  
$img = story_image::where('story_id',$id)->get();
$story =  story::with(['story_user'])->find($id);  
return view('user.story_detail',compact('story','img','cat'));
}

public function story_hub($id)
{
  $cat =  story_category::get();  
$img = story_image::where('story_id',$id)->get();
$story =  story::with(['story_user'])->find($id);  
return view('user.story_hub',compact('story','img','cat'));
}

public function story_delete($id)
{
$image = story_image::where('story_id',$id)->get();
foreach($image as $image){
$destinationPath = 'public/images/'.$image->file;
if(file::exists($destinationPath)){    
file::delete($destinationPath);
$image->delete();
}
}
$story =  story::find($id);
$story->delete();  
return redirect('user/profile')->with('message1','Delete');
}
public function story_search(request $req){
$query = story::query();
$story =  story::with(['story_user'])->where('user_id',auth::id());
if($req->tag){
$query->where('description', 'LIKE', "%{$req->tag}%");
}   
if($req->category){
$query->where('category_id',$req->category);          
}
$story = $query->get();
$cat =  story_category::get(); 
return view('user.view_story',compact('story','cat'));
}
public function edit_story($id)
{
$cat =  story_category::get();  
$id1 = Auth::id();
 $story1 = story::where('user_id' , $id1)->get();

$story =  story::with(['story_user'])->find($id);  
return view('user.edit_story',compact('story','cat','story1'));
}
public function edit_story_action(request $req)
{
$id =  story::where('id',$req->id)->update([
 'user_id'=>Auth::id(),
 'category_id' =>$req->category,
 'title' =>$req->title,
 'description' =>$req->description,
 'criteria' =>$req->criteria,
 'linked_by' =>$req->linked_by
]);
return redirect('user/edit_story_gallery/' . $req->id);
}
public function edit_story_gallery($id)
{
$img = story_image::where('story_id',$id)->get();
return view('user.edit_story_gallery',compact('id','img'));
}
function delete_story_gallery_img($id){
$img = story_image::find($id);
$destinationPath = 'public/images/'.$img->file;
if(file::exists($destinationPath)){    
file::delete($destinationPath);
$img->delete();
}
$img->delete();
return back()->with('message1','Delete');
}
public  function dropzoneFileUpload3(Request $req)  
{  
$image = $req->file('file');
$ext = $image->extension();
$imageName =  uniqid().'.'.$ext; 
if($ext == 'png' || $ext == 'jpg' ||$ext == 'jpeg'){
$saveimage = $image->move(public_path('images'),$imageName); 
story_image::create([
'story_id' =>$req->story_id,
'file' =>$imageName,
]);
return response()->json(['success'=>$imageName]);
}
else{
  
return redirect('user/story_gallery/'. $req->story_id)->with('message','Something Wrong');
} 
}

// get_subscription
public function get_subscription()
{
  $id = auth::id();

return view('user.get_subscription',compact('id') );
}


    
public function stripePost(Request $request)
{

 $sub = subscription_package::first();
$user = user::find($request->user_id);

\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
// Create a Customer:

  $customer = \Stripe\Customer::create([
  'source' => $request->stripeToken,
  'email' =>  $user->email,
]);

// Charge the Customer instead of the card:
$charge = \Stripe\Charge::create([
  'amount' => $sub->price * 100,
  'currency' => 'usd',
  'customer' => $customer->id,
]);



    
if ($charge->status == "succeeded"){

 $sub= subscription_package::first();

 $currentDateTime = Carbon::now();
 $newDateTime = Carbon::now()->addMonths($sub->month);
 



  user::where('id', $request->user_id)->update([
  'status' => 1,
  'subscription_package_date' =>$newDateTime->format('y-m-d'),
    ]);
    card_transaction::create([
    'card_number' => $charge->source->last4,
    'transaction_id' =>$charge->id,
    'amount' => $charge->amount/100,
    'user_email' =>$user->email,
    ]); 
    Session::flash('success', 'Payment successful!');  
    return redirect('user/get_subscription')->with('message','Delete'); 
   
}
else{
  return redirect('user/get_subscription')->with('message1','Delete'); 
}
}


}
