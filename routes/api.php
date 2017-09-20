<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/posts/allposts', 'MAPostsController@allPosts');
Route::get('/post/{id}', 'MAPostsController@showPost');


Route::post('/users/signin', 'MAUsersController@signIn');

route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('/users/logged-in','MAUsersController@isLoggedIn');
    Route::resource('/users', 'MAUsersController');
    Route::resource('/posts', 'MAPostsController');
    Route::resource('/roles', 'MARolesController');
});