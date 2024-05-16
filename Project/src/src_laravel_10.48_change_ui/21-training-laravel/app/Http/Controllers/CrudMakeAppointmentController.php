<?php

namespace App\Http\Controllers;

//use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use App\Models\makeappointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class CrudMakeAppointmentController extends Controller
{
    
    public function listMakeAppointment(){
        $mkappointment = DB::table('makeappointments')->paginate(5);
        if($key = request()->key){
            $mkappointment = DB::table('makeappointments')->where('TenKH','like','%'.$key.'%')
            ->orWhere('SoDTKH','like','%'.$key.'%')
            ->paginate(5);
        }
        return view('crud_MakeAppointment.list_MakeAppointment', compact('mkappointment'));
    }

    public function addMakeAppointment(){
        return view('crud_MakeAppointment.add_MakeAppointment');
    }

    public function storeMakeAppointment(Request $request){
        $mkappointment = new Makeappointment;
        $mkappointment->MaLH = $request->input('MaLH');
        $mkappointment->TenLH = $request->input('TenLH');
        $mkappointment->TenKH = $request->input('TenKH');
        $mkappointment->SoDTKH = $request->input('SoDTKH');
        $mkappointment->MaLoaiXe = $request->input('MaLoaiXe');
        $mkappointment->TrangThai = $request->input('TrangThai');
        $mkappointment->YeuCau = $request->input('YeuCau');
        if ($request->hasFile('HinhAnh')){
            $file = $request->file('HinhAnh');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/imgmakeappointment/', $filename);
            $mkappointment->HinhAnh = $filename; 
        }
        $mkappointment->save();
        return redirect()->back()->with('status','Luu thong tin thanh cong');
        return redirect('crud_MakeAppointment.list_MakeAppointment', compact('mkappointment'));
    }
    public function editMakeAppointment(Request $request){

      
        $makeappointments_id = $request->get('makeappointments_id');
       
         $makeappointment = Makeappointment::find($makeappointments_id);
         return view('crud_MakeAppointment.edit_MakeAppointment', ['makeappointment'=>$makeappointment]);
    }

    public function updateMakeAppointment(Request $request){

        $makeappointment = Makeappointment::find($request->get('makeappointments_id'));
        $makeappointment->MaLH = $request->input('MaLH');
        $makeappointment->TenLH = $request->input('TenLH');
        $makeappointment->TenKH = $request->input('TenKH');
        $makeappointment->SoDTKH = $request->input('SoDTKH');
        $makeappointment->MaLoaiXe = $request->input('MaLoaiXe');
        $makeappointment->TrangThai = $request->input('TrangThai');
        $makeappointment->YeuCau = $request->input('YeuCau');
        if ($request->hasFile('HinhAnh')) {
            //co file dinh kem trong form update thi tim file cu va xoa di
            //neu truoc do ko co anh dai dien cu thi ko xoa
            $anhcu = 'uploads/imgmakeappointment/' . $makeappointment->HinhAnh;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            $file = $request->file('HinhAnh');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/imgmakeappointment/', $filename);  //upload len thu muc uploads/students
            $makeappointment->HinhAnh = $filename;
        }
        $makeappointment->update();
        return redirect()->back()->with('status', 'Cap nhat sinh vien voi anh dai dien thanh cong');
    } 

    public function deleteMakeAppointment(Request $request){
        $makeappointment = Makeappointment::find($request->get('makeappointments_id'));
        $anhcu = 'uploads/imgmakeappointment/' . $makeappointment->HinhAnh;
        if (File::exists($anhcu)) {
            File::delete($anhcu);
        }
        $makeappointment->delete();
        return redirect()->back()->with('status','Xóa thành công');
    }
}
