<?php

namespace App\Http\Controllers;

use Hash;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\DB;
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class CrudUserController extends Controller
{

    /**
     * Login page
     */
    public function login()
    {
        return view('crud_user.login');
    }

    /**
     * User submit form login
     */
    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

<<<<<<< HEAD
        $credentials = $request->only('email', 'password');
=======
        /* Mac Dinh */
        /*
         * $credentials = $request->only('email', 'password');
         * */

        /* Theo Yeu Cau: Nhap Email/Password nao cung vao duoc trang web */
        $credentials = (['email' => "user1@mail.com", 'password' => "123456"]);

>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
        if (Auth::attempt($credentials)) {
            return redirect()->intended('list')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
<<<<<<< HEAD
=======

>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
    }

    /**
     * Registration page
     */
    public function createUser()
    {
        return view('crud_user.create');
    }

    /**
     * User submit form register
     */
    public function postUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * View user detail page
     */
<<<<<<< HEAD
    public function readUser(Request $request) {
=======
    public function readUser(Request $request)
    {
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read', ['user' => $user]);
    }

    /**
     * Delete user by id
     */
<<<<<<< HEAD
    public function deleteUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("list")->withSuccess('User has deleted successfully');
=======
    public function deleteUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("list")->withSuccess('You have signed-in');
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
    }

    /**
     * Form update user page
     */
    public function updateUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.update', ['user' => $user]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'name' => 'required',
<<<<<<< HEAD
            'email' => 'required|email|unique:users,id,'.$input['id'],
=======
            'email' => 'required|email|unique:users,id,' . $input['id'],
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
            'password' => 'required|min:6',
        ]);

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->save();

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * List of users
     */
    public function listUser()
    {
<<<<<<< HEAD
        if(Auth::check()){
            $users = User::all();
            return view('crud_user.list', ['users' => $users]);
=======
        if (Auth::check()) {

            /* $users = User::all();

          return view('crud_user.list', ['users' => $users]);*/

            $users = DB::table('users')->paginate(5);

            return view('crud_user.list', ['users' => $users]);

>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Sign out
     */
<<<<<<< HEAD
    public function signOut() {
=======
    public function signOut()
    {
>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
<<<<<<< HEAD
=======

>>>>>>> ed6f8b7a0d5e47d0a1920dbb0677276fccbd02f1
}
