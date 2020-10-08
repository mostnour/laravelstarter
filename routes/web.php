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

Route::get('/', function () {
    //return view('welcome')->with(['data'=> 2, 'string'=>'Mostafa Abuelnour Gaber', 'age' => 45]);
    // or
    $data=[];
    $data['data'] = 66;
    $data['string'] = 'Mostafa Abuelnour Mostafa Gaber';
    $data['age'] = 33;
    return view('welcomeOld', $data);
    // not allowed to write code here -- never
});

Route::get('/test1', function(){
    return ' Welcome test1';
}) -> name('mytest1');

Route::get('/test2/{id}', function($id) {
    return ' welcome test2 '. $id;
}) -> name('mytest2');

Route::get('/test3/{id?}', function(){
    return ' Welcome test 3';
}) -> name('mytest3');


Route::namespace('Front')->group(function(){
    // all rout only access controller or methods in folder name Front
    Route::get('users', 'UserController@showUserName');
});

// Route::group(['namespace'=>'Admin'], function(){
//    Route::get('second', 'SecondController@showString');
// });

/** or
Route::get('second', 'Admin\SecondController@showString');
*/

// Route::get('users', 'UserController@index')->middleware('auth');


Route::group(['namespace'=>'Admin'], function(){
    Route::get('second', 'SecondController@showString1')->middleware('auth');
    Route::get('second2', 'SecondController@showString2');
    Route::get('second3', 'SecondController@showString3');
    Route::get('second4', 'SecondController@showString4');
    Route::get('second5', 'SecondController@showString5');
});

Route::get('login', function(){
    return 'Must be login to access this route';
})->name('login');

/**
Route::get('users', 'UserController@index');
*/

/** or
Route::group(['middleware' => 'auth'], function() {
    Route::get('users', 'UserController@index');
});
 */

Route::resource('news', 'NewsController');

// using above resource save your time to create the below:
/*
Route::get('news', 'NewsController@show');
Route::post('news', 'NewsController@store');
Route::get('news/{id}/edit', 'NewsController@edit');
Route::get('news/update/{id}', 'NewsController@update');
Route::delete('news/{id}', 'NewsController@delete');
*/

// call view from controller (UserController)
// http://localhost:8001/index
Route::get('index', 'Front\UserController@getIndex');


Route::get('landing', 'Front\UserController@getLanding');

Route::get('about', function(){
    return view('about');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
Route::get('/', function() {
    return 'home';
});
