<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;
use App\Models\Siswa;
use App\Models\Sarana;
use App\Models\Event;
use App\Models\Kontak;
use App\Models\Profile;

class IndexController extends Controller
{
    public function index()
    {
        $count1 = Pegawai::count();
        $count2 = Siswa::count();
        $count3 = Sarana::count();
        $count4 = Event::count();
        $kontak = Kontak::get();
        $query1 = Siswa::where('kelas', 7)->count();
        $query2 = Siswa::where('kelas', 8)->count();
        $query3 = Siswa::where('kelas', 9)->count();
        $profile = Profile::get();
        $pegawai = Pegawai::inRandomOrder()->take(4)->get();
        $sarana = Sarana::inRandomOrder()->take(5)->get();
        $event = DB::table('events')
                    ->join('users', 'events.id_user', '=', 'users.id')
                    ->select('events.*', 'users.name as users', 'users.role as role')
                    ->inrandomOrder()->take(5)->get();
        return view('frontend.index',
        compact('count1',
                'count2',
                'count3',
                'count4',
                'kontak',
                'query1',
                'query2',
                'query3',
                'profile',
                'pegawai',
                'sarana',
                'event'));
    }
}
