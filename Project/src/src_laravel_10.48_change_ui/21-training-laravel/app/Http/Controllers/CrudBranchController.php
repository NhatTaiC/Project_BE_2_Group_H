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
//        $branches = Branch::all();
        $branches = DB::table('branches')->paginate(1);
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
            $file->move('uploads/branches/', $filename);  //upload len thu muc uploads/students
            $branch->imgCN = $filename;
        }
        $branch->save();

        return redirect("listBranch");
//        return redirect("list_branch")->withSuccess('status','You have signed-in');
    }


    public function editBranch(Request $request)
    {
        //tim branch theo id
//        $branch = Branch::find($maCN);
//        return view('crud_branch.update_branch', compact('branch'));
        $branch_id = $request->get('branch_id');
        $branch = Branch::find($branch_id);
        return view('crud_branch.update_branch', ['branch'=>$branch]);

    }

    public function updateBranch(Request $request)
    {
        $branch = Branch::find($request->get('branch_id'));
        $branch->maCN = $request->input('maCN');
        $branch->tenCN = $request->input('tenCN');
        $branch->diaChiCN = $request->input('diaChiCN');
        $branch->sodtCN = $request->input('sodtCN');
        if ($request->hasFile('imgCN')) {
            //co file dinh kem trong form update thi tim file cu va xoa di
            //neu truoc do ko co anh dai dien cu thi ko xoa
            $anhcu = 'uploads/branches/' . $branch->imgCN;
            if (File::exists($anhcu)) {
                File::delete($anhcu);
            }
            $file = $request->file('imgCN');
            $extension = $file->getClientOriginalExtension(); //lay ten mo rong .jpg, .png,....
            $filename = time() . '.' . $extension;
            $file->move('uploads/branches/', $filename);  //upload len thu muc uploads/students
            $branch->imgCN = $filename;
        }
        $branch->update();
        return redirect("listBranch");
    }

    public function deleteBranch(Request $request)
    {
//        $branch = Branch::find($maCN);
        $branch_id = $request->get('branch_id');
//        $anhdaidien = 'uploads/branches/' . $branch_id->imgCN;
//        if (File::exists($anhdaidien)) {
//            File::delete($anhdaidien);
//        }
        $branch = Branch::destroy($branch_id);
//        $branch->delete();
        return redirect("listBranch");
    }

}
