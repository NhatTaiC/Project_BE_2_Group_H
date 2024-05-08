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

    public function deleteRelationship(Request $request)
    {
        $maLienHe_id = $request->get('maLienHe');
        $relationship = Relationship::destroy($maLienHe_id);
        return redirect("listRelationship")->withSuccess('You have signed-in');
    }
}

