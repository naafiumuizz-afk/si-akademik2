<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Sistem Informasi Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f2f4f7; margin:0; }
        nav { background:#2563eb; color:#fff; padding:14px 24px; font-size:16px; font-weight:bold; }
        .container { max-width:640px; margin:40px auto; background:#fff; padding:28px; border-radius:10px; box-shadow:0 4px 14px rgba(0,0,0,.06); }
        h1 { font-size:20px; margin-top:0; }
        p.welcome { color:#444; }
        ul.menu { list-style:none; padding:0; margin-top:20px; }
        ul.menu li { margin-bottom:10px; }
        ul.menu a { display:inline-block; padding:9px 16px; background:#eef2ff; color:#2563eb; border-radius:6px; text-decoration:none; font-size:14px; }
        ul.menu a:hover { background:#e0e7ff; }
        .logout { background:#fee2e2 !important; color:#b91c1c !important; }
        .logout:hover { background:#fecaca !important; }
    </style>
</head>
<body>
    <nav>Sistem Informasi Akademik</nav>
    <div class="container">
        <h1>Sistem Informasi Akademik</h1>
        <p class="welcome">Selamat datang, <strong><?= htmlspecialchars($username) ?></strong>.</p>

        <ul class="menu">
            <li><a href="<?= APP_URL ?>/mahasiswa">Mahasiswa</a></li>
            <li><a href="<?= APP_URL ?>/dosen">Dosen</a></li>
            <li><a href="<?= APP_URL ?>/logout" class="logout">Logout</a></li>
        </ul>
    </div>
</body>
</html>
