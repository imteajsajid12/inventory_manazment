<?php
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//stock
Route::get('/stock', [App\Http\Controllers\HomeController::class, 'stock']);
//sell
Route::get('/sell', [App\Http\Controllers\HomeController::class, 'sell']);
Route::get('/auto', [App\Http\Controllers\HomeController::class, 'sell1']);
Route::post('/save', [App\Http\Controllers\HomeController::class, 'save'])->name('save');
Route::get('/Delete/sell/{name}/{qty}', [App\Http\Controllers\HomeController::class, 'savedelete']);
Route::get('sell/history', [App\Http\Controllers\HomeController::class, 'sellhistory']);
//coustomer
Route::get('/coustomer', [App\Http\Controllers\HomeController::class, 'coustomer']);
Route::get('/coustomer/Save', [App\Http\Controllers\HomeController::class, 'csave']);
Route::get('/coustomer/{id}/edit', [App\Http\Controllers\HomeController::class, 'coustomeredit']);
Route::get('/coustomer/delete/{id}', [App\Http\Controllers\HomeController::class, 'coustomerdelete']);
Route::post('/coustomer/update', [App\Http\Controllers\HomeController::class, 'coustomerupdate'])->name('costomerupdate');
//messege
Route::get('/messege', [App\Http\Controllers\HomeController::class, 'messege']);
Route::get('/messege/save', [App\Http\Controllers\HomeController::class, 'messegesave'])->name('messege');
//notification
Route::get('/notification', [App\Http\Controllers\HomeController::class, 'notification']);
//end//


//Admin
// Route::get('/admin', [App\Http\Controllers\Admincontrolller::class, 'index']);
Route::get('admin', [App\Http\Controllers\backendloginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin', [App\Http\Controllers\backendloginController::class,'Login']);
//adminhome
Route::get('/admin/home', [App\Http\Controllers\Admincontrolller::class, 'Home']);
//stock
Route::get('/admin/stock', [App\Http\Controllers\Admincontrolller::class, 'stock']);
Route::post('/admin/stock/save', [App\Http\Controllers\Admincontrolller::class, 'stocksave'])->name('stocksave1');
Route::get('/admin/stock/edit/{id}', [App\Http\Controllers\Admincontrolller::class, 'stockedit']);
Route::get('/admin/stock/delete/{id}', [App\Http\Controllers\Admincontrolller::class, 'stockdelete']);
Route::post('/admin/stockupdate', [App\Http\Controllers\Admincontrolller::class, 'stockupdate'])->name('stockupdate');
//sellhistory
Route::get('/admin/sell', [App\Http\Controllers\Admincontrolller::class, 'sellhistory']);
Route::get('/admin/sellhistory/delete/{id}', [App\Http\Controllers\Admincontrolller::class, 'sellhistorydelete']);
Route::get('/admin/sellhistory/delete', [App\Http\Controllers\Admincontrolller::class, 'sellhistorydeleteall']);
//month
Route::get('/admin/sell/month', [App\Http\Controllers\Admincontrolller::class, 'monthyear']);
Route::get('/admin/sellhistory/month/delete', [App\Http\Controllers\Admincontrolller::class, 'monthdelete1']);
Route::get('/admin/sellhistory/year/delete', [App\Http\Controllers\Admincontrolller::class, 'yeardelete']);
//coustomer
Route::get('/admin/coustomer', [App\Http\Controllers\Admincontrolller::class, 'coustomer']);
Route::get('/admin/coustomer/delete/{id}', [App\Http\Controllers\Admincontrolller::class, 'coustomerdelete']);
//user
Route::get('/admin/user', [App\Http\Controllers\Admincontrolller::class, 'user']);
Route::get('/admin/user/edit/{id}', [App\Http\Controllers\Admincontrolller::class, 'useredit']);
Route::get('/admin/user/delete/{id}', [App\Http\Controllers\Admincontrolller::class, 'userdelete']);
Route::post('/admin/user/register', [App\Http\Controllers\Admincontrolller::class, 'register'])->name('useregister');
//messege
Route::get('/admin/messege', [App\Http\Controllers\Admincontrolller::class, 'message']);
Route::get('/admin/messsege/delete', [App\Http\Controllers\Admincontrolller::class, 'messagedelete']);



Route::get('admin/test', [App\Http\Controllers\Admincontrolller::class, 'test']);

