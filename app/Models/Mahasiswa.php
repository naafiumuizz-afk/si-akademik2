<?php

class Mahasiswa
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Fungsi untuk mengambil semua mahasiswa
    public function getAll()
    {
        $sql = "SELECT mahasiswa.*, dosen.nama AS nama_dosen 
                FROM mahasiswa 
                LEFT JOIN dosen ON mahasiswa.dosen_id = dosen.id 
                ORDER BY mahasiswa.nama ASC";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Fungsi baru untuk mengambil 1 mahasiswa berdasarkan NIM
    public function getByNim($nim)
    {
        // Menggunakan Prepared Statement untuk keamanan dari SQL Injection
        $sql = "SELECT mahasiswa.*, dosen.nama AS nama_dosen 
                FROM mahasiswa 
                LEFT JOIN dosen ON mahasiswa.dosen_id = dosen.id 
                WHERE mahasiswa.nim = :nim";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['nim' => $nim]);
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}