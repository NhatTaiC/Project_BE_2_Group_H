<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudRelationship extends Controller
{
    public function index(Request $request)
    {
        $relationships = DB::table('relationships')->paginate(1);
        return view('crud_relationship.list_relationship',['relationships' => $relationships]);
    }
}
