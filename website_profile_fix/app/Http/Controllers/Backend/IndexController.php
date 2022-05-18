<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Carousel;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Event;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {   
        //$users = DB::table('users')->where('job','=',null)->count();
        $sarana = DB::table('facilities')->count();
        $news = Event::latest()->take(5)->get();
        $event = Event::count();
        $pegawai = Pegawai::count();
        $user = User::count();
        $carousel = Carousel::all();
        return view('backend.index',compact('carousel','user','pegawai','event','news','sarana'));
    }
    
}
