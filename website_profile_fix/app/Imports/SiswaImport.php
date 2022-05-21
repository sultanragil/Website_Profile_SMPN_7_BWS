<?php

namespace App\Imports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Siswa([
            //
            
            'nis' => $row[1],
            'nama' => $row[2],
            'jk' => $row[3],
            'kelas' => $row[4],
        ]);
    }
}
