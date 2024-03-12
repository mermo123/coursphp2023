<?php
session_start(); ?>




<?php
$title = "Page d'accueil";
$nav = "index";
require "header.php";
?>
<main role="main" class="container">

    <div class="starter-template">
        <h1>Ma page d'acceuil</h1>
        <h1>Debug</h1>
        <p><?php var_dump($_SESSION); ?></p>
        <br>
        <img src="images/goku.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">




    </div>



</main><!-- /.container -->
<?php
require "footer.php";
?>