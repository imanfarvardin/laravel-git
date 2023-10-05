<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/contact', function (){
//    return "به صفحه تماس با ما خوش امدید ";
//});
//
//Route::get('/about', function (){
//    return "درباره ما خوش امدید ";
//});
//
//Route::get('/post/{id}',function ($id){
//    return "ای دی این پست برابر است با : " .$id;
//});
//
//Route::get('/post/{id}/{name?}',function ($id, $name=null ){
//    return "ای دی این پست برابر است با : " ." " .$id ."$name";
//});

////Route::get('admin/post/example', function (){
////    $url = route('admin');
////    return "ای آدرس برای صفحه مدیریت می باشد و URL برابر است با :  ".$url ;
////})->name('admin');
////--------------------------------------
////Route::get('/admin/login', function (){
////   return("صفحه ورود مدیریت ");
//});

//Route::redirect('/admin/login','/admin/posts/example',301);

//-----------------------------------------------------------
//Route::prefix('user')->group(function(){
//    Route::get('post/example',function(){
//       return "گروه بندی ادمین ";
//    });
//    Route::get('login ',function (){
//    return "صفحه لاگین ";
//});
//});
//----------------------------------------------------------------

//Route::get('posts','PostsController@index');
//Route::post('posts', 'PostsController@create');

//Route::get('contact','PostsComtroller@contact');
//Route::get('/posts/{id?}','PostsComtroller@index');
//Route::get('/Show-view/{id?}/{name}/{password}','PostsComtroller@ShowMyView');
//
//Route::get('/insert','PostsComtroller@insert');
//Route::get('/select','PostsComtroller@select');
//Route::get('/update','PostsComtroller@updatePost');
//Route::get('/delete','PostsComtroller@deletePost');
//
//Route::get('posts','PostsComtroller@getAllPosts');
//Route::get('save-Post','PostsComtroller@savePost');
//Route::get('update-Post','PostsComtroller@newUpdatePost');
//Route::get('delete-post','PostsComtroller@newDeletePost');
//Route::get('data-trash','PostsComtroller@workWithTrash');
//Route::get('restore-post','PostsComtroller@restorePost');
//Route::get('force-delete-post','PostsComtroller@forceDelete');

// Eloquent Relationship
// one to one relationship
//
//Route::get('user/{id}/posts',function ($id){
//    $user_post = \App\User::find($id)->post->content;
//    return $user_post;
//});
//Route::get('posts/{id}/user',function ($id){
//    $post_user = \App\Post::find($id)->user;
//    return $post_user;
//});

// Onew to Many Relationship
//Route::get('user/{id}/posts',function ($id){
//   return \App\User::find($id)->posts;
//});

//many to many Relationship


// Has Many Through
//
//Route::get('user/country',function (){
//    $country = \App\Country::find(1);
//    foreach ($country->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});



// polymorphic Relationship
//
//Route::get('user/photos',function (){
//   $user = \App\User::find(1);
//    foreach ($user->photos as $photo) {
//        echo $photo->patch;
//        echo "</br>";
//    }
//});
//
//Route::get('post/photos',function (){
//    $post = \App\post::find(10);
//    foreach ($post->photos as $photo) {
//        echo $photo->patch;
//        echo "</br>";
//    }
//});
//
//Route::get('photo/{id}/post',function ($id){
//    $photo = \App\Photo::find($id);
//    return  $photo->imageable;
//});
//
//Route::get('post/tags',function (){
//    $post  = \App\post::find(10);
//    foreach ($post->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//
//Route::get('Video/tags',function (){
//    $Video  = \App\post::find(10);
//    foreach ($Video->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//
//
//
//Route::get('tag/{id}/post',function ($id){
//    $tag  = \App\Tag::find($id);
//    foreach ($tag->posts as $post){
//        echo $post->title;
//        echo "</br>";
//        }
//});

//CRUD-One-to-Many-Relationship

