<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Registro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    h2 {
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

    input[type="submit"] {
      background-color: #4CAF50;
      color: #ffffff;
      padding: 10px 15px;
      border: none;
      cursor: pointer;
      margin-top: 10px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h2>Registro de Usuario</h2>
  
  <form action="registre.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="Name" required><br><br>
    
    <label for="apellido">Usuario:</label>
    <input type="text" name="usuario" required><br><br>

    <label for="password">Contraseña:</label>
    <input type="password" name="clave" required><br><br>
    
    <input type="submit" value="Registrarse">
  </form>
</body>
</html>
