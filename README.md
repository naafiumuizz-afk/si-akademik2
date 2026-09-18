# Sistem Informasi Akademik (si-akademik)

Aplikasi PHP Native dengan konsep MVC + Middleware + Auth sederhana + URL Rewriting (.htaccess).
Menggunakan gaya routing prosedural (`$_GET['url']`), tanpa namespace/autoload.

## Struktur Folder

```
si-akademik/
├── app/
│   ├── Controllers/
│   │   ├── AuthController.php       <- index (login form), process (cek user/pass), logout
│   │   ├── HomeController.php       <- dashboard
│   │   ├── MahasiswaController.php  <- index, detail
│   │   └── DosenController.php      <- index/create/store/edit/update/delete (CRUD)
│   ├── Models/
│   │   ├── Mahasiswa.php            <- PDO + JOIN ke dosen (getAll, getById)
│   │   └── Dosen.php                <- PDO + Prepared Statement (CRUD)
│   ├── Middleware/
│   │   └── AuthMiddleware.php       <- AuthMiddleware::check()
│   └── Views/
│       ├── auth/login.php
│       ├── dashboard/index.php
│       ├── mahasiswa/index.php
│       ├── mahasiswa/detail.php
│       └── dosen/
│           ├── index.php
│           ├── create.php
│           └── edit.php
├── routes/
│   └── web.php               <- semua rute + require_once Controllers & Middleware
├── public/
│   ├── index.php             <- front controller, session_start() lalu load routes/web.php
│   └── .htaccess              <- rewrite ke index.php?url=...
└── .htaccess                  <- redirect root ke public/
```

> **Catatan:** folder `config/` (berisi `config/database.php`) TIDAK disertakan di project ini.
> Kamu buat file itu sendiri secara manual di VS Code sesuai instruksi yang sudah diberikan
> sebelumnya, karena kredensial database dikelola langsung lewat XAMPP.

## Cara Menjalankan (XAMPP)

1. Copy folder `si-akademik` ke `htdocs`.
2. Buat database `si_akademik` beserta tabel `dosen` (dan tabel `mahasiswa` + relasi
   `dosen_id`) lewat phpMyAdmin.
3. Buat file `config/database.php` berisi koneksi PDO (variabel `$pdo`).
4. Aktifkan `mod_rewrite` Apache & `AllowOverride All`.
5. Jalankan Apache & MySQL dari XAMPP Control Panel.
6. Buka `http://localhost/si-akademik/public/login`.

## Akun Login

- Username : `admin`
- Password : `12345`

## Rute

| URL                     | Method | Middleware       | Keterangan                       |
|--------------------------|--------|-------------------|------------------------------------|
| /login                  | GET    | -                 | Form login                         |
| /login-process           | POST   | -                 | Proses cek username & password     |
| /logout                 | GET    | -                 | Hapus session, redirect /login     |
| / atau /dashboard        | GET    | AuthMiddleware    | Halaman utama setelah login        |
| /mahasiswa               | GET    | AuthMiddleware    | Daftar mahasiswa (JOIN ke dosen)   |
| /mahasiswa/detail?id=..  | GET    | AuthMiddleware    | Detail satu mahasiswa              |
| /dosen                  | GET    | AuthMiddleware    | Daftar dosen                       |
| /dosen/create            | GET    | AuthMiddleware    | Form tambah dosen                  |
| /dosen/store             | POST   | AuthMiddleware    | Simpan dosen baru                  |
| /dosen/edit?id=..        | GET    | AuthMiddleware    | Form edit dosen                    |
| /dosen/update?id=..      | POST   | AuthMiddleware    | Simpan perubahan dosen             |
| /dosen/delete?id=..      | GET    | AuthMiddleware    | Hapus dosen                        |

## Alur Request

```
User → .htaccess → public/index.php → routes/web.php → AuthMiddleware::check() (jika perlu) → Controller → Model → View
```
