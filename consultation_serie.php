<?php 
session_start();
$host = 'localhost';
  $dbname = 'mabase';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM serie";

  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Consultation de série</title>
 	<style type="text/css">
 		  body {
      background: url("movie7.jpg");
      background-attachment: fixed;
      background-size: cover;
      width:100%;
      margin:0px;
      padding:0px;
}
 a{
			margin:0 20px;
			color:black;
			border: 1px solid rgb(244,102,27) ;
	      	font-size: 20px;
	      	background-color: tomato;
			color: black;
			height: 30px;
			width: 100px;
			position:relative;
			display: block;
			text-align: center;
			border-radius: 10px;
}
a:link {
    color:#EDEEEE;
  text-decoration:none;
}
th{
	font-size: 25px;
}
td{
	font-size: 20px;
}
 	</style>
 </head>
 <body>
 <h2> Consultez les films et series en exclusivité sur NantFlix </h2>
 <table>
   <thead>
     <tr>
       <th>Serie</th>
     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <!--cette instruction permet d'afficher la liste des series-->
       <td><?php echo htmlspecialchars($row['Nom_S']); ?> <a href="regarde.php">regarder</a></td>
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>

<!--on veut recuperer les films enregister dans la base de donner-->
 <!--<p>serie <?php //echo $_SESSION['nom'];?></p>-->
 </body>
 </html> 