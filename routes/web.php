<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCrude;
use App\Http\Controllers\FourResult;
use App\Http\Controllers\SixResult;
use App\Http\Controllers\Customer;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Revsub;
use App\Http\Controllers\ApplyController;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
Route::resource('admin', AdminCrude::class)->middleware('admin');
Route::get('/user', [Customer::class, 'index'])->name('user')->middleware('user');
Route::get('/SixResult', [App\Http\Controllers\SixController::class, 'six'])->name('formSix');
Route::post('/six_result', [App\Http\Controllers\SixController::class, 'store'])->name('form_six');
Route::get('/fourResult', [App\Http\Controllers\FourController::class, 'four'])->name('formFour');
Route::post('/four_result', [App\Http\Controllers\FourController::class, 'store'])->name('form_four');
 
Route::get('/changePassword', [App\Http\Controllers\ChangePassword::class, 'four'])->name('cpass');
Route::post('/changepassword', [App\Http\Controllers\ChangePassword::class, 'store'])->name('cpassword');
 
Route::get('/insert', [App\Http\Controllers\PersonController::class, 'person'])->name('person');
Route::post('/create', [App\Http\Controllers\PersonController::class, 'store'])->name('personalinfo');
Route::get('/review_submission', [App\Http\Controllers\DiplayInfo::class, 'display'])->name('revsub');

Route::resource('rev', Revsub::class);
Route::resource('apply',ApplyController::class);
Route::resource('four', FourResult::class);
Route::resource('six', SixResult::class);
