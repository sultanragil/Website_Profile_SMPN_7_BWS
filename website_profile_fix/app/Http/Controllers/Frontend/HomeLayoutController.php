<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class HomeLayoutController extends Controller
{
    public function index()
    {   
        $homelayout = Kontak::get();
        return view('frontend.layouts.main-template',compact('homelayout'));
    }
}
