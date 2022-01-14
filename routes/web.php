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

Route::get('/', 'PagesController@index');

Route::get('/category', 'PagesController@category');

Route::get('/category/{id}', 'PagesController@detail');

Route::get('/profile', 'PagesController@profile');

Route::get('/profile/{id}', 'PagesController@updateProfile');

route::get('/favorite/{id}','PagesController@favorite');

route::post('/favorite/store','FavouriteController@store');

// Route::get('/about/{id}/{user}', function ($id, $user) {
//     return 'This is user ' .$id. ' with name of '.$user;
// });
Route::resource('posts','PostsController');

Route::resource('pages','ReviewController');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
