<!DOCTYPE html>
<html>
<head>
  <title>Inicio de Sesión</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333333;
    }

    form {
      background-color: #ffffff;
      border: 1px solid #cccccc;
      padding: 20px;
      max-width: 300px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #cccccc;
    }

    input[type="submit"],
    button {
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      margin-top: 10px;
    }

    input[type="submit"]:hover,
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Iniciar Sesión</h1>

  <form method="POST" action="login.php">
    <label for="username">Nombre de usuario:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" name="submit" value="Iniciar Sesión"><br>
	<button onclick="window.location.href='registro.php'">Registrarse</button>
  </form><br>

</body>
</html>
