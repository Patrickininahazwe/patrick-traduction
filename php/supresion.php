<?php
// Connexion à la base de données et récupération de l'e-mail de l'utilisateur connecté (comme indiqué dans le premier exemple)
// Connexion à la base de données et récupération de l'e-mail de l'utilisateur connecté (comme indiqué dans le premier exemple)
$host = 'localhost';
$dbname = 'assaie';
$username = 'root';
$password = '';

$connexion = new mysqli($host, $username, $password, $dbname);

// Vérification de la connexion
if ($connexion->connect_error) {
    die('Erreur de connexion à la base de données : ' . $connexion->connect_error);
}

// Fonction d'authentification pour récupérer l'utilisateur connecté
function getUtilisateurConnecte() {
    // Code d'authentification ici (par exemple, vérifier la session ou le cookie)
    // Retourne l'e-mail de l'utilisateur connecté
    return 'patrickininahazwe2002@gmail.com'; // E-mail de l'utilisateur connecté (à adapter en fonction de votre système d'authentification)
}

// Récupération de l'e-mail de l'utilisateur connecté
$emailUtilisateurConnecte = getUtilisateurConnecte();
// Traitement de la soumission du formulaire de suppression
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    // Suppression de l'utilisateur de la base de données
    $requete = $connexion->prepare('DELETE * FROM formulaire WHERE email = ?');
    $requete->bind_param('s', $emailUtilisateurConnecte);
    $requete->execute();

    echo "Suppression réussie !";
}
?>

<!-- Formulaire de suppression des informations de l'utilisateur -->
<form method="POST" action="">
    <input type="submit" name="delete" value="Supprimer">
</form>