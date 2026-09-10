<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController
{
    // GET /mahasiswa (dilindungi AuthMiddleware)
    public function index()
    {
        $model = new Mahasiswa();
        $data  = $model->getAll();

        require BASE_PATH . '/app/Views/mahasiswa/index.php';
    }
}
