<?php
// Informations de connexion à la base de données
$servername = "localhost"; // Le nom du serveur de base de données (généralement "localhost")
$username = "root"; // Votre nom d'utilisateur MySQL
$password = ""; // Votre mot de passe MySQL
$database = "ecole_db"; // Le nom de votre base de données

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
?>
