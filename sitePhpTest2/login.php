<?php
// Attention on reprend la session ouverte
$title = "Login";
$nav = "login";
require "header.php";
// require "functions/authentification.php";

//Cette condition verifie si on est connecté grace a notre fonction qu'on avait dans authentification.php
//Dans le cas ou on est connecté il nous redirige vers dashboard
if (is_connected()) :
    header("Location: /sitePhpTest2/index");
endif;

if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['unPseudo']) && isset($_POST['unPassword'])) :
    //recupère l'email dans session si email a été introduis dans le formulaire

    $_SESSION['prenom'] =  $_POST['prenom'];
    $_SESSION['nom'] =  $_POST['nom'];
    $_SESSION['pseudo'] =  $_POST['unPseudo'];
    $_SESSION['password'] =  $_POST['unPassword'];


endif;



$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['password'])) :
    if ($_POST['pseudo'] === $_SESSION['pseudo'] && $_POST['password'] === $_SESSION['password']) :

        $_SESSION['connected'] = true;
        //redirection
        header('Location: /sitePhpTest2/index.php');
    else :
        $erreur = "Identifiants incorrects !";
    endif;
endif;

// $erreur = null;
// if (!empty($_POST['pseudo']) || !empty($_POST['password'])) :
//     if ($_POST['pseudo'] === "Julien" && $_POST['password'] === "12345") :

//         $_SESSION['pseudo'] = $_POST['pseudo'];
//         $_SESSION['connected'] = true;
//         //redirection
//         header('Location: /sitePhpTest2/dashboard.php');
//     else :
//         $erreur = "Identifiants incorrects !";
//     endif;
// endif;

if ($erreur) : ?>
    <div class="alert alert-danger">
        <?php echo $erreur ?>
    </div>
<?php endif;
?>



<div class="m-5">
    <h1>Login</h1>

    <form action="/sitePhpTest2/login.php" method="POST">
        <input type="text" name="pseudo" placeholder="Votre Login" required>
        <br><br>
        <input type="password" name="password" placeholder="Votre mot de passe" required>
        <br><br>
        <button class="btn btn-secondary" type="submit">Se connecter</button>
    </form>
</div>

<?php
require "footer.php";
?>