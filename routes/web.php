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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function() {
  return view('home');  
});


// Route::get('/contact', function() {
//   return view('contact');
// });


// Route::post('/send-email', function() {

//   if(!empty($_POST)) {
//     dump($_POST);
//   }

//   return "send email";
// });


Route::match(['get', 'post'], '/contact2', function() {
  if(!empty($_POST)) {
    dump($_POST);
  }

  return view('contact');
})->name("contact");


// Route::any('/contact', function() {
//   if(!empty($_POST)) {
//     dump($_POST);
//   }

//   return view('contact');
// });


Route::view('/about', 'about', ["tmp" => "Some datas"]);

// Route::redirect("/contact", "/about");


// Route::get('/articles/{id}', function($id) {
//   return "Article № $id";
// });


// Route::get('/articles/{id}/{slug}', function($id, $slug) {
//   return "Article $id | $slug";
// }) -> where( ['id' => '[0-9]+', 'slug' => '[a-zA-Z0-9-]+' ]);


Route::prefix('admin') -> group(function() {

  Route::get('/posts', function() {
    return "Posts List";
  });
  
  
  Route::get('/post/create', function() {
    return "Create post";
  });
  
  
  Route::get('/post/{id}/edit', function($id) {
    return "Edit $id post";
  });
  

});


