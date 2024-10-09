<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="header">
        <img id="title-img" src="images/PregunTICA-title.png" alt="PregunTICA-title">
    </div>
    <div id="content">
        <div class="initial-content" id="initial-content">
            <p>¡Bienvenidos!</p>
            <div class="play">
                <button class="play-button" id="play-button">Jugar</button>
                <button class="rules-href" onclick="window.location.href='reglamento.html';">¿Cómo se juega?</button>
            </div>
            <div class="table-container">
                <h2>👑Ranking👑</h2>
                <table class="ranking-table">
                    <thead>
                        <tr>
                            <th>Jugador</th>
                            <th>Puntos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "preguntados";

                        // Crear conexión
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Verificar conexión
                        if ($conn->connect_error) {
                            die("Conexión fallida: " . $conn->connect_error);
                        }

                        $sql = "SELECT usuario, puntos FROM participante";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . $row["usuario"] . "</td>
                                        <td>" . $row["puntos"] . "</td>
                                    </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>No hay datos</td></tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>  
    <div class="roulette-container hidden" id="roulette-container">
            <div class="wheel" id="wheel">
                <div class="section" style="background-color: red;">&#x1F451;</div>
                <div class="section" style="background-color: orange;">&#x1F30E;</div>
                <div class="section" style="background-color: yellow;">&#x1F58C;</div>
                <div class="section" style="background-color: green;">&#x1F3C8;</div>
                <div class="section" style="background-color: blue;">&#x1F3A8;</div>
                <div class="section" style="background-color: pink;">&#x1F3C1;</div>
            </div>
            <button id="spinButton">Spin</button>
        </div>
    </div>
    <div id="foot-credits">
        <hr class="linea-negra">
        <p style="margin-top: 26px;">Isabel La Católica 735 | Río Cuarto | Córdoba | Argentina</p>
        <img src="images/credit.png" alt="credit" srcset="">
        <p>Promo 2024</p> <br>
        <p>©2024 | Comunidad Educativa ATICA | All rights reserved.</p>
    </div>
    <script src="index.js"></script>
</body>
</html>