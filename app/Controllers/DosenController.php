<?php

namespace App\Controllers;

use App\Models\Dosen;

class DosenController
{
    // GET /dosen (dilindungi AuthMiddleware)
    public function index()
    {
        $model = new Dosen();
        $data  = $model->getAll();

        require BASE_PATH . '/app/Views/dosen/index.php';
    }
}
