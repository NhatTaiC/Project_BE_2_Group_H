<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
            return redirect()->intended('management_page')
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
        //kiem tra du lieu  dau vao
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|min:10',

            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
         //Kiem tra tep tin co truong du lieu avatar hay kh
         if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();//Lay ten mo rong .jpg, .png...
            $filename = time().'.'.$extension;//
            $file->move('avatar/',$filename) ;  //upload len thu muc avatar trong piblic
        }

        //Lay tat ca co so du lieu gan vao mang data
        $data = $request->all();

        $check = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],

            'avatar' => $filename ?? NULL,
            // 'avatar' => $avatarName ?? NULL,

        ]);

            return redirect("login")->withSuccess('Đăng ký thành công!');
    }

    /**
     * View user detail page
     */
    public function readUser(Request $request) {
        $user_id = $request->get('id');
        // trả về biến thông tin user
        $user = User::find($user_id);

        return view('crud_user.read', ['user' => $user]);
    }

    /**
     * Delete user by id
     */
    public function deleteUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::destroy($user_id);

        return redirect("list")->withSuccess('Bạn đã xóa user thành công!');
        // return view('crud_user.list');
    }

    /**
     * Form update user page
     */
    public function updateUser(Request $request)
    {
        //tim user theo id
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
            'email' => 'required|email|unique:users,id,'.$input['id'],
            'password' => 'required|min:6',
            'phone' => 'required|min:10',
            //'mssv' => 'required',

            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



       $user = User::find($input['id']);
       $user->name = $input['name'];
       $user->email = $input['email'];
       $user->password = $input['password'];
       $user->phone = $input['phone'];

          //Kiem tra tep tin co truong du lieu avatar hay kh
          if($request->hasFile('avatar')){

            //co file dinh kem trong form update thi tim file cu va xoa di
            //Neu $anhcu ton tai thi xoa no di , neu kh co thi kh xoa
            // $anhcu = 'avatar/user.jpg';
            // if(File::exists($anhcu)){
            //     File::delete($anhcu);
            // }

              $anhcu = 'avatar' . $user->avatar;
              if (File::exists($anhcu)) {

                  if (strpos($anhcu, 'default') == null){
                      File::delete($anhcu);
                  }

              }

            $file = $request->file('avatar');
            $extension = $file->getClientOriginalExtension();//Lay ten mo rong .jpg, .png...
            $filename = time().'.'.$extension;//
            $file->move('avatar/',$filename) ;  //upload len thu muc avatar trong piblic
        }
        $user->avatar = $filename;
        $user->update();

        return redirect("list")->withSuccess('Bạn đã sửa user thành công');
    }

    /**
     * List of users
     */
    public function listUser()
    {
        $users = User::paginate(8);
        if(Auth::check()){
            // $users = User::all();//Lay tat ca du lieu trong ban user
            return view('crud_user.list', ['users' => $users]);//->with('i',(request()->input('page',1)-1)*2);
        }

        return view('crud_user.list', ['users' => $users]);
    }
    public function searchUser(Request $request)
    {
    //    $tukhoa  = input::get('tukhoa');
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        $listsp = [];
        if ($tukhoa != "") {
            $listsp = DB::table("users")->where("id", "like", "%$tukhoa%")->orWhere("name", "like", "%$tukhoa%")
            ->orWhere("email", "like", "%$tukhoa%")->get();
        }


        return view('crud_user.list', ['listsp' => $listsp]);
    }

    /**
     * Sign out
     */
    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login')->withSuccess('Bạn đã đăng xuất!');
    }
}
