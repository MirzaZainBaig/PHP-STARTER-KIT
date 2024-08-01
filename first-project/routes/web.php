<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
// Route::get('/post', function(){
//     return view('post');
// });
// SubutRoutes -----------
// Route::get('/post/first-post', function(){
//     return view('firstpost');
// })->name('fp');
 
//Routing parameters ----------
// Route::get('/post/{postname?}', function(string $postname = null){
//     if ($postname){
//         return "<h1>POST NAME : ". $postname ."</h1>";
//     }
//     else{
//         return "<h1>POST ID NOT FOUND</h1>";
//     }
// })->whereNumber('postname');
// these are all methods or conditions on url
// whereAlpha('postname')
// whereAlphaNumeric('postname')
// where('postname', '[@0-9]+')

// SHORTCUT WAY TO CREATE ROUTE  
// Rute::view('routeName', 'fileName');
// Route::view('post', '/post');

//ROUTE FOR CONTROLLER-------------
Route::controller(PageController::class)->group(function(){
    Route::get('/post/first-post', 'showPostNumber')->name('postNumber');
    Route::get('register', 'register')->name('register');
    Route::get('/', 'login')->name('login');
}); 

Route::controller(UserController::class)->group(function(){
    Route::post('registerSave', 'register')->name('registerSave');
    Route::get ('/dashboard', 'showDashboard')->name('dashboard');
    Route::get('/dashboard/post', 'showPost')->name('post');
    Route::post('loginMatch', 'login')->name('loginMatch');
    Route::get('logout', 'logout')->name('logout');
});
 
