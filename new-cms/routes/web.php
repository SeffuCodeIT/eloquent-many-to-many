<?php

use App\Models\Country;
use App\User\Post;
use App\User\User;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/insert', function (){
//     DB::insert('insert into posts (title, content) values(?, ?)', ['Laravel is awesome with', 'laravel is the best thing that happened to php']);

// });


// Route::get('/read', function (){



//     $results = DB::select('select*from posts where id = ?', [2]);
//     return var_dump($results);
//     // return $results;
//     // foreach($results as $posts)
//     // {
//     //     return $posts->title;
//     // }
// });

// Route::get('/updated', function (){

//     $updated = DB::update('update posts set title = "updattrfe title" where id = ?', [1]);
//     return $updated;
// });

// Route::get('/deletd', function (){

//     $deleted = DB::delete('delete from posts where id = ?', [1]);
//     return $deleted;
// });

// Route::get('/findr', function (){

    // $post = Post::find(2);

//     return $post->title;
//     // foreach($posts as $post)
//     // {
//     //     return $post->title;
//     // }

// });

// Route::get('/findwhere', function (){

//     $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;
// });


// Route::get('/findmore', function (){

//     // $posts = Post::findOrFail(2);
//     $posts = Post::where('users_count', '<', 50)->firstOrFail();

//     return $posts;
// });

// Route::get('/basicinsert', function (){

//     $post = Post::find(2);
//     // $post = new Post;
//     $post->title = 'New Eloquent title insert';
//     $post->content = 'Wow eloquent is really cool, look at this content';
//     $post->save();



// });

// Route::get('/creatr', function (){

//     Post::create(['title' => 'the create method', 'content'=>'WOW I\am learning alot with laravel']);
// });

// Route::get('updated', function (){
//     Post::where('id', 3)->where('is_admin', 0)->update(['title' => 'NEW PHP TITLE', 'content' => 'I love laravel so much']);
// });

// Route::get('/deleted', function (){
//     $post = Post::find(20);
//     $post->delete();
// });

// Route::get('/deleted2', function (){
//     Post::destroy(4);
// });
// Route::get('/deleted3', function (){
//     Post::destroy([5,6,7]);
// // });

// Route::get('/softdelete', function (){
//     Post::find(8)->delete();


// });

// Route::get('/readsoftdelete', function (){
//     // $post = Post::find(1);

//     // return $post;

//     // $post = Post::onlyTrashed()->where('is_admin', 8)->get();

//     // // $post = Post::withTrashed()->where('id', 10)->get();
//     // return $post;


// });

// Route::get('/restore', function (){
//     Post::withTrashed()->where('is_admin', 10)->restore();
// });
//
//Route::get('/forcedelete', function (){
//    Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
//});
//
////eloquent relationships route
////has one or one to one relationship
// Route::get('/users/{id}/post', function($id){
//     return User::find($id)->post->content;
//    //  return User::find($id)->post->title;
// });

//one to one
//Route::get('/post/{id}/user', function ($id){
//    return Post::find($id)->user->name;
//
//});
//
////one to many
//Route::get('/posts', function (){
//    $user = User::find(1    );
//
//    foreach ($user->posts as $post){
//        echo $post->title . "<br>";
//
//    }
//});
//
////many to many
//Route::get('/user/{id}/role', function ($id){
//    $users = User::with("roles")->get();
//
//    foreach ($users as $user){
//        foreach ($user->roles as $role){
//            echo $user->name . "is a " . $role->name . " <br>";
//        }
//    }
//});
//
////accessing the pivot table
//Route::get('/user/pivot', function (){
//    $users = User::with("roles")->get();
//
//    foreach ($users as $user){
//        foreach ($user->roles as $role){
//            return $user->name . "created at " . $role->pivot->created_at . " <br>";
//        }
//    }
//    $user = User::with("roles")->get();
//
//    foreach ($user->roles as $role){
//        return $role->pivot->created_at;
//    }
//});
//
//Route::get('/user/country', function (){
//    $country = Country::with("posts")->get();

//    foreach ($country as $c){
//        foreach ($c->posts as $post){
//            return $c->name . "title is" . $post->title . "<br>";
//        }
//    }


//    $country = Country::find(2);
//    foreach ($country->posts as $post){
//        return $post->title . "<br>";
//    }
//
//
//});
//polymorphic relationships
 Route::get('/user/photos', function (){
     $user = User::find(1);
        foreach ($user->photos as $photo){
//            return $user->photos;
            return $photo->path;
        }
//     return $user->photos;
 });

