<?php

require_once __DIR__ . '/../Models/Mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        global $pdo; // 1. Panggil koneksi database
        
        // 2. Masukkan $pdo ke dalam model
        $model = new Mahasiswa($pdo); 

        $mahasiswa = $model->getAll();

        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail()
    {
        global $pdo; // Lakukan hal yang sama untuk method detail
        
        $model = new Mahasiswa($pdo);

        $nim = $_GET['nim'] ?? '';

        // Pastikan fungsi getByNim sudah ada di Model Mahasiswa kamu yang baru, 
        // atau jika di Praktikum 4 hanya menampilkan getAll, sesuaikan dengan kebutuhanmu.
        $mahasiswa = $model->getByNim($nim);

        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }

    public function create()
    {
        echo "Form Tambah Mahasiswa";
    }
}