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

Route::get('/', function () {
    return view('Public/login');
});
Route::get('/kk', function () {
    echo"khkhkh";
});
Route::post('/login','App\Http\Controllers\LoginController@index');
Route::get('/Logout','App\Http\Controllers\LoginController@getLogout');
Route::get('/ChangePassword','App\Http\Controllers\StaffController@changePassword');
Route::get('/AdminDashboard','App\Http\Controllers\AdminController@index');
Route::get('/StaffDashboard','App\Http\Controllers\StaffController@index');
Route::get('/FacultyDashboard','App\Http\Controllers\FacultyController@index');
Route::get('/UserDetails','App\Http\Controllers\AdminController@userDetails');
Route::get('/UserRoles','App\Http\Controllers\AdminController@userRoles');
Route::get('/AddRole','App\Http\Controllers\AdminController@addRole');

Route::post('/finalized','App\Http\Controllers\FacultyController@finalized');


Route::get('/Faculty','App\Http\Controllers\LoginController@facultypage');
