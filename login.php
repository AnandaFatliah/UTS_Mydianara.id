<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style - Copy.css" />
    <title>Login Aplikasi</title>
  </head>
  <body>
    <div class="container">
      <section class="login-box">
        <h2>Login Aplikasi</h2>
        <form method="post" action="ceklogin.php">
          <input type="text" placeholder="Username" id="Username" required/>
          <input type="password" placeholder="Password" id="password" required/>
          <input type="submit" value="Login" />
        </form>
        <a href="regis.php">Sign Up</a>
      </section>
    </div>
  </body>
</html>
