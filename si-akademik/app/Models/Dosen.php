<?php

class Dosen {
    // Menyiapkan data dosen sesuai tugas
    private $dosen = [
        [
            "nidn" => "001",
            "nama" => "Bapak Radit"
        ],
        [
            "nidn" => "002",
            "nama" => "Ibu Qonita"
        ]
    ];

    // Method untuk mengambil semua data dosen
    public function getAllDosen()
    {
        return $this->dosen;
    }
}