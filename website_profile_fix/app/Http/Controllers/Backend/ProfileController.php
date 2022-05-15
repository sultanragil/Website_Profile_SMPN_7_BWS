<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $user = Auth::user();
        return view('backend.profile.index',compact('user'));
    }
    public function update($id, Request $request){
        $user = User::find($id);
        if($request->hasFile('image')){
            $file           = $request->file('image');
            $nama_file      = $file->getClientOriginalName();
            $file->move('backend/assets/img/',$file->getClientOriginalName());
            $user->image = $nama_file;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile.index')->with('success','Data Telah Diperbarui');
    }
}
