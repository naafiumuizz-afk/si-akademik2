<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-3">Si Akademik</h1>
        <h2>DATA MAHASISWA</h2>
        <h3 class="text-secondary mb-4">Politeknik Negeri Jember</h3>
        
        <!-- Tombol Kembali ke Dashboard -->
        <a href="dashboard" class="btn btn-secondary mb-3">&larr; Kembali </a>
        
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Menggunakan variabel $mahasiswa dari Controller -->
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <tr>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['prodi']; ?></td>
                    <td>
                        <!-- URL detail yang rapi -->
                        <a href="mahasiswa/detail?nim=<?= $mhs['nim']; ?>" class="btn btn-primary btn-sm">Detail</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>