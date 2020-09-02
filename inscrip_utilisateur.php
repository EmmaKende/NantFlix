<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<style >
			body{
				text-align: center;
				background: url("fondconect.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;

			}
			form{
				width: 250px;
				text-align: center;
			}
			input{
				width: 230px;
				text-align: center;
				background: transparent;
				border:none;
				border-bottom: 1px solid #fff;
				font-size: 15px;
				transition: border 0.5s;
				outline:none;
				color: white;
				padding: 6px;
			}
			input[type=submit]{
				border: none;
				width: 110px;
				background: white;
				color: black;
				font-weight: bold;
				font-size: 17px;
				line-height: 25px;
				padding: 8px 0;
				border-radius:15px;
				cursor: pointer;				
			}
			input[type=submit]:hover{
				color:black;
				background-color: tomato;
			}
	
			.formu{
				color: rgb(244,102,27);
				background: black;
				font-weight: bold;
				opacity: 50%;
				padding: 40px;
				width: 250px;
				margin:auto;
				margin-top: 30px;
				height: 470px;
				margin-left: 500px;
				border-radius: 150px;
			}
		</style>
	<body>
		<div  class="formu">
			<h2>Inscription</h2><br>
		<form name="Formulaire" action="connect.php" method="post" enctype="multipart/form-data">	
			Prénom:	<input type="text", name="Prenom", autocomplete="on"  /><br><br>
			Nom: <input type="text", name="Nom", autocomplete="on"  /><br><br>
			Date de naissance: <input type="date", name="date", autocomplete="on"/><br><br>
			Email:  <input type="text", name="email", autocomplete="on"  /><br><br>
			Mot de passe:  <input type="password" name = "pass",pattern="(.*{8,})(.*\d?)(?=.*[A-Z]?)" title="le mot de passe doit contenir au moins 8 caractères,au minimun un chiffre et une lettre majuscule"/><br><br>
			Téléphone:  <input type="text", name="Tel", autocomplete="on"  /><br><br>
			<input type="submit" name="insert" value="S'inscrire">
			<!--"(?=^.{8,}$)(?=.*\d)(?=.*[A-Z])"-->
		</form>
		</div>

	</body>
</html>
