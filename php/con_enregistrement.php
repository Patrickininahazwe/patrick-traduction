
<?php
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
if($password!=$confirmpassword){
    echo"erreur de confirmation";
}
else{

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

// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Vérification si l'email existe déjà
    $requete = $connexion->prepare('SELECT COUNT(*) AS count FROM formulaire WHERE email = ?');
    $requete->bind_param('s', $email);
    $requete->execute();
    $resultat = $requete->get_result()->fetch_assoc();
    if ($resultat['count'] > 0) {
        echo "Cet email est déjà utilisé. Veuillez réessayer avec un autre email.";
    } else {
        // Insertion des données dans la base de données "";
        $requete = $connexion->prepare('INSERT INTO formulaire (name, email, password) VALUES (?, ?, ?)');
        $requete->bind_param('sss', $name, $email, $password);
        $requete->execute();

       header("Location:../html/traduction.html");

    }
}    
}
?>