<?php 
//Cette page met en relation la page de connexion et la base de donnée
include_once('Serie.php');

        $servername = "localhost";
        $username = "root";
         $password = "";
         $dbname = "mabase";
        try {
  // se connecter à la base de donnée
  $connection = new PDO("mysql:host=$servername;dbname=$dbname","$username","$password"); 
  
  $mpasse= $_POST['pass'];
  $ident= $_POST['identifiant'];
   if (empty($mpasse) | empty($ident))  // verifie si les champs ont été bien renseigné
 {    
      echo 'Veuillez saisir les champs svp';
      header("location:connexion.php?erreur=1"); // si les champs sont vides ont nous renvoie à la page de connection      
}
else {
 // ecrire une condition permettant de verifier le mot de passe
$query= $connection->prepare("SELECT * FROM utilisateur WHERE Email = '$ident' AND Mot_de_passe= '$mpasse' "); // on récupère les information de l'utilisateur
     $query->execute(array($ident, $mpasse));
      $exist= $query->rowCount() ;// pour compter le nombre de colonneS

      if($exist)   {
        // debut de la session
        session_start();
        $info= $query->fetch(); // la fonction fetch() permet de parcourir toute les données selectionnée par la requête
        $_SESSION['Email']= $ident; 
        $_SESSION['Prenom']= $info['Prenom_U'];
        $_SESSION['Mot_de_passe']= $mpasse;
        header('location:Serie.php');
      }
      else {
         $erreur= "Erreur de connexion";
          header("location:connexion.php?erreur=2");
           exit();
      }
  }          
      } 
      catch (PDOException $e) {
    echo "erreur de connexion" .$e->getMessage();
    exit();
  }
?>




     