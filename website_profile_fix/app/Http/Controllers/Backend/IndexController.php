<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Carousel;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Event;
use App\Models\Siswa;
use App\Models\Sarana;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {   
        $siswa = Siswa::count();
        $sarana = Sarana::count();
        $news = Event::latest()->take(5)->get();
        $event = Event::count();
        $pegawai = Pegawai::count();
        $user = User::count();
        $carousel = Carousel::all();
        $query1 = Siswa::where('kelas', 7)->count();
        $query2 = Siswa::where('kelas', 8)->count();
        $query3 = Siswa::where('kelas', 9)->count();
        return view('backend.index',
        compact(
        'carousel',
        'user',
        'pegawai',
        'event',
        'news',
        'sarana',
        'siswa',
        'query1',
        'query2',
        'query3'));
    }
    
}
