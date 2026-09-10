<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistem Informasi Akademik</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f4f7; display:flex; align-items:center; justify-content:center; height:100vh; margin:0; }
        .card { background:#fff; padding:32px 28px; border-radius:10px; box-shadow:0 4px 14px rgba(0,0,0,.08); width:320px; }
        h1 { font-size:20px; margin-bottom:4px; }
        p.sub { color:#666; font-size:13px; margin-top:0; margin-bottom:20px; }
        label { display:block; font-size:13px; margin-bottom:4px; color:#333; }
        input { width:100%; padding:9px 10px; margin-bottom:14px; border:1px solid #ccc; border-radius:6px; box-sizing:border-box; }
        button { width:100%; padding:10px; background:#2563eb; color:#fff; border:none; border-radius:6px; font-size:14px; cursor:pointer; }
        button:hover { background:#1d4ed8; }
        .error { background:#fee2e2; color:#b91c1c; padding:8px 10px; border-radius:6px; font-size:13px; margin-bottom:14px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Sistem Informasi Akademik</h1>
        <p class="sub">Silakan login untuk melanjutkan</p>

        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form action="<?= APP_URL ?>/login/process" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="admin" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="********" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
