<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programmes Maternels</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Programmes Maternels</h1>
        <div class="programmes">
            <?php
            include 'config.php'; // Assurez-vous d'inclure le fichier de configuration contenant les informations de connexion à la base de données
            
            // Requête SQL pour récupérer les programmes maternels
            $sql = "SELECT * FROM programmes_maternels";
            $result = $conn->query($sql);
            
            // Vérifie si des résultats ont été retournés
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='programme'>";
                    echo "<h2>" . $row["nom_programme"] . "</h2>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "Aucun programme maternel disponible.";
            }
            
            // Fermeture de la connexion à la base de données
            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
