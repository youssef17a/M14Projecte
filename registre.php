<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .success {
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro de Usuario</h2>
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "010203";
        $dbname = "Usuarios";


        $conn = new mysqli($servername, $username, $password, $dbname);


        if ($conn->connect_error) {
            die("<p class='error'>Error de conexión: " . $conn->connect_error . "</p>");
        }

        $Name = $_POST['Name'];
        $usuario = $_POST['usuario'];
        $clave = md5($_POST['clave']);

        $sql = "INSERT INTO Users (usuario, Name, clave) VALUES ('$usuario', '$Name','$clave')";

        if ($conn->query($sql) === TRUE) {
            echo "<p class='success'>Registro exitoso. <a href='index.php'>Iniciar sesión</a></p>";
        } else {
            echo "<p class='error'>Error al registrar el usuario: " . $conn->error . "</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
