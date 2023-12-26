<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Login Aplikasi</title>
</head>
<body>
    <div class="container">
        <section class="login-box">
            <form action="lib/cekregis.php" method="post" class="form">
                <h2>Signup</h2>
                <label for="nama">Nama Lengkap : </label>
                <input type="text" name="nama" required>
                <label for="user">Username : </label>
                <input type="text" name="user" required>
                <label for="password">Password : </label>
                <input type="password" name="password" required>
                <input type="submit" value="Regis" />
            </form>
            <a href="login.php">Login</a>
        </section>
    </div>
</body>
</html>
