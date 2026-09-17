<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Daftar Dosen</h2>
        
        <div class="d-flex justify-content-between mb-3">
            <a href="dashboard" class="btn btn-secondary">&larr; Kembali ke Dashboard</a>
            <a href="dosen/create" class="btn btn-success">+ Tambah Dosen</a>
        </div>
        
        <table class="table table-bordered table-striped table-hover shadow-sm">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                    <th>Bidang Keahlian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $dosen as $index => $item ) : ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= htmlspecialchars($item['nidn']); ?></td>
                    <td><?= htmlspecialchars($item['nama']); ?></td>
                    <td><?= htmlspecialchars($item['bidang_keahlian']); ?></td>
                    <td>
                        <a href="dosen/edit?id=<?= $item['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="dosen/delete?id=<?= $item['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>