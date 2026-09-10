# Sistem Informasi Akademik (si-akademik)

Aplikasi PHP Native dengan konsep MVC + Middleware + Auth sederhana + URL Rewriting (.htaccess).

## Struktur Folder

```
si-akademik/
├── app/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   ├── MahasiswaController.php
│   │   └── DosenController.php
│   ├── Models/
│   │   ├── Mahasiswa.php
│   │   └── Dosen.php
│   ├── Middleware/
│   │   └── AuthMiddleware.php
│   └── Views/
│       ├── auth/login.php
│       ├── dashboard/index.php
│       ├── mahasiswa/index.php
│       └── dosen/index.php
├── routes/
│   └── web.php
├── public/
│   ├── index.php      <- front controller
│   └── .htaccess      <- rewrite ke index.php
└── .htaccess           <- redirect root ke public/
```

## Cara Menjalankan (XAMPP / Laragon)

1. Copy folder `si-akademik` ke dalam `htdocs` (XAMPP) atau `www` (Laragon).
2. Pastikan module `mod_rewrite` Apache aktif (di XAMPP: `httpd.conf` → uncomment
   `LoadModule rewrite_module modules/mod_rewrite.so`, dan set `AllowOverride All`
   pada folder `htdocs`).
3. Jalankan Apache & MySQL dari XAMPP Control Panel (MySQL tidak dipakai di tugas ini
   karena data masih pakai array).
4. Buka browser ke:
   - `http://localhost/si-akademik/public/login`

## Akun Login

- Username : `admin`
- Password : `12345`

## Alur Rute

| URL                     | Method | Middleware       | Keterangan                     |
|--------------------------|--------|-------------------|---------------------------------|
| /login                  | GET    | -                 | Tampilkan form login            |
| /login/process           | POST   | -                 | Proses cek username & password  |
| /logout                 | GET    | -                 | Hapus session, redirect /login  |
| /dashboard               | GET    | AuthMiddleware    | Halaman utama setelah login     |
| /mahasiswa               | GET    | AuthMiddleware    | Data mahasiswa                  |
| /dosen                  | GET    | AuthMiddleware    | Data dosen                      |

## Alur Request

```
User → .htaccess → public/index.php → routes/web.php → Middleware (jika perlu) → Controller → Model → View
```
