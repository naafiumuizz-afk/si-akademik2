<?php

namespace App\Models;

class Mahasiswa
{
    // Data dummy, belum menggunakan database
    private $mahasiswa = [
        ['nim' => '2101001', 'nama' => 'Rian',  'prodi' => 'Teknik Informatika'],
        ['nim' => '2101002', 'nama' => 'Dewi',  'prodi' => 'Sistem Informasi'],
        ['nim' => '2101003', 'nama' => 'Fajar', 'prodi' => 'Teknik Informatika'],
        ['nim' => '2101004', 'nama' => 'Anisa', 'prodi' => 'Teknik Informatika'],
        ['nim' => '2101005', 'nama' => 'Rani',  'prodi' => 'Sistem Informasi'],
        ['nim' => '2101006', 'nama' => 'Isna', 'prodi' =>  'Teknik Informatika'],
    ];

    public function getAll()
    {
        return $this->mahasiswa;
    }
}
