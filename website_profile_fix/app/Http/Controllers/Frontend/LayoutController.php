<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class LayoutController extends Controller
{
    public function index()
    {   
        $layout = Kontak::get();
        return view('frontend.layouts.template',compact('layout'));
    }
}
