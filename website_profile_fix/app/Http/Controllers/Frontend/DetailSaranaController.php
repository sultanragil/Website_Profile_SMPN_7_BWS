<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sarana;

class DetailSaranaController extends Controller
{
    public function index()
    {
        $detail = Sarana::all();
        return view('frontend.sarana.page',compact('detail'));
    }
    public function show($id, Request $request){
        $detail =Sarana::find($id);
        return view('frontend.sarana.page', compact('detail'));
    }
}
