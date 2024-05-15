<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Hash;
use Illuminate\Support\Facades\DB;
use Session;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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



}
