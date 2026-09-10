<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        
        <h2 class="mb-4">Daftar Dosen</h2>
        
        <!-- Tombol Kembali ke Dashboard -->
        <a href="dashboard" class="btn btn-secondary mb-3">&larr; Kembali</a>
        
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>NIDN</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $data['dosen'] as $dsn ) : ?>
                <tr>
                    <td><?= $dsn['nidn']; ?></td>
                    <td><?= $dsn['nama']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>