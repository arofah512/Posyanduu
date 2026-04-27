<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Posyandu - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">

            <div class="icon-container">
                <div class="icon-circle">
                    ❤️
                </div>
            </div>

            <h1 class="title">Sistem Posyandu</h1>
            <p class="subtitle">Masuk untuk mengelola data Posyandu</p>

            <form class="form" action="proses_login.php" method="POST">

                <div class="form-group">
                    <label class="label">Username</label>
                    <input type="text" name="username" class="input" required>
                </div>

                <div class="form-group">
                    <label class="label">Password</label>
                    <input type="password" name="password" class="input" required>
                </div>

                <button type="submit" class="btn-login">
                    Login
                </button>

            </form>
        </div>
    </div>
</body>
</html>