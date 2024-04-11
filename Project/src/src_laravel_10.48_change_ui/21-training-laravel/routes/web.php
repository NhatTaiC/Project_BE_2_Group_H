<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUser;

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

Route::get('dashboard', [CrudUser::class, 'dashboard']);

Route::get('login', [CrudUser::class, 'login'])->name('login');
Route::post('login', [CrudUser::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUser::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUser::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUser::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUser::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUser::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUser::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUser::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUser::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});
