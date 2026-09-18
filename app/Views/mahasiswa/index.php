<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f1f3f6 !important; color: #111827; }
        .topbar { background: #2563eb; color: #fff; padding: 14px 30px; font-weight: 700; }
        .topbar a { color: #fff; text-decoration: none; }
        .content-panel { max-width: 830px; margin: 44px auto; background: #fff; padding: 28px 30px 30px; border-radius: 10px; box-shadow: 0 4px 14px rgba(0, 0, 0, .06); }
        .content-panel h2 { font-size: 23px; margin-bottom: 20px !important; }
        .table { margin-bottom: 0; }
        .table thead th { background: #f4f6f8; color: #1f2937; border-bottom-color: #e5e7eb; }
        .table tbody td { border-color: #e5e7eb; }
    </style>
</head>
<body>
    <nav class="topbar d-flex justify-content-between">
        <span>Sistem Informasi Akademik</span>
        <a href="dashboard">&larr; Dashboard</a>
    </nav>
    <div class="container content-panel">
        <h2 class="mb-4">Data Mahasiswa</h2>
        
        <table class="table table-bordered table-striped table-hover shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>NIM</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Dosen Pembimbing</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <tr>
                    <td><?= htmlspecialchars($mhs['nim']); ?></td>
                    <td><?= htmlspecialchars($mhs['nisn'] ?? ''); ?></td>
                    <td><?= htmlspecialchars($mhs['nama']); ?></td>
                    <td><?= htmlspecialchars($mhs['prodi']); ?></td>
                    <td><?= !empty($mhs['nama_dosen']) ? htmlspecialchars($mhs['nama_dosen']) : '<span class="text-muted">Belum ditentukan</span>'; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>