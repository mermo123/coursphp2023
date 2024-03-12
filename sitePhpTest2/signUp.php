<?php
// Attention on reprend la session ouverte
session_start();
$title = "Sign Up";
$nav = "signup";
require "header.php";
?>


<h1>S'enregistrer </h1>
<?php
if (is_connected()) :
    header("Location: /sitePhpTest2/index");
endif;




?>

<form action="/sitePhpTest2/login.php" method='POST'>
    <input type="text" name="prenom" placeholder="votre prénom" required>
    <br>
    <br>
    <input type="text" name="nom" placeholder="votre nom" required>
    <br>
    <br>
    <input type="text" name="unPseudo" placeholder="votre pseudo" required>
    <br>
    <br>
    <input type="password" name="unPassword" placeholder="mot de passe" required>
    <br>
    <br>
    <br>
    <button class="btn btn-primary" type="submit">Envoyer</button>
</form>

<!--<form action="/coursphp3/index.php" method='POST'>
    <input type="email" name="leMail" placeholder="example@cfitech.be">
    <button class="btn btn-primary" type="submit">Envoyer</button>
</form>-->
<?php
require "footer.php";
?>