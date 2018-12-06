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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'branchmanager']], function () {
	Route::resource("pricing", "UserController");
    Route::resource('userhome', 'UserController');
    Route::resource("client", "\App\Http\Controllers\BranchManager\ClientController");
});

Route::group(['middleware' => ['auth', 'daf']], function () {
	Route::resource('managerhome', '\App\Http\Controllers\DAF\ManagerController');
});

//Start Route `for Accountant
Route::group(['middleware' => ['auth', 'accountant']], function () {
	Route::resource('acchome', '\App\Http\Controllers\Accountant\AccountantController');
});

// end of route for accountant
Route::group(['middleware' => ['auth', 'datamanager']], function () {
	Route::resource('dmhome', '\App\Http\Controllers\DataManager\DatamanagerController');
});

// -------------------------start--------------------
Route::group(['middleware' => ['auth', 'schememanager']], function () {
	Route::resource('smhome', '\App\Http\Controllers\SchemeManager\SchememanagerController');
});

// ------------------------------------------------------
Route::group(['middleware' => ['auth', 'humanresource']], function () {
	Route::resource('hrhome', '\App\Http\Controllers\HR\HumanResourceController');
});