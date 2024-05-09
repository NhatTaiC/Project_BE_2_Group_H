<?php

namespace App\Http\Controllers;

use App\Models\Relationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudRelationship extends Controller
{
    public function index(Request $request)
    {
        $relationships = DB::table('relationships')->paginate(1);
        return view('crud_relationship.list_relationship',['relationships' => $relationships]);
    }

    public function addPageRelationship()
    {
        return view('crud_relationship.add_relationship');
    }

    public function postRelationship(Request $request)
    {
        $request->validate([
            'maLienHe' => 'required',
            'tenPhongBan' => 'required',
            'soDT' => 'required',
        ]);

        $data = $request->all();
        $check = Relationship::create([
            'maLienHe' => $data['maLienHe'],
            'tenPhongBan' => $data['tenPhongBan'],
            'soDT' => $data['soDT']
        ]);
        return redirect("listRelationship")->withSuccess('You have signed-in');
    }
    public function deleteRelationship(Request $request)
    {
        $maLienHe_id = $request->get('maLienHe');
        $relationship = Relationship::destroy($maLienHe_id);
        return redirect("listRelationship")->withSuccess('You have signed-in');
    }

    public function updateRelationship(Request $request)
    {
        $maLienHe_id = $request->get('maLienHe');
        $relationship = Relationship::find($maLienHe_id);

        return view('crud_relationship.update_relationship', ['maLienHe' => $relationship]);
    }

    /**
     * Submit form update user
     */
    public function postUpdateRelationship(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'maLienHe' => 'required',
            'tenPhongBan' => 'required',
            'soDT' => 'required',
        ]);

        $relationship = Relationship::find($input['maLienHe']);
        $relationship->maLienHe = $input['maLienHe'];
        $relationship->tenPhongBan = $input['tenPhongBan'];
        $relationship->soDT = $input['soDT'];
        $relationship->save();

        return redirect("listRelationship")->withSuccess('You have signed-in');
    }
}

