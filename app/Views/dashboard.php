<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f2f4f7; margin: 0; color: #111827; }
        .topbar { background: #2563eb; color: #fff; padding: 14px 30px; font-weight: 700; }
        .dashboard-card { max-width: 743px; margin: 44px auto; background: #fff; padding: 28px 30px 47px; border-radius: 10px; box-shadow: 0 4px 14px rgba(0, 0, 0, .06); }
        .dashboard-card h1 { font-size: 22px; margin: 0 0 16px; }
        .welcome { color: #444; margin: 0 0 20px; }
        .menu { display: flex; flex-direction: column; align-items: flex-start; gap: 10px; }
        .menu a { display: inline-block; padding: 9px 16px; background: #eef2ff; color: #2563eb; border-radius: 6px; text-decoration: none; font-size: 14px; }
        .menu a:hover { background: #e0e7ff; }
        .menu a.logout { background: #fee2e2; color: #b91c1c; }
        .menu a.logout:hover { background: #fecaca; }
    </style>
</head>
<body>
    <nav class="topbar">
        Sistem Informasi Akademik
    </nav>
    <div class="dashboard-card">
        <h1>Sistem Informasi Akademik</h1>
        <p class="welcome">Selamat datang, <strong><?= htmlspecialchars($_SESSION['username']); ?></strong>.</p>
        <div class="menu">
            <a href="mahasiswa">Data Mahasiswa</a>
            <a href="/si-akademik/public/dosen">Data Dosen</a>
            <a class="logout" href="logout">Logout</a>
        </div>
    </div>
</body>
</html>