<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        return view('backend.index');
    }
}
