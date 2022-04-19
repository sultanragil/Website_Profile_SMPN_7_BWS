<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); /* Cara agar cuman super admin*/
    }
    public function index()
    {
        return view('backend.index');
    }
}
