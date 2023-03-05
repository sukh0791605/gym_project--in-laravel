<?php

use App\Http\Controllers\GYMController;
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
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('Home');
// });
Route::get('/home',[GYMController::class,'home']);
// Route::get('/Sechedule', function () {
//     return view('Schedule');
// });
Route::get('/Sechedule',[GYMController::class,'Sechedule']);

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about',[GYMController::class,'about']);


Route::get('/contact',[GYMController::class,'contact']);
Route::get('/signup',[GYMController::class,'signup']);
Route::post('/signup',[GYMController::class,'signupdata']);


