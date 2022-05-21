<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class FKontakController extends Controller
{
    public function index()
    {   
        $kontak = Kontak::get();
        return view('frontend.kontak.index',compact('kontak'));
    }
}
