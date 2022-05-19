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
        $kontak = null;
        $kontak = DB::table('contacts')->paginate(5);
        return view('backend.kontak.index',compact('kontak'));
    }
    public function create()
    {
        $kontak = null;
        return view('backend.kontak.create',compact('kontak'));
    }
    public function edit($id)
    {
        $kontak = DB::table('contacts')->where('id',$id)->first();
        return view('backend.kontak.edit',compact('kontak'));
    }
    public function destroy($id)
    {
        DB::table('contacts')->where('id',$id)->delete();
        return redirect()->route('kontak.index')->with('success','Data Creator Berhasil Dihapus');
    }
    public function update($id, Request $request)
    {
        $kontak = Kontak::find($id);
        if($request->hasFile('logo')){
            $logo           = $request->file('logo');
            $nama_file      = $logo->getClientOriginalName();
            $logo->move('backend/assets/img/',$logo->getClientOriginalName());
            $kontak->logo = $nama_file;
        }
        $kontak->jenis_kontak = $request->jenis;
        $kontak->nama_kontak = $request->nama;
        $kontak->link = $request->link;
        $kontak->save();

        return redirect()->route('kontak.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
    
    public function store(Request $request)
    {
        $kontak = new Kontak;
        $logo           = $request->file('logo');
        $nama_file      = $logo->getClientOriginalName();
        $logo->move('backend/assets/img/',$logo->getClientOriginalName());
        $kontak->jenis_kontak = $request->jenis;
        $kontak->nama_kontak = $request->nama;
        $kontak->link = $request->link;
        $kontak->logo = $nama_file;
        $kontak->save();

        return redirect()->route('kontak.index')->with('success','Data Telah Berhasil Ditambah.');
    }
}
