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
        $file           = $request->file('logo');
        $nama_file      = $file->getClientOriginalName();
        $file->move('backend/assets/img/',$file->getClientOriginalName());
        $file1           = $request->file('kepsek_img');
        $nama_file1      = $file1->getClientOriginalName();
        $file1->move('backend/assets/img/',$file1->getClientOriginalName());
        $profile->sejarah = $request->sejarah;
        $profile->vm = $request->vm;
        $profile->kepsek_nama = $request->kepsek_nama;
        $profile->logo = $nama_file;
        $profile->kepsek_img = $nama_file1;
        $profile->save();

        return redirect()->route('cms.index')->with('success','Data Telah Berhasil Ditambah.');
    }

    public function update($id, Request $request)
    {
        $profile = Profile::find($id);
    
        if($request->hasFile('logo')){
            $file           = $request->file('logo');
            $nama_file      = $file->getClientOriginalName();
            $file->move('backend/assets/img/',$file->getClientOriginalName());
            $profile->logo = $nama_file;
            
        }
        if($request->hasFile('kepsek_img')){
            $file1           = $request->file('kepsek_img');
            $nama_file1     = $file1->getClientOriginalName();
            $file1->move('backend/assets/img/',$file1->getClientOriginalName());
            $profile->kepsek_img = $nama_file1;
        }
        
        $profile->sejarah = $request->sejarah;
        $profile->vm = $request->vm;
        $profile->kepsek_nama = $request->kepsek_nama;
        $profile->save();

        return redirect()->route('cms.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

}
