<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;

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
    return view('auth/login');
});

Auth::routes();


Route::group(['middleware' => 'admin'], function()
{
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});

Route::group(['middleware' => 'user'], function()
{
    //All the routes that belongs to the group goes here
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    //Route::get('/edit', [HomeController::class, 'index'])->name('home');
    Route::get("/edit",[HomeController::class,"gotoEdit"])->name("edit_page");
    Route::post("/update",[HomeController::class,"updateProfile"])->name("update");
    Route::post('/payment',[PaymentController::class, 'createPayment'])->name('payment');
    //Route::post('/payment_page',[PaymentController::class, 'gotoPayment'])->name('paymentPage');
});






