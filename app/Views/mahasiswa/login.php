<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Akademik</title>
    <style>
        * { box-sizing: border-box; }
        body { font-family: Arial, sans-serif; background: #f2f4f7; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; padding: 20px; }
        .login-card { background: #fff; padding: 46px 30px 34px; border-radius: 10px; box-shadow: 0 4px 14px rgba(0, 0, 0, .08); width: min(100%, 400px); }
        h1 { font-size: 22px; margin: 0 0 6px; color: #111; }
        .subtitle { color: #666; font-size: 14px; margin: 0 0 22px; }
        label { display: block; font-size: 14px; margin-bottom: 6px; color: #333; }
        .field { width: 100%; padding: 10px 11px; margin-bottom: 15px; border: 1px solid #d1d5db; border-radius: 6px; font-size: 14px; }
        .field:focus { outline: none; border-color: #2563eb; box-shadow: 0 0 0 3px rgba(37, 99, 235, .15); }
        button { width: 100%; padding: 11px; background: #2563eb; color: #fff; border: none; border-radius: 6px; font-size: 14px; cursor: pointer; }
        button:hover { background: #1d4ed8; }
        .error { background: #fee2e2; color: #b91c1c; padding: 9px 10px; border-radius: 6px; font-size: 13px; margin-bottom: 15px; }
    </style>
</head>
<body>
    <div class="login-card">
        <h1>Sistem Informasi Akademik</h1>
        <p class="subtitle">Silakan login untuk melanjutkan</p>

        <?php if (!empty($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form action="login-process" method="POST">
            <label for="username">Username</label>
            <input class="field" type="text" id="username" name="username" placeholder="admin" required>

            <label for="password">Password</label>
            <input class="field" type="password" id="password" name="password" placeholder="********" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
