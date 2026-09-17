<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Tambah Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Dosen</h2>
        <form method="post" action="store" class="card p-4 mt-3 shadow-sm">
            <div class="mb-3">
                <label>NIDN</label>
                <input type="text" name="nidn" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Bidang Keahlian</label>
                <input type="text" name="bidang_keahlian" class="form-control" required>
            </div>
            <div>
                <a href="../dosen" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</body>
</html>