<?php

class Mahasiswa
{
    public function getAll()
    {
        return [
            [
                'nim' => '23001',
                'nama' => 'Budiono',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23002',
                'nama' => 'Siti Maimunah',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'nim' => '23003',
                'nama' => 'Rini Zakiyah',
                'prodi' => 'Teknik Komputer'
            ],
            [
                'nim' => '23004',
                'nama' => 'Ahmad Fauxi',
                'prodi' => 'Teknik Elektro'
            ],
            [
                'nim' => '23005',
                'nama' => 'Dewi Sandri',
                'prodi' => 'Teknik Mesin'
            ],
            [
                'nim' => '23006',
                'nama' => 'Andi Raka',
                'prodi' => 'Teknik Sipil'
            ]
        ];
    }

    public function getByNim($nim)
    {
        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] == $nim) {
                return $mhs;
            }
        }

        return null;
    }
}