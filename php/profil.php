<?php
// Connexion à la base de données
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

// Récupération des informations de l'utilisateur connecté à partir de la base de données
$requete = $connexion->prepare('SELECT * FROM formulaire WHERE email = ?');
$requete->bind_param('s', $emailUtilisateurConnecte);
$requete->execute();
$resultat = $requete->get_result()->fetch_assoc();

$nomUtilisateur = $resultat['name'];
$emailUtilisateur = $resultat['email'];
$motDePasseUtilisateur = $resultat['password'];

// Affichage des informations de l'utilisateur
echo "Nom           : ".$nomUtilisateur."<br>";
echo "E-mail        : ".$emailUtilisateur . "<br>";
echo "Mot de passe  : ".$motDePasseUtilisateur . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><a href="con_profil.php">metre a jour</a></p>


</body>
</html>
