<!DOCTYPE html>
<html> <!--le margin permet de mettre au milieu le formulaire-->
<head>
	<title>Connexion</title>
	<style type="text/css">
		body{
			margin:0;
			padding: 0;
			background-image: url("fondconect.jpg");
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
		.a{
			width: 300px;
			height: 250px;
			box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
			background: #fff;
			padding:20px;
			text-align: center;
			margin: 8% auto 0;
			color: tomato;
			font-weight: bold;
			background: black;
			opacity: 50%;
			border-radius: 150px;
		}
		input{
			width: 240px;
				text-align: center;
				background: transparent;
				border:none;
				border-bottom: 1px solid #fff;
				font-size: 15px;
				font-weight: 200px;
				transition: border 0.5s;
				outline:none;
				color: #fff;
				padding: 8px;
			}
		input[type=submit]{
				border: none;
				width: 90px;
				background: white;
				color: black;
				font-weight: bold;<
				font-size: 16px;
				line-height: 15px;
				padding: 10px 0;
				border-radius:15px;
				cursor: pointer;			
			}
		input[type=submit]:hover{
				color:black;
				background-color: tomato;
			}
			img{
				width: 70px;
				height: 70px;
				margin-top: -80px;
			}
			h3{
				color: white;
			}
	</style>
</head>
<body>
	<div class="a">
		<img src="imgconnect.png">
		<h3 >Connexion </h3><br>
	<form name="connexion" action="connect3.php" method="post">
			Identifiant <input type="text", name="identifiant", autofocus/><br><br>
			Mot de passe <input type="password" name = "pass"/><br><br>
			<br><input type="submit" value="Envoyer">
		
	</form>
	</div>
	<!--,pattern="([A-Z]){1}([\w]+)$", title="Commencer par une majuscule"-->
</body>
</html>
