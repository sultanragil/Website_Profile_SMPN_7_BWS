<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;

class FPegawaiController extends Controller
{
    public function index()
    {   
        $pegawai = DB::table('employees')
        ->join('jobs','employees.job', '=' ,'jobs.id')
        ->select('employees.*', 'jobs.name as job_name', 'jobs.id as job_id')
        ->where('category', '=', 'Guru')
        ->paginate(6);
        $karyawan = DB::table('employees')
        ->join('jobs','employees.job', '=' ,'jobs.id')
        ->select('employees.*', 'jobs.name as job_name', 'jobs.id as job_id')
        ->where('category', '=', 'Karyawan')
        ->paginate(6);
        return view('frontend.pegawai.index',compact('pegawai','karyawan'));
    }
}
