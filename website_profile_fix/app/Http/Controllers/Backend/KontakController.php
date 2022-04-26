<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function __construct()
    {
        /*$this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        return view('backend.kontak.index');
    }
    public function create()
    {
        $kontak = null;
        return view('backend.kontak.create',compact('kontak'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'nama' => 'required',
            'link' => 'required',
        ]);
        $kontak = new Kontak;
        $kontak->jenis_kontak = $request->jenis;
        $kontak->nama_kontak = $request->nama;
        $kontak->link = $request->link;
        //$kontak->logo = $request->logo;
        $kontak->save();

        return redirect()->route('kontak.index')->with('success','Data Telah Berhasil Ditambah.');
    }
}
