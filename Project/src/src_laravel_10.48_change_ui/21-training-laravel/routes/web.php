<?php

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

Route::get('dashboard', [CrudUserController::class, 'dashboard']);

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


Route::get('deleteRelationship', [\App\Http\Controllers\CrudRelationship::class, 'deleteRelationship'])->name('relationship.deleteRelationship');
Route::get('listRelationship', [\App\Http\Controllers\CrudRelationship::class, 'index'])->name('relationship.index');

Route::get('addPageRelationship', [\App\Http\Controllers\CrudRelationship::class, 'addPageRelationship'])->name('relationship.addPageRelationship');
Route::post('addPageRelationship', [\App\Http\Controllers\CrudRelationship::class, 'postRelationship'])->name('relationship.postRelationship');

Route::get('updateRelationship', [\App\Http\Controllers\CrudRelationship::class, 'updateRelationship'])->name('relationship.updateRelationship');
Route::post('updateRelationship', [\App\Http\Controllers\CrudRelationship::class, 'postUpdateRelationship'])->name('relationship.postUpdateRelationship');

Route::get('listBranch', [\App\Http\Controllers\CrudBranchController::class,'listBranches'])->name('brach.listbranches');

Route::get('create-branch', [\App\Http\Controllers\CrudBranchController::class, 'createBranch'])->name('branch.createBranch');
Route::post('create-branch', [\App\Http\Controllers\CrudBranchController::class, 'postBranch'])->name('branch.postBranch');

Route::get('edit-sinhvien/{maCN}', [\App\Http\Controllers\CrudBranchController::class, 'edit'])->name('branch.edit');
Route::post('update-sinhvien/{maCN}', [\App\Http\Controllers\CrudBranchController::class, 'update'])->name('branch.update');

Route::delete('delete-sinhvien/{maCN}', [App\Http\Controllers\CrudBranchController::class, 'delete'])->name('student.delete');


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
