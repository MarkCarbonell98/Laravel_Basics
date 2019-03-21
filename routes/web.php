<?php

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

use App\Post;

Route::get('/', function () { //get is a static method from the class route
    return view('welcome');
});

// Route::get("/about", function() {
//     return  view("about");
// });

// Route::get("/contact", "PostsController@contact");

// Route::get("post/{id}/{name}/{value}", "PostsController@show_post");

// Route::get("/post/{id}/{name}", function($id, $name) {
//     return "this is the id number "  . $id . " and the name is " . $name;
// });

// Route::group(['middleware' => ['web']], function () { //everything in the route group is available from web
//     return "hellou";
// });

// Route::get("admin/posts/example", array('as' => "admin.home", function() {
//     $url = route("admin.home");
//     return "this is the " . $url . " route";
// }));

// Route::get("/post/{id}/{name}", "PostsController@index"); //index is the name of the method inside the controllers class.

// Route::resource("posts", "PostsController"); //this allows you to create routes named after the function that matches the url

// Route::resource("landing", "LandingController");
Route::get("/read", function() {
    $results = DB::select("select * from posts where id= = ?", [1]);
    return $results;
});
// Route::resource("landing", "LandingController");

Route::get("/update", function() {
    $results = DB::update("update posts set title = 'Update Title' where id = ?", [1]);
    return $results;
});

Route::get("/delete", function() {
    $results = DB::delete("delete posts where id = ?", [1]);
    return $results;
});

Route::get("/insert", function() {

    DB::insert('insert into posts (title, body) values (?, ?)', ['value1','value2']);
});

//eloquent

Route::get("/find", function() {
    // $posts = Post::all();
    $posts = Post::find(1);
    return $posts->title;

    // foreach($posts as $post) {
    //     return $post->title;
    // }
});

Route::get("/findwhere", function() {
    $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

    return $posts[0]->body;
});

Route::get("/findmore", function() {
    $posts = Post::where("id", '<', 50)->firstOrFail();
    return $posts->body;
});

Route::get("/basicinsert", function() {
    //adds a new record to the table;
    $post = new Post;
    $post->title = "New Eloquent Title";
    $post->body = "Wow eloquent is really cool";
    $post->save();
});


Route::get("/basicinsert", function() {
    //adds a new record to the table;
    $post = Post::find(2);
    $post->title = "New Eloquent Title new new";
    $post->body = "Wow eloquent is really cool new new";
    $post->save();
});

Route::get("/create", function() {
    // Post::create(['title' => 'this is the new title', 'body' => 'this is the new bodyyyyyy']); results ins mass assignment exeption
    Post::create(['title' => 'this is the new title', 'body' => 'this is the new bodyyyyyy']); 
});

Route::get("/update", function() {
    Post::where("id",2)->where("is_admin", 0)->update(['title'=>'NEW PHP TITLE', 'body' => "THIS IS A NEW UPPERCASED BODY "]);
});

Route::get("/delete", function () {
    Post::find(1)->delete();
});

Route::get("/deleteanother", function() {
    // Post::destroy(3); //same as delete
    Post::destroy([4,5]); //deletes multiple rows;
    // Post::where("is_admin", 0)->delete();
});

Route::get("/softdelete", function() {
    Post::find(4)->delete();
});









