<?php

namespace App\Http\Controllers;

use App\Models\Xe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ManagePage()
    {
        return view('management_page');
    }

    public function HomePage()
    {
        $xe = Xe::paginate(5);
        return view('home_page', ['xe' => $xe]);
    }
}
