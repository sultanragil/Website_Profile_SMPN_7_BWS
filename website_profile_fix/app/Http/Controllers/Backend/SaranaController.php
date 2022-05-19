<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sarana;

class SaranaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $sarana = null;
        $sarana = DB::table('facilities')->paginate(5);
        return view('backend.sarana.index',compact('sarana'));
    }
    public function create()
    {
        $sarana = null;
        return view('backend.sarana.create',compact('sarana'));
    }
    public function edit($id)
    {
        $sarana = DB::table('facilities')->where('id',$id)->first();
        return view('backend.sarana.edit',compact('sarana'));
    }
    public function destroy($id)
    {
        DB::table('facilities')->where('id',$id)->delete();
        return redirect()->route('sarana.index')->with('success','Data Creator Berhasil Dihapus');
    }
    public function update($id, Request $request)
    {
        $sarana = facilities::find($id);
        if($request->hasFile('image')){
            $image           = $request->file('image');
            $nama_file      = $image->getClientOriginalName();
            $image->move('backend/assets/img/',$image->getClientOriginalName());
            $sarana->image = $nama_file;
        }
        $sarana->nama = $request->nama;
        $sarana->desc = $request->desc;
        $sarana->save();

        return redirect()->route('sarana.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
    
    public function store(Request $request)
    {
        $sarana = new Sarana;
        $image          = $request->file('image');
        $nama_file      = $image->getClientOriginalName();
        $image->move('backend/assets/img/',$image->getClientOriginalName());
        $sarana->nama = $request->nama;
        $sarana->desc = $request->desc;
        $sarana->save();

        return redirect()->route('sarana.index')->with('success','Data Telah Berhasil Ditambah.');
    }
}
