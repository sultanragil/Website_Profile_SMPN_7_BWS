<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Imports\SiswaImport;
use App\Models\Siswa;
use Maatwebsite\Excel\Facades\Excel;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); /*Hak Akses Login*/
        /*$this->middleware('admin'); /*Hak Akses Super Admin*/
    }
    public function index()
    {
        $siswa = DB::table('students')->paginate(5);
        return view('backend.data.index',compact('siswa'));
    }
    public function store(Request $request)
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_siswa',$nama_file);

		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));

        return redirect()->route('data.index')->with('success','Data Telah Berhasil Ditambah.');
	}
    public function delete(){
        Siswa::truncate();
        return redirect()->route('data.index')->with('success','Data Telah Berhasil Dihapus.');
    }
}
