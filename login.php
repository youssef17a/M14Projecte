<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
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

        .error {
            color: red;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="password"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Credenciales incorrectas</h2>
        <?php
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = ($_POST['password']);

            $servername = 'localhost';
            $dbusername = 'root';
            $dbpassword = '010203';
            $dbname = 'Usuarios';

            $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

            if ($conn->connect_error) {
                die('<p class="error">Error de conexión a la base de datos: ' . $conn->connect_error . '</p>');
            }

            $sql = "SELECT * FROM Users WHERE usuario = '$username' AND clave = '$password'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                session_start();
                $_SESSION['username'] = $username;
                header('Location: proves.php'); 
                exit();
            } else {
                echo '<p class="error">Nombre de usuario o contraseña incorrectos.</p>';
                echo '<p class="error">Por favor, verifica tus credenciales e intenta nuevamente.</p>';
                echo '<p><a href="index.php">Volver</a></p>';
                exit();
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
