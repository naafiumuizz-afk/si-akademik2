<?php

namespace App\Models;

class Dosen
{
    // Data dummy, belum menggunakan database
    private $dosen = [
        ['nidn' => '001', 'nama' => 'Ahmad', 'prodi' => 'Teknik Informatika'],
        ['nidn' => '002', 'nama' => 'Siti',  'prodi' => 'Sistem Informasi'],
        ['nidn' => '003', 'nama' => 'Budi',  'prodi' => 'Teknik Informatika'],
    ];

    public function getAll()
    {
        return $this->dosen;
    }
}
