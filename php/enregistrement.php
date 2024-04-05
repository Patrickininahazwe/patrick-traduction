

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-con">
    <link rel="stylesheet" href="../css/style_enregistrement.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'enregistrement</title>
</head>
<body>
<fieldset><ul><legend><h1><strong>Formulaire d'enregistrement:</strong></h1></legend></ul>
<form method="post" action="con_enregistrement.php">
<div class="container">
           <ul><div class="form-group">
            <label for="name"><img src="../images/nom.png" alt="" width="4%"></label>
                <input type="text" name="name"  placeholder="votre Nom & prenom" minlength="3">
            </div> </ul>
            
            <ul><div class="form-group">
                <label for="email"><img src="../images/utilisateur.png" alt="" width="4%"></label>
                <input type="email" name="email"  placeholder="votre E-mail">
            </div></ul>
            
            <ul><div class="form-group">
                <label for="password"><img src="../images/images/mot-de-passe.png" alt="" width="4%"></label>
                <input type="password" name="password" minlength="8" maxlength="16" placeholder="votre mot de passe" required>
            </div></ul>

            <ul><div class="form-group">
                <label for="confirmpassword"><img src="../images/images/cle.jpg" alt="" width="4%"></label>
                <input type="password" name="confirmpassword" minlength="8" maxlength="16" placeholder="confirmer votre mot de passe" required>
            </div></ul>
        
            <ul><button type="submit" name="envoyer" id="">envoyer</button></ul>
    </div>
    </form>
    <ul><p><a href="Login.php">vous avez un compte?</a></p></ul>
    </fieldset>
    <footer>
        <p>&copy; Programmer 2024 P@trick  &copy; traduction Francais-Kirundi &copy; tout droit sont reserves &copy;</p>
    </footer>
</body>
</html>