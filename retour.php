<?php
// cette page nous permet de revenir sur la page arrière
$_SESSION = array();//Ecrase tableau de session 
session_unset(); //Detruit toutes les variables de la session en cours
session_destroy();//Destruit la session en cours
header("location:Serie.php"); // redirige l'utilisateur
?>