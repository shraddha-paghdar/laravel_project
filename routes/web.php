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
use App\Comment;
Route::get('/', function () {
    return view('welcome');
});

Route::get('mumbai', function()
{
    return view('mumbai');
});
Route::get('maha', function()
{
    return view('maha');
});
Route::get('khandala', function()
{
    return view('khandala');
});
Route::get('panch', function()
{
    return view('panch');
});

Route::get('mumbaimap', function()
{
    return view('mumbaimap');
});
Route::get('panchmap', function()
{
    return view('panchmap');
});
Route::get('mahamap', function()
{
    return view('mahamap');
});
Route::get('khandalamap', function()
{
    return view('khandalamap');
});

Auth::routes();
// Route::get('/calender', 'HomeController@show');


Route::get('/status', function () {
	$comments=Comment::where('approve' ,'1')->get();
    return view('front')->with('comments',$comments);
});

Route::post('/comment', 'CommentController@store');
Route::post('/toggle-approve', 'CommentController@approval');

Route::get('/dash', function () {
	$comments=Comment::all();
return view('Dashboard')->with('comments',$comments);
});

Route::post('/sent','MailController@store');


Auth::routes();

Route::get('/home', 'HomeController@show')->name('home');
