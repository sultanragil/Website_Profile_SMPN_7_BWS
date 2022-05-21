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
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {

        $kontak = Kontak::get();
        return view('backend.kontak.index',compact('kontak'));
    }

    public function edit($id)
    {
        $kontak = DB::table('contacts')->where('id',$id)->first();
        return view('backend.kontak.edit',compact('kontak'));
    }
    public function update($id, Request $request)
    {
        $kontak = Kontak::find($id);
        $kontak->no = $request->no;
        $kontak->alamat = $request->alamat;
        $kontak->open = $request->open;
        $kontak->gmail = $request->gmail;
        $kontak->fb = $request->fb;
        //$kontak->map = $request->map;
        $kontak->yt = $request->yt;
        $kontak->save();

        return redirect()->route('kontak.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
    
    public function store(Request $request)
    {
        $kontak = new Kontak;
        $kontak->no = $request->no;
        $kontak->alamat = $request->alamat;
        $kontak->open = $request->open;
        $kontak->gmail = $request->gmail;
        $kontak->fb = $request->fb;
        //$kontak->map = $request->map;
        $kontak->yt = $request->yt;
        $kontak->save();

        return redirect()->route('kontak.index')->with('success','Data Telah Berhasil Ditambah.');
    }
}
