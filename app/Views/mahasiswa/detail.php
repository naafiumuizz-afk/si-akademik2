<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Detail Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <?php if (isset($mahasiswa) && $mahasiswa): ?>
                            <table class="table table-borderless mb-0">
                                <tr>
                                    <th width="30%">NIM</th>
                                    <td width="5%">:</td>
                                    <td><?= htmlspecialchars($mahasiswa['nim']) ?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>:</td>
                                    <td><?= htmlspecialchars($mahasiswa['nama']) ?></td>
                                </tr>
                                <tr>
                                    <th>Prodi</th>
                                    <td>:</td>
                                    <td><?= htmlspecialchars($mahasiswa['prodi']) ?></td>
                                </tr>
                            </table>
                        <?php else: ?>
                            <div class="alert alert-danger mb-0">
                                Data mahasiswa tidak ditemukan.
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer bg-white text-end">
                        <!-- Menggunakan ../mahasiswa agar sesuai dengan struktur Clean URL -->
                        <a href="../mahasiswa" class="btn btn-secondary px-4">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>