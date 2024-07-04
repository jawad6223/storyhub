<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\subscription_package;
use App\Models\story_category;
use App\Models\story;
use App\Models\story_image;
use App\Models\card_transaction;
use Illuminate\Http\Request;
class admincontroller extends Controller
{

// Login
public function login(){
// return view('admin.login');
}

  // Login Action
public  function adminloginaction(Request $req){

  $req->validate([
  'email' => 'required|email',
  'password'=> 'required',
  ]);
  
  if (Auth::attempt(['email' => $req->email, 'password' => $req->password,'user_role' => 1])) {
  
  if(auth::user()->user_role == 1 && auth::user()->status == 1){ 
  return redirect('admin/dashboard');
  }
  
  else{
  return back()->with(['error1'=> 'Password and Email does not match try again']);
  }
  
  }
  else{
  return back()->with(['error1'=> 'Password and Email does not match try again']);
  }}
  

// Forget
public function forget(){
return view('admin.forget');
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
Eboard System
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

//profile
public function profile()
{
$id = auth::id();
$user = user::find($id);
$cat =  story_category::get(); 
$story =  story::orderBy('id', 'DESC')->with(['story_user'])->where('user_id',auth::id())->get();  
return view('admin.profile',compact('user','story','cat'));
}
public function profile_search($id)
{
  
$user = user::where('user_name',$id)->first();
$cat =  story_category::get(); 
$story =  story::with(['story_user'])->where('user_id',$user->id)->get();  
return view('admin.story_hub_profile',compact('user','story','cat'));
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
return redirect('admin/profile')->with('message1','Successfully Updated Profile');  
}
//update password
public function update_password()
{
return view('admin.change_password');
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
// Logout
function  logout(){
auth::logout();

return redirect('/admin/login');
}
//   Dasboard
public function dashboard()
{

  $id =Auth::id();
  $user =  user::orderBy('id', 'DESC')->where('user_role',2)->where('status',1)->paginate(10);

  $total_sub = user::where('user_role',2)->count();
  $active_sub = user::where('user_role',2)->where('status',1)->count();
  $block_sub = user::where('user_role',2)->where('status',0)->count();
  $total_story = story::count();
  $my_story = story::where('user_id',$id)->count();

  $other_story = story::where('user_id', '!=' , $id)->count();
  

return view('admin.dashboard',compact('total_sub','active_sub','block_sub','total_story','my_story','other_story','user'));
} 
//   subscription Package
public function subscription_pkg()
{
$pkg =  subscription_package::first();
return view('admin.subscription_pkg',compact('pkg'));
} 

public function subscription_pkg_action(request $req)
{
$pkg =  subscription_package::first();
subscription_package::where('id',$pkg->id)->update([
'title'=>$req->title,
'month'=>$req->month,
'price'=>$req->price,
]);
return back()->with('message','Update');
} 
//   category
public function story_category()
{
$cat =  story_category::get();  
return view('admin.story_category',compact('cat'));
} 
public function story_category_action(request $req)
{
$cat =  story_category::create([
'name' =>$req->name,
]);  
return back()->with('message','Update');
} 
public function category_delete($id)
{
$cat =  story_category::find($id);  
$cat->delete();
return back()->with('message1','Delete');
} 
//  ADD Story 
public function add_story()
{
  $id = Auth::id();
  $story = story::where('user_id' , $id)->get();
$cat =  story_category::get();  
return view('admin.add_story',compact('cat','story'));
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
  return redirect('admin/profile');
}
else{
return redirect('admin/story_gallery/' . $id->id);
}
}
public function story_gallery($id)
{
return view('admin.story_gallery',compact('id'));
}
public  function dropzoneFileUpload(Request $req)  
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

$cat =  story_category::get(); 
$story =  story::orderBy('id', 'DESC')->with(['story_user'])->get();  
return view('admin.view_story',compact('story','cat'));

}
public function story_detail($id)
{
  $cat =  story_category::get();  
$img = story_image::where('story_id',$id)->get();
$story =  story::with(['story_user'])->find($id);  
return view('admin.story_detail',compact('story','img','cat'));
}

public function story_hub($id)
{
  $cat =  story_category::get();  
$img = story_image::where('story_id',$id)->get();
$story =  story::with(['story_user'])->find($id);  
return view('admin.story_hub',compact('story','img','cat'));
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
return redirect('admin/profile')->with('message1','Delete');
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
return view('admin.view_story',compact('story','cat'));
}
public function edit_story($id)
{
$cat =  story_category::get(); 
$id1 = Auth::id();
 $story1 = story::where('user_id' , $id1)->get();

$story =  story::with(['story_user'])->find($id);  

return view('admin.edit_story',compact('story','cat','story1'));
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
return redirect('admin/edit_story_gallery/' . $req->id);
}
public function edit_story_gallery($id)
{
$img = story_image::where('story_id',$id)->get();
return view('admin.edit_story_gallery',compact('id','img'));
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
public  function dropzoneFileUpload1(Request $req)  
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
  
return redirect('admin/story_gallery/'. $req->story_id)->with('message','Something Wrong');
} 
}


// active_sub
public function active_sub()
{

  $user =  user::orderBy('id', 'DESC')->where('user_role',2)->where('status',1)->get();
 
return view('admin.active_sub',compact('user'));
}

// active_sub
public function delete_sub($id)
{

  $user =  user::find($id);
  $story =  story::where('user_id',$id)->get();

  foreach($story as $story){

  $image = story_image::where('story_id',$story->id)->get();
foreach($image as $image){
$destinationPath = 'public/images/'.$image->file;
if(file::exists($destinationPath)){    
file::delete($destinationPath);
$image->delete();
}
}

$story->delete(); 
  }

$user->delete();
return back()->with('message','Delete');
}




// active_sub
public function block_sub()
{

  $user =  user::orderBy('id', 'DESC')->where('user_role',2)->where('status',0)->get();
 
return view('admin.block_sub',compact('user'));
}


// transaction
public function transaction()
{

 $trans = card_transaction::get();
  return view('admin.transaction',compact('trans'));
}
}