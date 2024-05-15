<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

/**
 * CRUD User controller
 */
class CrudBranchController extends Controller
{
    /**
     * Registration page
     */

    public  function listBranches()
    {
        $branches = Branch::paginate(10);
        return view('crud_branch.list_branch',compact('branches'));
    }

    public function createBranch()
    {
        return view('crud_branch.add_branch');
    }

    public function postBranch(Request $request)
    {

        $branch = new Branch;
        $branch->maCN = $request->input('maCN');
        $branch->tenCN = $request->input('tenCN');
        $branch->diaChiCN = $request->input('diaChiCN');
        $branch->sodtCN = $request->input('sodtCN');
        if ($request->hasFile('imgCN')) {
            $file = $request->file('imgCN');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/students/', $filename);  //upload len thu muc uploads/students
            $branch->imgCN = $filename;
        }
        $branch->save();

        return redirect()->back()->with('status','Them sinh vien thanh cong');
//        return redirect("list_branch")->withSuccess('status','You have signed-in');
    }


    public function edit($maCN)
    {
        //tim branch theo id
        $branch = Branch::find($maCN);
        return view('crud_branch.update_branch', compact('branch'));
    }

    public function update(Request $request, $maCN)
    {
        //tim student theo id
        $branch = Branch::find($maCN);
        $branch->tenCN = $request->input('tenCN');
        $branch->diaChiCN = $request->input('diaChiCN');
        $branch->sodtCN = $request->input('sodtCN');
        if ($request->hasFile('imgCN')) {
            //co file dinh kem trong form update thi tim file cu va xoa di
            //neu truoc do ko co anh dai dien cu thi ko xoa
            $anhcu = 'uploads/students/' . $branch->imgCN;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            $file = $request->file('imgCN');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/students/', $filename);  //upload len thu muc uploads/students
            $branch->imgCN = $filename;
        }
        $branch->update();
        return redirect()->back()->with('status', 'Cap nhat sinh vien voi anh dai dien thanh cong');
    }

    public function delete($maCN)
    {
        $branch = Branch::find($maCN);
        $anhdaidien = 'uploads/students/' . $branch->imgCN;
        if (File::exists($anhdaidien)) {
            File::delete($anhdaidien);
        }
        $branch->delete();
        return redirect()->back()->with('status', 'Xóa sinh viên và ảnh đại diện thành công');
    }

}
