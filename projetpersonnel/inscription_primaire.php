<?php
// Inclure le fichier de configuration contenant les informations de connexion à la base de données
include 'config.php'; // Assurez-vous que ce chemin est correct

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $parent_name = $_POST['parent_name'];
    $email = $_POST['email'];
    $child_name = $_POST['child_name'];
    $child_age = $_POST['child_age'];

    // Valider et traiter les données (vous pouvez ajouter des vérifications supplémentaires ici)

    // Enregistrement des données dans la table "enfants"
    $sql = "INSERT INTO enfants (nom, age) VALUES ('$child_name', '$child_age')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription au programme primaire réussie !";
    } else {
        echo "Erreur lors de l'inscription : " . $conn->error;
    }
}
?>
