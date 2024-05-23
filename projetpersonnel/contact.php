<?php
// Inclure le fichier de configuration contenant les informations de connexion à la base de données
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si la clé "nom" existe dans le tableau $_POST
    if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) {
        // Récupère les données du formulaire
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Connexion à la base de données
        $conn = new mysqli($servername, $username, $password, $database);

        // Vérifie la connexion
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Prépare et exécute la requête SQL pour insérer les données dans la table "contacts"
        $sql = "INSERT INTO contacts (nom, email, message) VALUES ('$nom', '$email', '$message')";
        if ($conn->query($sql) === TRUE) {
            echo "Le message a été envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi du message : " . $conn->error;
        }

        // Ferme la connexion à la base de données
        $conn->close();
    } else {
        echo "Tous les champs du formulaire doivent être renseignés.";
    }
}
?>
