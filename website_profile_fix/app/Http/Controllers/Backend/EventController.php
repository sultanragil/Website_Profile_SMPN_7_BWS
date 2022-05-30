<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        //$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $event = DB::table('events')->paginate(5);
        return view('backend.event.index',compact('event'));
    }
    public function create()
    {
        $event = null;
        return view('backend.event.create',compact('event'));
    }
    public function edit($id)
    {
        $event = DB::table('events')->where('id',$id)->first();
        return view('backend.event.edit',compact('event'));
    }
    public function store(Request $request)
    {
        $event = new Event;
        $file           = $request->file('image');
        $nama_file      = $file->getClientOriginalName();
        $file->move('backend/assets/img/',$file->getClientOriginalName());
        $event->judul = $request->judul;
        $event->isi = $request->isi;
        $event->id_user = $request->id_user;
        $event->cover = $nama_file;
        $event->save();

        return redirect()->route('event.index')->with('success','Data Telah Berhasil Ditambah.');
    }

    public function update($id, Request $request)
    {
        $event = Event::find($id);
        if($request->hasFile('image')){
            $file           = $request->file('image');
            $nama_file      = $file->getClientOriginalName();
            $file->move('backend/assets/img/',$file->getClientOriginalName());
            $event->cover = $nama_file;
        }
        $event->judul = $request->judul;
        $event->isi = $request->isi;
        $event->save();

        return redirect()->route('event.index')->with('success','Data Telah Berhasil Diperbarui.');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect()->route('event.index')->with('success','Data Berhasil Dihapus');
    }
}
