<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;

class FPegawaiController extends Controller
{
    public function index()
    {   
        $pegawai = Pegawai::where('category','pegawai')->get();
        $karyawan = Pegawai::where('category','karyawan')->get();
        return view('frontend.pegawai.index',compact('pegawai','karyawan'));
    }
}
