<?php
session_start();
// Cette page permet de regarder une serie
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Regarder</title>
	<style type="text/css">
		body{
			background: url("movie2.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
		a{
			border: 1px solid rgb(244,102,27) ;
	      	padding: 14px;
	      	font-size: 18px;
	      	background-color: #FCD21C;
			color: #000000;
			height: 60px;
			width: 100px;
			position:relative;
			display: block;
			text-align: center;
			text-underline-position: orange;
			border-radius: 10px;
			margin-left: 170px;
		}
		#ret{
			border: 1px solid rgb(244,102,27) ;
	      	padding: 14px;
	      	font-size: 18px;
	      	background-color: red;
			color: #000000;
			height: 20px;
			width: 80px;
			position:relative;
			display: block;
			text-align: center;
			text-underline-position: orange;
			border-radius: 10px;
			margin-left: 170px;
		}
		p{
			font-size: 30px;
		}
		.x{
			border: 2px solid black;
				background-color: #80D0D0;
				width: 500px;
				height: 350px; 
				padding-left: 15px;
				text-align: center;
				margin-left: 400px;
		}
		
		a:link {
    color:#EDEEEE;
  text-decoration:none;
}
	</style>

</head>
<body>
	<div class="x">
	<p> Cher <?php echo $_SESSION["Prenom"]; ?> vous êtes sur la serie <?php echo $_SESSION["nom"];?></p>
				<a href="">continuer l'episode en cours</a><br>
 				 <a  href="">nouvelle lecture de la serie</a>
</div>
<a id="ret" href="retour.php">Retour</a>
</body>
</html>