<?php

use App\Http\Controllers\CrudBranchController;
use App\Http\Controllers\CrudLoaiXeController;
use App\Http\Controllers\CrudRelationship;
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

/* User */
Route::get('dashboard', [CrudUserController::class, 'dashboard']);
Route::get('branch_boards', [CrudUserController::class, 'branch_boards']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

/* Management Page */
Route::get('management_page', [HomeController::class, 'ManagePage'])->name('management_page');

/* Home Page */
Route::get('home', [HomeController::class, 'HomePage'])->name('home');
Route::get('management_page', [HomeController::class, 'ManagePage'])->name('management_page');

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

/* Relationship */
Route::get('deleteRelationship', [CrudRelationship::class, 'deleteRelationship'])->name('relationship.deleteRelationship');
Route::get('listRelationship', [CrudRelationship::class, 'index'])->name('relationship.index');

Route::get('addPageRelationship', [CrudRelationship::class, 'addPageRelationship'])->name('relationship.addPageRelationship');
Route::post('addPageRelationship', [CrudRelationship::class, 'postRelationship'])->name('relationship.postRelationship');

Route::get('updateRelationship', [CrudRelationship::class, 'updateRelationship'])->name('relationship.updateRelationship');
Route::post('updateRelationship', [CrudRelationship::class, 'postUpdateRelationship'])->name('relationship.postUpdateRelationship');

/* Branch */
Route::get('listBranch', [CrudBranchController::class, 'listBranches'])->name('branch.listBranches');

Route::get('addBranch', [CrudBranchController::class, 'createBranch'])->name('branch.createBranch');
Route::post('addBranch', [CrudBranchController::class, 'postBranch'])->name('branch.postBranch');

Route::get('updateBranch', [CrudBranchController::class, 'editBranch'])->name('branch.editBranch');
Route::post('updateBranch', [CrudBranchController::class, 'updateBranch'])->name('branch.updateBranch');

Route::get('deleteBranch', [CrudBranchController::class, 'deleteBranch'])->name('branch.deleteBranch');

Route::post('searchBranch', [CrudBranchController::class, 'searchBranch'])->name('branch.searchBranch');

Route::get('sortBranch_desc', [CrudBranchController::class, 'sortBranch_desc'])->name('branch.sortBranch_desc');


//                       _oo0oo_
//                      o8888888o
//                      88" . "88
//                      (| -_- |)
//                      0\  =  /0
//                    ___/`---'\___
//                  .' \\|     |// '.
//                 / \\|||  :  |||// \
//                / _||||| -:- |||||- \
//               |   | \\\  -  /// |   |
//               | \_|  ''\---/''  |_/ |
//               \  .-\__  '-'  ___/-. /
//             ___'. .'  /--.--\  `. .'___
//          ."" '<  `.___\_<|>_/___.' >' "".
//         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
//         \  \ `_.   \_ __\ /__ _/   .-` /  /
//     =====`-.____`.___ \_____/___.-`___.-'=====
//                       `=---='
//
//     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//            Phật phù hộ, không bao giờ BUG
//     ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
