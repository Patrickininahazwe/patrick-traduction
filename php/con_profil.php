<?php
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
// Traitement de la soumission du formulaire de mise à jour
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Récupération des données du formulaire
    $nouveauNom = $_POST['name'];
    $nouveauMotDePasse = $_POST['password'];

    // Mise à jour des informations de l'utilisateur dans la base de données
    $requete = $connexion->prepare('UPDATE formulaire SET name = ?, password = ?, WHERE email = ?');
    $requete->bind_param('ss', $nouveauNom, $nouveauMotDePasse);
    $requete->execute();

    echo "Mise à jour réussie !";
}
?>

<!-- Formulaire de mise à jour des informations de l'utilisateur -->
<form method="POST" action="">
    <input type="text" name="name"  required><br><br>
    <input type="password" name="password" required><br><br>
    <input type="submit" name="update" value="update">
</form>

