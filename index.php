<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      background-image: url("background.jpeg");
      background-size: cover;
      background-position: center;
      height: 100vh;
      font-family: 'Poppins', sans-serif; /* Menambahkan font Poppins */
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 400px;
      padding: 30px;
      background-color:#F67280;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #fff;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: left;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #fff;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif; /* Menambahkan font Poppins */
    }

    button {
      background-color:#57A6A1;
      color: white;
      padding: 10px 20px;
      margin-top: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-family: 'Poppins', sans-serif; /* Menambahkan font Poppins */
    }

    button:hover {
      background-color: #57A6A1;
    }

    .login {
      background-color: #57A6A1;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">

    <h2>Login</h2>

    <form action="cek_login.php" method="post">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" id="nama" name="username" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" name="submit">Login</button>
      <button class="login" onclick="window.location.href='register.php';">Register</button>
      <p>Lupa sandi?  <a href ="gantisandi.php">Ganti sandi</a></p>
    </form>
  </div>
</body>
</html>
