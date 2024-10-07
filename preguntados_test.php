<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Base de Datos - Preguntados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .question-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .question {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .answer {
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <h1>Prueba de Preguntados</h1>

    <div class="question-box">
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = ""; // Cambia esto si tienes un password configurado
        $dbname = "preguntados";

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consultar una pregunta y sus respuestas
        $sql = "SELECT p.pregunta, r.rpsCor, r.rpsIn1, r.rpsIn2, r.rpsIn3 
                FROM pregunta p 
                JOIN respuesta r ON p.id = r.id_pregunta 
                LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar la pregunta y las respuestas
            while($row = $result->fetch_assoc()) {
                echo "<div class='question'>" . $row["pregunta"] . "</div>";
                echo "<div class='answer'>A) " . $row["rpsCor"] . "</div>";
                echo "<div class='answer'>B) " . $row["rpsIn1"] . "</div>";
                echo "<div class='answer'>C) " . $row["rpsIn2"] . "</div>";
                echo "<div class='answer'>D) " . $row["rpsIn3"] . "</div>";
            }
        } else {
            echo "No hay preguntas disponibles.";
        }

        $conn->close();
        ?>
    </div>

</body>
</html>
