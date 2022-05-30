<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carousel;

class CarouselController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        //$this->middleware('admi'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $carousel = DB::table('carousels')->paginate(5);
        return view('backend.carousel.index',compact('carousel'));
    }
    public function create()
    {
        $carousel = null;
        return view('backend.carousel.create',compact('carousel'));
    }
    public function edit($id)
    {
        $carousel = DB::table('carousels')->where('id',$id)->first();
        return view('backend.carousel.edit',compact('carousel'));
    }
    public function store(Request $request)
    {
        $carousel = new Carousel;
        $file           = $request->file('logo');
        $nama_file      = $file->getClientOriginalName();
        $file->move('backend/assets/img/',$file->getClientOriginalName());
        $carousel->judul = $request->judul;
        $carousel->desc = $request->desc;
        $carousel->image = $nama_file;
        $carousel->save();

        return redirect()->route('carousel.index')->with('success','Data Telah Berhasil Ditambah.');
    }

    public function update($id, Request $request)
    {
        $carousel = Carousel::find($id);

        if($request->hasFile('image')){
            $file           = $request->file('image');
            $nama_file      = $file->getClientOriginalName();
            $file->move('backend/assets/img/',$file->getClientOriginalName());
            $carousel->image = $nama_file;

        }
        $carousel->judul = $request->judul;
        $carousel->desc = $request->desc;
        $carousel->save();

        return redirect()->route('carousel.index')->with('success','Data Telah Berhasil Diperbarui.');
    }
}
