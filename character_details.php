	<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda de Personajes de Rick y Morty</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
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

        .logout-button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #ff0000;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
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

        .character-details {
            margin-bottom: 20px;
        }

        .character-details h3 {
            margin-top: 0;
        }

        .character-details p {
            margin: 0;
        }

        .character-image {
            max-width: 300px;
            margin-bottom: 10px;
        }

        .favorite-form {
            margin-top: 10px;
        }

        .favorite-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Búsqueda de Personajes de Rick y Morty</h2>
        <?php
        session_start();

        if (!isset($_SESSION['username'])) {
            header('Location: index.php');
            exit();
        }
        ?>
        <div class="welcome-message">
            <?php echo "Hola, " . $_SESSION['username'] . "!"; ?> <a href="logout.php">Cerrar Sesión</a>
        </div>

        <form method="GET" action="character_details.php">
            <div class="form-group">
                <label for="query">Buscar personajes:</label>
                <input type="text" id="query" name="query" placeholder="Ingresa el nombre del personaje" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Buscar">
            </div>
        </form>

        <?php
        if (isset($_GET['query'])) {
            $query = $_GET['query'];

            $url = 'https://rickandmortyapi.com/api/character/?name=' . urlencode($query);
            $response = file_get_contents($url);

            if ($response) {
                $characters = json_decode($response, true);

                if (!empty($characters['results'])) {
                    foreach ($characters['results'] as $character) {
                        $pdfContent = "Nombre: " . $character['name'] . "\n";
                        $pdfContent .= "Especie: " . $character['species'] . "\n";
                        $pdfContent .= "Género: " . $character['gender'] . "\n";

                        require_once('tcpdf/tcpdf.php');
                        $pdf = new TCPDF();
                        $pdf->AddPage();
                        $pdf->SetFont('Helvetica', '', 12);
                        $pdf->Write(0, $pdfContent);

                        $pdfDownloadLink = '<a href="download_pdf.php?character_id=' . $character['id'] . '">Descargar PDF</a>';

                        echo '<div class="character-details">';
                        echo '<h3>Detalles del Personaje</h3>';
                        echo '<p>Nombre: ' . $character['name'] . '</p>';
                        echo '<p>Especie: ' . $character['species'] . '</p>';
                        echo '<p>Género: ' . $character['gender'] . '</p>';
                        echo '<img class="character-image" src="' . $character['image'] . '" alt="Foto del personaje">';

                        echo '<p>' . $pdfDownloadLink . '</p>';
                        echo '</div>';
                        echo '<hr>';
                    }
                } else {
                    echo '<p>No se encontraron personajes con el término de búsqueda "' . $query . '".</p>';
                }
            }
        } else {
            echo '<p>No se proporcionó ningún término de búsqueda.</p>';
        }
        ?>
    </div>
</body>
</html>
