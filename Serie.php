<?php 
session_start();
// page d'acceuil une fois la connection reussir
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>Espace abonné</title>
   <nav> <!-- le nav permet de faire un menu de navigation, dans notre cas, le menu concernes les section de notre page, pour ce faire on defie d'abord des id des sections,
et ensuite on fait des renvoie vers ces id: #id. -->
  <ul>
       <li><a href="consultation_serie.php">Films et serie</a></li><!--
    --><li><a href="deconnection.php">Deconnexion</a></li>   
  </ul>
</nav>
   <link rel="stylesheet" type="text/css" href="serie.css">
   <script language="javascript" type="text/javascript">

var i1 = new Image;
var i2 = new Image;
var i3 = new Image;
var i4 = new Image;
var i5 = new Image;
var i6 = new Image;
var i7 = new Image;
var i8 = new Image;
var i9 = new Image;
var i10 = new Image;

i1.src = "image/img1.png";
i2.src = "image/img2.jpg";
i3.src = "image/img3.jpg";
i4.src = "image/img4.jpg";
i5.src = "image/img5.jpg";
i6.src = "image/img6.jpg";
i7.src = "image/img7.jpg";
i8.src = "image/img8.jpg";
i9.src = "image/img9.jpg";
i10.src = "image/img10.jpg";

</script>
 </head>
 <body>
 <h2>Bienvenue <?php echo $_SESSION['Prenom'];?></h2><br>
<div id="centre">                
  <div id="precedent">
  <input type="button" value="<" title="<<" onClick="defiler('arriere')" />
  </div>
  <div style="position:absolute;">
  <img src="image/img10.png"  id="album"/><!-- pour afficher les images par defaut-->
  </div>
  <div id="suivant">
  <input type="button" value=">" title=">>" onClick="defiler('avant')" />
  </div>
</div>
  <script language="javascript" type="text/javascript">
var chaine_img="img1.png;img2.jpg;img3.jpg;img4.jpg;"//<!--memoriser toutes les photos-->
chaine_img += "img5.jpg;img6.jpg;img7.jpg;img8.jpg;"
chaine_img += "img9.jpg;img10.jpg;"
var tab_img=chaine_img.split(';');//<!--un tableau de sous chaines de caracteres et grace a split en decoupe les chaines a la base de ; qui est si dessus-->
var nb_img = tab_img.length;//<!-- la taille de tableau -->
var chemin ="image/"; //<!-- afin d'inscrire le chemin une foi pour toute -->
var position = 0; //<!-- les indices de tableau cad les images en cour de visualisation  -->
document.getElementById("album").src=chemin + tab_img[position]; //<!-- afficher la premiere image au centre-->

function defiler(comment) //<!-- se paramétre designe le fait defiler en  avant ou en arriere-->
{
if(comment=="avant")
position++;
else
position--;
//<!-- pour ajuster la photos i faut prendre en conséderation les nouveles position donc
if(position<0) //<!-- si on sort des bornes de tableau cad on vas trop loin en ariere -->
{
position = nb_img-1; //<!-- pour revenir -->
}
       else if(position == nb_img) //<!-- on vas trop loin en avant-->
{
position = 0;
}
document.getElementById("album").src=chemin + tab_img[position];
}
</script>
 </body>
 </html>