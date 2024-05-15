<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
//            return redirect()->intended('list')
//                ->withSuccess('Signed in');
            return view('management_page');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    /**
     * Registration page
     */
    public function createUser()
    {
        return view('crud_user.create_user');
    }

    /**
     * User submit form register
     */
    public function postUser(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|min:10',
            'mssv' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Kiểm tra xem tệp tin có trường dữ liệu avatar hay kh?
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension(); // Lấy tên mở rộng .jpg, .png
            $filename = time() . '.' . $extension;
            $file->move('avatar/', $filename); // Upload lên thư mục avatar trong public
        }

        // Lấy tất cả cơ sở dữ liệu đổ vào $data
        $data = $request->all();

        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'mssv' => $data['mssv'],
            'avatar' => $filename ?? NULL,
        ]);

        return redirect("list")->withSuccess('You have signed-in');
    }

    /**
     * View user detail page
     */
    public function readUser(Request $request)
    {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read_user', ['user' => $user]);
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

        return view('crud_user.update_user', ['user' => $user]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateUser(Request $request)
    {

        $input = $request->all();

        $user = User::find($input['id']);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->phone = $input['phone'];

        if ($request->hasFile('avatar')) {

            $anhcu = 'avatar/' . $user->avatar;

            // Có file đính kèm trong form update thì tìm file cũ và xóa đi
            // Nếu $anhcu tồn tại thì xóa đi, nếu kh có thì kh xóa
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }

            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('avatar/', $filename);
            $user->avatar = $filename;
        }

        $user->mssv = $input['mssv'];

        $user->update();


        return redirect("list")->withSuccess('You have signed-in');

    }

    /**
     * List of users
     */
    public function listUser()
    {
        if (Auth::check()) {
            //$users = User::all();
            //$users = DB::table('users')->paginate(5);
            $users = User::paginate(5);
            return view('crud_user.list_user', ['users' => $users]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
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
