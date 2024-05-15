<?php

namespace App\Http\Controllers;

use App\Models\LoaiXe;
use App\Models\User;
use App\Models\Xe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CrudLoaiXeController extends Controller
{
    public function createLoaiXe()
    {
        return view('crud_loaixe.create_loaixe');
    }

    public function postLoaiXe(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'maloaixe' => 'required|unique:loaixe',
            'tenloaixe' => 'required',
            'namsx' => 'required',
            'quocgia' => 'required',
            'mota' => 'required',
            'hinhanh' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Kiểm tra xem tệp tin có trường dữ liệu avatar hay kh?
        if ($request->hasFile('hinhanh')) {
            $file = $request->file('hinhanh');
            $extension = $file->getClientOriginalExtension(); // Lấy tên mở rộng .jpg, .png
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename); // Upload lên thư mục avatar trong public
        }

        // Lấy tất cả cơ sở dữ liệu đổ vào $data
        $data = $request->all();

        $check = LoaiXe::create([
            'maloaixe' => $data['maloaixe'],
            'tenloaixe' => $data['tenloaixe'],
            'namsx' => $data['namsx'],
            'quocgia' => $data['quocgia'],
            'mota' => $data['mota'],
            'hinhanh' => $filename ?? NULL,
        ]);

        return redirect("list_loaixe")->withSuccess('Thêm thông tin loại xe thành công!');
    }

    public function readLoaiXe(Request $request)
    {
        $loaixe_id = $request->get('loaixe_id');
        $loaixe = LoaiXe::find($loaixe_id);

        return view('crud_loaixe.read_loaixe', ['loaixe' => $loaixe]);
    }

    public function deleteLoaiXe(Request $request)
    {
        $loaixe_id = $request->get('loaixe_id');

        $isDelete = false;

        //Check existing xe
        $xe = Xe::where('xe_id', '=', $loaixe_id);

        if (empty($xe)) {
            $isDelete = true;
        }

        if ($isDelete) {
            $loaixe = LoaiXe::destroy($loaixe_id);
            return redirect('list_loaixe')->withSuccess('Xóa thông tin loại xe thành công!');
        }
        else {
            return redirect('list_loaixe')->withErrors('Mã loại xe có liên quan đến xe, xóa thông tin loại xe không thành công!');
        }

    }

    public function updateLoaiXe(Request $request)
    {
        $loaixe_id = $request->get('loaixe_id');
        $loaixe = LoaiXe::find($loaixe_id);

        return view('crud_loaixe.update_loaixe', ['loaixe' => $loaixe]);
    }

    public function postUpdateLoaiXe(Request $request)
    {

        $loaixe = LoaiXe::find($request->get('loaixe_id'));
        $loaixe->maloaixe = $request->input('maloaixe');
        $loaixe->tenloaixe = $request->input('tenloaixe');
        $loaixe->namsx = $request->input('namsx');
        $loaixe->quocgia = $request->input('quocgia');
        $loaixe->mota = $request->input('mota');

        // Kiểm tra xem tệp tin có trường dữ liệu avatar hay kh?
        if ($request->hasFile('hinhanh')) {

            $anhcu = 'uploads/' . $loaixe->hinhanh;

            // Có file đính kèm trong form update thì tìm file cũ và xóa đi
            // Nếu $anhcu tồn tại thì xóa đi, nếu kh có thì kh xóa
            if (File::exists($anhcu)) {
                if (strpos($anhcu, 'default') == null) {
                    File::delete($anhcu);
                }
            }

            $file = $request->file('hinhanh');
            $extension = $file->getClientOriginalExtension(); // Lấy tên mở rộng .jpg, .png
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename); // Upload lên thư mục avatar trong public
            $loaixe->hinhanh = $filename;
        }

        $loaixe->update();

        return redirect("list_loaixe")->withSuccess('Sửa thông tin loại xe thành công!');
    }

    public function listLoaiXe()
    {

        if (Auth::check()) {
            $loaixe = LoaiXe::paginate(5);
            return view('crud_loaixe.list_loaixe', ['loaixe' => $loaixe]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
