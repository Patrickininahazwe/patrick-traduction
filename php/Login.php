<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-con">
    <link rel="stylesheet" href="../css/style_Login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'enregistrement</title>
</head>
<body>
 
    <?php if(isset($messageErreur)) { ?>
        <p><?php echo $messageErreur; ?></p>
    <?php } ?>
    <fieldset><h3>Page de Connexion</h3>
    <form action="con_Login.php" method="POST">
    <div class="container">
            <ul><div class="form-group">
                <label for="email"><img src="../images/utilisateur.png" alt="" width="4%"></label><br>
                <input type="email" name="email" placeholder="enter your email">
            </div></ul>
            
            <ul><div class="form-group">
                <label for="password"><img src="../images/mot-de-passe.png" alt="" width="4%"></label><br>
                <input type="password" name="password" placeholder="entrer voter pass" minlength="4">
            </div></ul>
            
            <ul><button type="submit" name="connecter" >connecter</button></ul>
        </form>
    </div>
    <p><b><a href="enregistrement.php">vous n'avez pas de compte?</a></b></p>
</fieldset>
<footer>
        <p>&copy; Programmer 2024 P@trick  &copy; traduction Francais-Kirundi &copy; tout droit sont reserves &copy;</p>
    </footer>
</body>
</html>