<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'mabase';

//if(isset($_POST['inser'])){ // on verifie la condition quand on clique sur le boutton "S'inscrire"
  try {
  // se connecter à mysql
  $connection = new PDO("mysql:host=$servername;dbname=$dbname","$username","$password");
  // message d'erreur en cas d'echec de connection
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // récupérer les valeurs saisies dans le formulaire d'inscription 
  $nom = $_POST['Nom'];
  $prenom = $_POST['Prenom'];
  $MDP= $_POST['pass'];
  $email= $_POST['email'];
  $tel= $_POST['Tel'];
  $date= $_POST['date'];
  if($nom && $prenom && $MDP && $email && $tel && $date){
  // Requête mysql pour insérer des données dans la base de donnée
  $inserer = "INSERT INTO utilisateur(Email,Mot_de_passe,Nom_U,Prenom_U,Date_de_naissance,Telephone) VALUES ('$email','$MDP','$nom','$prenom','$date','$tel')";

  $connection->exec($inserer);
  session_start();
  $_SESSION['Prenom']= $prenom;
  header("location:Serie.php");
    //echo "Inscription reussie <br>";
    //echo " $nom | $prenom | $email | $MDP | $date | $tel";
}
else{
  echo "Veillez saisir tous les champs !";
}
}
catch(PDOException $e)
{
echo $inserer . "<br>" . $e->getMessage();
}
$connection=null;
?>