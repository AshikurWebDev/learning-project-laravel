<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\PaymentGateway\Payment;


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

// Route::get('/{locale}', function ($locale) {
//     App::setlocale($locale);
//     return view('welcome');
// });
Route::get("/", function(){
    return view('welcome');
});

//This Routes for only API
// Route::get('/posts', [ClientController::class ,'getAllPost']);
// Route::get('/posts/{id}', [ClientController::class ,'getPostById']);
// Route::get('/add-post', [ClientController::class ,'addPost']);
// Route::get('/update-post', [ClientController::class ,'updatePost']);
// Route::get('/delete-post/{id}', [ClientController::class ,'deletePost']);

//This Route for Fluent String
Route::get('/fluent-string', [FluentController::class, 'index']);


//This is for Http request checking method;
Route::get('/users', [UserController::class, 'index']);

//This is for LoginController
Route::get('/login', [LoginController::class, 'index'])->middleware('checkuser'); 

//This is for submitting the form
Route::post('/submit', [LoginController::class, 'loginSubmit']);

//This is for session data
Route::get('/session/get',[SessionController::class, 'getSessionData']);

//This is for Storing Session  Data
Route::get('/session/set', [SessionController::class, 'storeSessionData']);

//This is for Deleting Session data
Route::get('/session/remove', [SessionController::class, 'deleteSessionData']);

//This is for Database 
Route::get('/posts', [PostController::class, 'getAllPost']);

//This is for add post
Route::get('add-post', [PostController::class, 'addPost']);

//This is for addPost Submit
Route::post('/add-post', [PostController::class, 'addPostSubmit']);

//This is for fetching sing data in CURD operation
Route::get('/posts/{id}', [PostController::class, 'getPostById']);

//This is for deleting the CURD operation post delete
Route::get('delete-post/{id}', [PostController::class, 'deletePost']);

//This is for editing the CRUD operation post viewinig

Route::get('edit-post/{id}', [PostController::class, 'editPost']);

//This is for updated post
Route::post('/update-post', [PostController::class, 'updatePost']);

//This is for join claus
Route::get('inner-join', [PostController::class, 'innerJoinClause']);

//This is for left join in Laravel
Route::get('left-join' , [PostController::class, 'leftJoin']);

//This is for right join in laravel
Route::get('right-join', [PostController::class, 'rightJoin']);

//THis is for model
Route::get('all-posts', [PostController::class, 'getAllPostUsingModel']);

//This is for pagination
Route::get('/users', [PaginationController::class, 'allUsers']);

//This is for the upload function
Route::get('/upload', [UploadController::class, 'uploadForm']);

//This is for upload file
Route::post('/upload', [UploadController::class, 'uploadFile']);

//This is for payment gateway facades

Route::get('/payment', function(){
    return Payment::process();
});



