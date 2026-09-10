<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="dashboard">Si Akademik</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="mahasiswa">Data Mahasiswa</a></li>
                    <li class="nav-item"><a class="nav-link" href="dosen">Data Dosen</a></li>
                    <li class="nav-item"><a class="nav-link text-danger" href="logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Selamat datang di Dashboard, <?= $_SESSION['username']; ?>!</h2>
        <p>Gunakan menu navigasi di atas untuk mengakses data Mahasiswa dan Dosen.</p>
    </div>
</body>
</html>