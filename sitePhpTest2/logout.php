<?php
session_start();
$_SESSION['connected'] = false;
unset($_SESSION['pseudo']);
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['password']);
header("Location: /sitePhpTest2/index.php");
