<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Dosen - Sistem Informasi Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; background:#f2f4f7; margin:0; }
        nav { background:#2563eb; color:#fff; padding:14px 24px; font-size:16px; font-weight:bold; display:flex; justify-content:space-between; align-items:center; }
        nav a { color:#fff; font-size:13px; text-decoration:none; }
        .container { max-width:720px; margin:40px auto; background:#fff; padding:28px; border-radius:10px; box-shadow:0 4px 14px rgba(0,0,0,.06); }
        h1 { font-size:20px; margin-top:0; }
        table { width:100%; border-collapse:collapse; margin-top:16px; }
        th, td { padding:10px 12px; border-bottom:1px solid #eee; text-align:left; font-size:14px; }
        th { background:#f8fafc; color:#333; }
    </style>
</head>
<body>
    <nav>
        Sistem Informasi Akademik
        <a href="<?= APP_URL ?>/dashboard">&larr; Dashboard</a>
    </nav>
    <div class="container">
        <h1>Data Dosen</h1>
        <table>
            <thead>
                <tr><th>NIDN</th><th>Nama</th><th>Prodi</th></tr>
            </thead>
            <tbody>
                <?php foreach ($data as $dsn): ?>
                <tr>
                    <td><?= htmlspecialchars($dsn['nidn']) ?></td>
                    <td><?= htmlspecialchars($dsn['nama']) ?></td>
                    <td><?= htmlspecialchars($dsn['prodi']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
