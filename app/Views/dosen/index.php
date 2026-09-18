<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Dosen</title>
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
        .action-link { display: inline-block; padding: 6px 10px; border-radius: 5px; color: #fff; text-decoration: none; font-size: 13px; }
        .edit-link { background: #2563eb; }
        .edit-link:hover { background: #1d4ed8; color: #fff; }
        .delete-link { background: #dc2626; }
        .delete-link:hover { background: #b91c1c; color: #fff; }
    </style>
</head>
<body>
    <nav class="topbar d-flex justify-content-between">
        <span>Sistem Informasi Akademik</span>
        <a href="dashboard">&larr; Dashboard</a>
    </nav>
    <div class="container content-panel">
        <h2 class="mb-4">Data Dosen</h2>

        <a class="action-link edit-link mb-3" href="/si-akademik/public/dosen/create">Tambah Dosen</a>
        
        <table class="table table-bordered table-striped table-hover shadow-sm">
            <thead class="table-primary">
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $dosen as $index => $item ) : ?>
                <tr>
                    <td><?= htmlspecialchars($item['nidn']); ?></td>
                    <td><?= htmlspecialchars($item['nama']); ?></td>
                    <td><?= htmlspecialchars($item['bidang_keahlian']); ?></td>
                    <td>
                        <a class="action-link edit-link" href="/si-akademik/public/dosen/edit?id=<?= (int) $item['id']; ?>">Edit</a>
                        <a class="action-link delete-link" href="/si-akademik/public/dosen/delete?id=<?= (int) $item['id']; ?>" onclick="return confirm('Hapus data dosen ini?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
