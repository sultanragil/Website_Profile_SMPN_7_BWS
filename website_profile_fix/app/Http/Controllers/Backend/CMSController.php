<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class CMSController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth'); /*Hak Akses Login*/
        $this->middleware('auth'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $profile = DB::table('profiles')->paginate(5);
        return view('backend.cms.index',compact('profile'));
    }
    public function create()
    {
        $profile = null;
        return view('backend.cms.create',compact('profile'));
    }
    public function edit($id)
    {
        $profile = DB::table('profiles')->where('id',$id)->first();
        return view('backend.cms.edit',compact('profile'));
    }
    public function store(Request $request)
    {
        $profile = new Profile;
        $file           = $request->file('sekolah_img');
        $nama_file      = $file->getClientOriginalName();
        $file->move('backend/assets/img/',$file->getClientOriginalName());
        $profile->sekolah_img = $nama_file;
        $profile->sejarah = $request->sejarah;
        $file1           = $request->file('logo');
        $nama_file1      = $file1->getClientOriginalName();
        $file1->move('backend/assets/img/',$file1->getClientOriginalName());
        $profile->logo = $nama_file1;
        $profile->arti_logo = $request->arti_logo;
        $profile->visi = $request->visi;
        $profile->misi = $request->misi;
        $file2           = $request->file('kepsek_img');
        $nama_file2      = $file2->getClientOriginalName();
        $file2->move('backend/assets/img/',$file2->getClientOriginalName());
        $profile->kepsek_img = $nama_file2;
        $profile->kepsek_nama = $request->kepsek_nama;
        $file3           = $request->file('wakepsek1_img');
        $nama_file3      = $file3->getClientOriginalName();
        $file3->move('backend/assets/img/',$file3->getClientOriginalName());
        $profile->wakepsek1_img = $nama_file3;
        $profile->wakepsek1_nama = $request->wakepsek1_nama;
        $file4           = $request->file('wakepsek2_img');
        $nama_file4      = $file4->getClientOriginalName();
        $file4->move('backend/assets/img/',$file4->getClientOriginalName());
        $profile->wakepsek2_img = $nama_file4;
        $profile->wakepsek2_nama = $request->wakepsek2_nama;
        $profile->save();

        return redirect()->route('cms.index')->with('success','Data Telah Berhasil Ditambah.');
    }

    public function update($id, Request $request)
    {
        $profile = Profile::find($id);
    
        if($request->hasFile('sekolah_img')){
            $file           = $request->file('sekolah_img');
            $nama_file      = $file->getClientOriginalName();
            $file->move('backend/assets/img/',$file->getClientOriginalName());
            $profile->sekolah_img = $nama_file;  
        }
        if($request->hasFile('logo')){
            $file1           = $request->file('logo');
            $nama_file1      = $file1->getClientOriginalName();
            $file1->move('backend/assets/img/',$file1->getClientOriginalName());
            $profile->logo = $nama_file1;   
        }
        if($request->hasFile('kepsek_img')){
            $file2           = $request->file('kepsek_img');
            $nama_file2      = $file2->getClientOriginalName();
            $file2->move('backend/assets/img/',$file2->getClientOriginalName());
            $profile->kepsek_img = $nama_file2;       
        }
        if($request->hasFile('wakepsek1_img')){
            $file3           = $request->file('wakepsek1_img');
            $nama_file3     = $file3->getClientOriginalName();
            $file3->move('backend/assets/img/',$file3->getClientOriginalName());
            $profile->wakepsek1_img = $nama_file3;
        }
        if($request->hasFile('wakepsek2_img')){
            $file4           = $request->file('wakepsek2_img');
            $nama_file4     = $file4->getClientOriginalName();
            $file4->move('backend/assets/img/',$file4->getClientOriginalName());
            $profile->wakepsek2_img = $nama_file4;
        }
        
        $profile->sejarah = $request->sejarah;
        $profile->arti_logo = $request->arti_logo;
        $profile->visi = $request->visi;
        $profile->misi = $request->misi;
        $profile->kepsek_nama = $request->kepsek_nama;
        $profile->wakepsek1_nama = $request->wakepsek1_nama;
        $profile->wakepsek2_nama = $request->wakepsek2_nama;
        $profile->save();

        return redirect()->route('cms.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

}
