<?php

use App\Http\Controllers\CrudLoaiXeController;
use App\Http\Controllers\CrudXeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* DashBoard */
Route::get('dashboard', [CrudUserController::class, 'dashboard']);

/* User */
Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('search', [CrudUserController::class, 'searchUser'])->name('user.search');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

/* Management Page */
Route::get('management_page', [HomeController::class, 'ManagePage'])->name('management_page');

/* Home Page */
Route::get('home', [HomeController::class, 'HomePage'])->name('home');

/* LoaiXe */
Route::get('create_loaixe', [CrudLoaiXeController::class, 'createLoaiXe'])->name('loaixe.createLoaiXe');
Route::post('create_loaixe', [CrudLoaiXeController::class, 'postLoaiXe'])->name('loaixe.postLoaiXe');

Route::get('read_loaixe', [CrudLoaiXeController::class, 'readLoaiXe'])->name('loaixe.readLoaiXe');

Route::get('delete_loaixe', [CrudLoaiXeController::class, 'deleteLoaiXe'])->name('loaixe.deleteLoaiXe');

Route::get('update_loaixe', [CrudLoaiXeController::class, 'updateLoaiXe'])->name('loaixe.updateLoaiXe');
Route::post('update_loaixe', [CrudLoaiXeController::class, 'postUpdateLoaiXe'])->name('loaixe.postUpdateLoaiXe');

Route::get('list_loaixe', [CrudLoaiXeController::class, 'listLoaiXe'])->name('loaixe.list_loaixe');

/* Xe */
Route::get('create_xe', [CrudXeController::class, 'createXe'])->name('xe.createXe');
Route::post('create_xe', [CrudXeController::class, 'postXe'])->name('xe.postXe');

Route::get('read_xe', [CrudXeController::class, 'readXe'])->name('xe.readXe');

Route::get('delete_xe', [CrudXeController::class, 'deleteXe'])->name('xe.deleteXe');

Route::get('update_xe', [CrudXeController::class, 'updateXe'])->name('xe.updateXe');
Route::post('update_xe', [CrudXeController::class, 'postUpdateXe'])->name('xe.postUpdateXe');

Route::get('list_xe', [CrudXeController::class, 'listXe'])->name('xe.list_xe');

Route::get('search_xe', [CrudXeController::class, 'searchXe'])->name('xe.searchXe');
Route::post('search_xebyid', [CrudXeController::class, 'searchXeByID'])->name('xe.search_xebyid');
Route::post('search_xebyname_bysheet', [CrudXeController::class, 'searchXeByName_BySheet'])->name('xe.search_xebyname_bysheet');

Route::get('sortxeprice_desc', [CrudXeController::class, 'sortXeByPrice_Desc'])->name('xe.sortxeprice_desc');
Route::get('sortxeprice_asc', [CrudXeController::class, 'sortXeByPrice_Asc'])->name('xe.sortxeprice_asc');

Route::get('/', function () {
    return view('welcome');
});
