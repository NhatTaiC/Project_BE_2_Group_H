<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * CRUD User controller
 */
class CrudBranchController extends Controller
{

    /**
     * Login page
     */
//    public function listBranches()
//    {
//        return view('crud_branch.list_branch');
//    }

    /**
     * User submit form login
     */
    public function authUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        /* Mac Dinh */
        /*
         * $credentials = $request->only('email', 'password');
         * */

        /* Theo Yeu Cau: Nhap Email/Password nao cung vao duoc trang web */
        $credentials = (['email' => "user1@mail.com", 'password' => "123456"]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('list')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');

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
    public function readBranch(Request $request)
    {
        $chiNhanh_id = $request->get('maCN');
        $branch = Branch::find($chiNhanh_id);

        return view('crud_user.read', ['branch' => $branch]);
    }

    /**
     * Delete user by id
     */
    public function deleteUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("list")->withSuccess('You have signed-in');
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
            'email' => 'required|email|unique:users,id,' . $input['id'],
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
    public function listBranches()
    {
//        if (Auth::check()) {

            $branches = DB::table('branches')->paginate(1);

            return view('crud_branch.list_branch', ['branches' => $branches]);

//        }
//        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Sign out
     */
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}
