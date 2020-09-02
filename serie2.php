<?php 
// Cette page met en relation l'insertion d'une nouvelle serie dans la base de donnée
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'mabase';
include_once('nant.php');

//if(isset($_POST['inser'])){ // on verifie la condition quand on clique sur le boutton "S'inscrire"
  try {
  // se connecter à mysql
  $connection = new PDO("mysql:host=$servername;dbname=$dbname","$username","$password");
  // message d'erreur en cas d'echec de connection
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// on recupère les valeurs pour les champs de la série
  $intitule= $_POST['nom'];
  $nbre= $_POST['episode'];
  $acteur= $_POST['acteur'];
  $real= $_POST['reali'];
  $annee = $_POST['sortie'];
 
if($intitule && $nbre && $acteur && $real && $annee){
  // Requête mysql pour insérer des données dans la base de donnée
  $inserer = "INSERT INTO serie(Nom_S,DateSortie,nbreepisode,acteurs,realisateur) VALUES ('$intitule','$annee','$nbre','$acteur','$real')";

  $connection->exec($inserer);
//echo "Insertion de serie reussie <br>";
//echo " $intitule | $nbre | $acteur | $real | $annee";
        session_start();
        $_SESSION['nom']= $intitule;
        header('Location:nant.php');
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