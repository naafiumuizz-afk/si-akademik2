<?php
require_once __DIR__ . '/../Models/Dosen.php';

class DosenController {
    
    public function index()
    {
        $dosenModel = new Dosen();
        $data['dosen'] = $dosenModel->getAllDosen();
        
        // Hapus kode $this->view('dosen/index', $data);
        // Ganti dengan kode di bawah ini:
        require_once __DIR__ . '/../Views/dosen/index.php';
    }
}