//Route::get('/create',function(){
//   $user = \App\User::find(1);
//   $post = new \App\Post();
//   $post->title = 'یک پست جدید با رابطه One to Many ';
//   $post->content = 'در این قسمت توضیحات مربوط به کانتنت قرار داده میشود ';
//   $user->posts()->save($post);
//    //$post->save();
//    //$post->user_id = $user->id;
//});
//
//Route::get('read',function (){
//   $user = \App\User::find(1);
//   foreach ($user->posts as $post){
//       echo $post->title;
//       echo "<br/>";
//   }
//});
//
//Route::get('/update',function (){
//   $user = \App\User::find(1);
//   $user->posts()->whereId(10)->update(['title'=>'اپدیت پست با CRUD','content'=>'بروز رسانی توضیحات مطالب ']);
//});
//
//Route::get('delete',function (){
//    $user = \App\User::find(1);
//    $user->posts()->whereId(10)->delete();
//});

// CRUD-Many-to-Many-Relationship
//
//Route::get('create',function (){
//    $user = App\User::find(1);
//    $role = new \App\Role();
//    $role->name = 'نویسنده';
//    $user->roles()->save($role);
//
//});
//
//Route::get('read',function (){
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role){
//        echo $role->name;
//        echo "<br/>";
//    }
//});
//
//Route::get('update', function (){
//   $user = \App\User::find(1);
//   if ($user->has('roles')){
//       foreach ($user->roles as $role){
//           if ($role->name == 'نویسنده'){
//               $role->name ='Author';
//               $role->save();
//           }
//
//       }
//   }
//});
//
//Route::get('delete',function (){
//    $user = \App\User::find(1);
//    foreach ($user->roles as $role){
//        if ($role->name == 'Author'){
//            $role->delete();
//        }
//    }
//});
//
//Route::get('detach',function (){
//    $user = \App\User::find(1);
//    $user->roles()->detach();
//});
//
//Route::get('attach',function (){
//   $user = \App\User::find(1);
//   $user->roles()->attach(1);
//});
//
//Route::get('sync',function (){
//    $user = \App\User::find(1);
//    $user->roles()->sync([1,2,3]);
//});

//CRUD-Polymorphic-Relationship

//Route::get('/create',function (){
//    $video = \App\video::find(1);
//    $video->tags()->create(['name'=>'morph video ']);
//});
//Route::get('read',function (){
//    $video = \App\User::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "<br/>";
//    }
//});
//Route::get('update',function (){
//   $video = \App\video::find(1);
//   $tag = $video->tags;
//   $newtags = $tag->where('id',3)->first();
//   $newtags->name = 'تگ جدید';
//   $newtags->save();
//});
//
//Route::get('delete',function (){
//    $video = \App\video::find(1);
//    $tag = $video->tags;
//    $deletedTag = $tag->where('id',3)->first();
//    $deletedTag->delete();
//});
//
//Route::get('detach',function (){
//   $video = \App\video::find(1);
//   $video->tags()->detach();
//
//});
//
//Route::get('attach',function (){
//   $video = \App\video::find(1);
//   $video->tags()->attach(1);
//});
//
//Route::get('sync ',function (){
//   $video = \App\video::find(1);
//   $video->tags()->sync([2]);
//});

// form Route

use Illuminate\Support\Facades\Auth;


Route::resource('/posts','PostsComtroller');


Auth::routes(['verify'=>true]);

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->middleware(['auth','verified'])->name('home');

Route::middleware(['auth','verified'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/posts','PostsComtroller');

});
Route::get('/');


//Route::get('/',function (){
//    $user = Auth::user();
//    $id = Auth::id();
//
//    if (Auth::check()){
//        echo "Hello : " .$user->name;
//    echo "<br/>";
//    echo "user ID " .$id;
//
//    }else{
////        echo "user signin";
//        return redirect()->to('home');
//    }

//    $email = 'farvardin.225$gmail.com';
//    $password = '123456';
//    $auth = Auth::attempt(['email'=>$email,'password'=>$password]);
//    dd($auth);

//    Auth::logout();

//    $user = Auth::loginUsingId(3);
//    dd($user);


// Middleware
//});

//Route::get('/test',function (){
//    $user = \App\User::find(3);
//    $user_role = $user->isAdmin();
//    dd($user_role);
//});

//Route::get('/admin',function (){
//    echo "Hello to Admin Page";
//})->middleware('isAdmin');

use Illuminate\Http\Request;

//Route::get('session',function (Request $request ){
////   $request->session()->put(["username"=>"iman"]);
////    session(["email"=>"farvardin.225@gmail.com"]);
////    $request->session()->forget('username');
//    $request->session()->flash('message','Post has been created!');
//
//    return $request->session()->all();
//});

// یک تغییر ایجاد شد 
