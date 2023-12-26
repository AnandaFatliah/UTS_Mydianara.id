<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="icon" href="Resource/Mydianara.id.png" type="image/png" />
    <title>Login Aplikasi</title>
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
        <h2>Login Aplikasi</h2>
        <form method="post" action="lib/ceklogin.php">
          <input type="text" placeholder="Username" id="Username" name="username" required/>
          <input type="password" placeholder="Password" id="password" name="password" required/>
          <input type="submit" value="LOGIN" />
          <button type="button" onclick="goToRegistration()">SIGNUP</button>
        </form>
        <script>
          function goToRegistration() {
            window.location.href = 'regis.php';
          }
        </script>
      </section>
    </div>
  </body>
</html>
