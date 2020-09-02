<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Insérer une série</title>
		<style >
			body{
				text-align: center;
				background: url("movie8.jpg");
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;

			}
			form{
				width: 250px;
				text-align: center; 
				background-color: white;
				padding-left: 10px;
			}
			
			input{
				width: 240px;
				text-align: center;
				background: transparent;
				border:none;
				border-bottom: 1px solid black;
				font-size: 15px;
				font-weight: 200px;
				transition: border 0.5s;
				outline:none;
				color: black;
				padding: 8px;
			}
			input[type=submit]{
				border: none;
				width: 130px;
				background: white;
				color: #000;
				font-size: 16px;
				line-height: 25px;
				padding: 10px 0;
				border-radius:15px;
				cursor: pointer;				
			}
			input[type=submit]:hover{
				color:#fff;
				background-color: black;
			}
	
			.formu{
				color: black;
				background: white;
				opacity: 80%;
				padding: 40px;
				width: 250px;
				margin:auto;
				margin-top: 80px;
				height: 550px;
				margin-left: 500px;
			}
		</style>
	<body>
		<div  class="formu">
		<form name="Formulaire" action="serie2.php" method="post" enctype="multipart/form-data">	
			<h2>  Inserer une nouvelle série</h2>
			Intitulé:	<input type="text", name="nom", autocomplete="on"  /><br><br>
			Nombre d'épisode: <input type="text", name="episode", autocomplete="on"  /><br><br>
			Acteurs principaux: <input type="text", name="acteur", autocomplete="on"  /><br><br>
			Réalisateur:  <input type="text", name="reali", autocomplete="on"  /><br><br>
			Année de sortie:  <input type="text", name="sortie", autocomplete="on"/><br><br>
			<input type="submit" name="insert" value= "Enregistrer">
		</form>
		</div>

	</body>
</html>