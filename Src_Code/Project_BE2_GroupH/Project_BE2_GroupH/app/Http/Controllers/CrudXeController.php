<?php

namespace App\Http\Controllers;

use App\Models\Xe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CrudXeController extends Controller
{
    public function createXe()
    {
        return view('crud_xe.create_xe');
    }

    public function postXe(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'maxe' => 'required|unique:xe',
            'tenxe' => 'required',
            'giaxe' => 'required',
            'mauxe' => 'required',
            'sochongoi' => 'required',
            'dongco' => 'required',
            'dungtichbinhxang' => 'required',
            'hinhanhxe' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'maloaixe' => 'required|unique:xe',
        ]);

        // Kiểm tra xem tệp tin có trường dữ liệu avatar hay kh?
        if ($request->hasFile('hinhanhxe')) {
            $file = $request->file('hinhanhxe');
            $extension = $file->getClientOriginalExtension(); // Lấy tên mở rộng .jpg, .png
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename); // Upload lên thư mục avatar trong public
        }

        // Lấy tất cả cơ sở dữ liệu đổ vào $data
        $data = $request->all();

        $check = Xe::create([
            'maxe' => $data['maxe'],
            'tenxe' => $data['tenxe'],
            'giaxe' => $data['giaxe'],
            'mauxe' => $data['mauxe'],
            'sochongoi' => $data['sochongoi'],
            'dongco' => $data['dongco'],
            'dungtichbinhxang' => $data['dungtichbinhxang'],
            'hinhanhxe' => $filename ?? NULL,
            'maloaixe' => $data['maloaixe'],
        ]);

        return redirect("list_xe")->withSuccess('Thêm thông tin xe thành công!');
    }

    public function readXe(Request $request)
    {
        $xe_id = $request->get('xe_id');
        $xe = Xe::find($xe_id);

        return view('crud_xe.read_xe', ['xe' => $xe]);
    }

    public function deleteXe(Request $request)
    {
        $xe_id = $request->get('xe_id');
        $xe = Xe::destroy($xe_id);

        return redirect('list_xe')->withSuccess('Xóa thông tin xe thành công!');
    }

    public function updateXe(Request $request)
    {
        $xe_id = $request->get('xe_id');
        $xe = Xe::find($xe_id);

        return view('crud_xe.update_xe', ['xe' => $xe]);
    }

    public function postUpdateXe(Request $request)
    {

        $xe = Xe::find($request->get('xe_id'));
        $xe->maxe = $request->input('maxe');
        $xe->tenxe = $request->input('tenxe');
        $xe->giaxe = $request->input('giaxe');
        $xe->mauxe = $request->input('mauxe');
        $xe->sochongoi = $request->input('sochongoi');
        $xe->dongco = $request->input('dongco');
        $xe->dungtichbinhxang = $request->input('dungtichbinhxang');

        // Kiểm tra xem tệp tin có trường dữ liệu avatar hay kh?
        if ($request->hasFile('hinhanhxe')) {

            $anhcu = 'uploads/' . $xe->hinhanhxe;

            // Có file đính kèm trong form update thì tìm file cũ và xóa đi
            // Nếu $anhcu tồn tại thì xóa đi, nếu kh có thì kh xóa
            if (File::exists($anhcu)) {
                if (strpos($anhcu, 'default') == null) {
                    File::delete($anhcu);
                }
            }

            $file = $request->file('hinhanhxe');
            $extension = $file->getClientOriginalExtension(); // Lấy tên mở rộng .jpg, .png
            $filename = time() . '.' . $extension;
            $file->move('uploads/', $filename); // Upload lên thư mục avatar trong public
            $xe->hinhanhxe = $filename;
        }

        $xe->update();

        return redirect("list_xe")->withSuccess('Sửa thông tin xe thành công!');
    }

    public function listXe()
    {

        if (Auth::check()) {
            $xe = Xe::paginate(5);
            return view('crud_xe.list_xe', ['xe' => $xe]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
