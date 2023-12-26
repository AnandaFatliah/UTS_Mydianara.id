<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="icon" href="Resource/Mydianara.id.png" type="image/png" />
    <title>SignUp Aplikasi</title>
    <style>
      button[type="button"] {
        width: 100%;
        padding: 15px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        background-color: #BBAB8C;
        border: none;
        color: #fff;
        text-decoration: none;
        cursor: pointer;
      }
      button:hover{
        color: black;
        background-color: beige;
      }
    </style>
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
                <input type="submit" value="SIGNUP" />
                <button type="button" onclick="goToLogin()">LOGIN</button>
            </form>
        </section>
    </div>
    <script>
        function goToLogin() {
            window.location.href = 'login.php';
        }
    </script>
</body>
</html>
