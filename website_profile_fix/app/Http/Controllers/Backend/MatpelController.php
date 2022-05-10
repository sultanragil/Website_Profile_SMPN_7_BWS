<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Matpel;


class MatpelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $courses = DB::table('courses')->paginate(5);
        return view('backend.matpel.index', compact('courses'));
    }
    public function create()
    {
        $courses = null;
        return view('backend.matpel.create',compact('courses'));
    }
    public function edit($id)
    {
        $courses = DB::table('courses')->where('id',$id)->first();
        return view('backend.matpel.edit',compact('courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $user = new Matpel;
        $user->name = $request->name;
        $user->save();

        return redirect()->route('matpel.index')->with('success','Data Telah Berhasil Ditambah.');
    }
    public function update($id, Request $request){

        $request->validate([
            'name' => 'required',
        ]);
        $user = Matpel::find($id);
        $user->name = $request->name;
        $user->save();

        return redirect()->route('matpel.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
    public function destroy($id)
    {
        $courses = Matpel::find($id);
        $courses->delete();
        return redirect()->route('matpel.index')->with('success','Data Berhasil Dihapus');
    }
}
