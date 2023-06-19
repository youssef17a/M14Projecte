<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda en API - Personajes de Rick y Morty</title>
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

        .welcome-message {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .logout-link {
            color: blue;
            text-decoration: underline;
            cursor: pointer;
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
        .form-group input[type="submit"] {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Búsqueda en API - Personajes de Rick y Morty</h2>
        <?php
        session_start();


        if (!isset($_SESSION['username'])) {
            header('Location: index.php'); 
            exit();
        }
        ?>
        <div class="welcome-message">
            <?php echo "Bienvenido, " . $_SESSION['username'] . "!"; ?> <a class="logout-link" href="logout.php">Cerrar Sesión</a>
        </div>
        <form method="GET" action="character_details.php">
            <div class="form-group">
                <label for="query">Buscar:</label>
                <input type="text" id="query" name="query" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Buscar">
            </div>
        </form>
    </div>
</body>
</html>
