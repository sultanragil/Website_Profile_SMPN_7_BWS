<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('auth'); /*Hak Akses Login*/
        $this->middleware(['admin','auth']); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $id = Auth::user()->id;
        $user = DB::table('users')->where('role', 'admin')->paginate(5);
        return view('backend.user.index',compact('user'));
    }
    public function create()
    {
        $user = null;
        return view('backend.user.create',compact('user'));
    }
    public function edit($id)
    {
        $user = DB::table('users')->where('id',$id)->first();
        return view('backend.user.edit',compact('user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->image = $request->image;
        $user->save();

        return redirect()->route('user.index')->with('success','Data Telah Berhasil Ditambah.');
    }

    public function update($id, Request $request)
    {
        /*DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'user_profile' => $request->creator_profile,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);*/
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();



        return redirect()->route('user.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success','Data Berhasil Dihapus');
    }

}
