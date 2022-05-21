<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sarana;
use Illuminate\Support\Facades\DB;

class FSaranaController extends Controller
{
    public function index()
    {   
        $sarana = Sarana::get();
        return view('frontend.sarana.index',compact('sarana'));
    }
    public function show($id, Request $request)
    {
        $detail = DB::table('facilities')->where('id', $id)->first();
        return view('frontend.sarana.page',compact('detail'));
    }
}
