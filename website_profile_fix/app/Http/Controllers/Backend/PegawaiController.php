<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $pegawai = DB::table('employees')
        ->join('jobs','employees.job', '=' ,'jobs.id')
        ->select('employees.*', 'jobs.name as job_name', 'jobs.id as job_id')
        ->paginate(5);
        return view('backend.pegawai.index',compact('pegawai'));
    }
    public function create(){
        $pegawai = null;
        $job = Jabatan::all();
        return view('backend.pegawai.create',compact('pegawai','job'));
    }
    public function edit($id){
        $pegawai = DB::table('employees')->where('id',$id)->first();
        $job = Jabatan::all();
        return view('backend.pegawai.edit',compact('pegawai','job'));
    }
    public function store(Request $request){
        $pegawai = new Pegawai;
        $file           = $request->file('image');
        $nama_file      = $file->getClientOriginalName();
        $file->move('backend/assets/img/',$file->getClientOriginalName());
        $pegawai->name = $request->name;
        $pegawai->nip = $request->nip;
        $pegawai->category = $request->kategori;
        $pegawai->image = $nama_file;
        $pegawai->job = $request->jabatan;
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success','Data Telah Berhasil Ditambah.');
    }
    public function update($id, Request $request){
        $pegawai = Pegawai::find($id);
        if($request->hasFile('image')){
            $file           = $request->file('image');
            $nama_file      = $file->getClientOriginalName();
            $file->move('backend/assets/img/',$file->getClientOriginalName());
            $pegawai->cover = $nama_file;
        }
        $pegawai->name = $request->name;
        $pegawai->nip = $request->nip;
        $pegawai->category = $request->kategori;
        $pegawai->job = $request->jabatan;
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('success','Data Berhasil Dihapus');
    }
}
