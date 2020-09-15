 <?php 
session_start();
 extract((array)$_SESSION['auth']);
require("auth.php");
if (Auth::isLogged())echo ""; else header('location:logout.php');
?>

<html  xml:lang="fr" lang="fr">
<head>
<title>Bibliothèque</title>
<meta charset="utf-8"  />
<link rel="shortcut icon" href="../images/1.gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   <link  rel="stylesheet"  type="text/css" href="../style/style.css" />

<style type="text/css">
   .er{
      position: relative;
      top: 30px;
      text-align: center;
   }
   .er div a{
      margin-bottom: 20px;
      font-family: monotype corsiva;
      font-size:20pt;
      color: auto;
      text-decoration:none;
      cursor: pointer;
   }
   	.livre{
	position: absolute;
	background-color: pink;
	top: 100px;
	left:30%;
	width:68%;
}
.entite{
	left: 10%;
	position: relative;
	background-color: rgba(255,255,255,0.8);
}
.infos{
position: relative;
width:80%;
left: 10%;
color:blue;
}
.photo img{
margin: 20px;
position: relative;
left: 5%;
height:150px;
width:200px;
}
</style>

</head>
 <body>
  
   <?php  
include"../html/header2.html";
   ?>
   <div class="cote">
<div class='er'  >
       <div><a href="https://www.laredoute.fr/pplp/100/75363/158099/cat-75390.aspx#srt=noSorting">Cibliothèque (meuble)</a></div>

       <div><a href="https://www.fnac.com/"> Charger ta panier</a></div>
     
     <div>
<a href="logout.php"><i class="fas fa-sign-in-alt"></i> &nbsp Déconnecter</a></div>
</div>

      <div  style="  position: relative; top:200px; left: 10px;text-align: center; font-family: monotype corsiva;text-shadow: 2px 2px 5px rgba(0,0,0,0.8); font-size: 14pt;">
   <p>Rafraîchissement de l'affichage à chaque seconde !</p>
   <div id="horloge1" ></div>


 </div>
<div style="  position: relative; top:250px; left: 10px;color: orange;">
<div id="logo">  </div>
<h3>Bibliothèque en marché</h3></div>
 
   </div>
   <script type= "text/javascript" src="../script/script.js"></script>


 	<div class="livre"> 
 		<table>
 			<th></th><tr><td>1er page</td><td>informations sur les livres</td></tr><th>
 			<tbody>
 	<?php
	
include "config.php";

$query = "SELECT * FROM livre " ;
   $result = mysqli_query($connect, $query);
   while($rslt=mysqli_fetch_assoc($result)){
$id=$rslt['id'];
$nom_livre=$rslt['nom_livre'];
$photo=$rslt['photo'];
$edition=$rslt['edition'];
$auteur=$rslt['auteur'];
$resume=$rslt['resume'];
$prix=$rslt['prix'];
$nb_en_stock=$rslt['nb_en_stock'];

	echo "
	<tr class='entite'>
		
			<div >
				<td >
				<div class='photo'><img src='../images/$photo'>
				</div ></td>
				<td>
				<div class='infos'>
					Nom de livre :",$nom_livre ,"<br>Edition:",$edition,"<br>
liste d'auteurs:",$auteur,"<br>
Résumé :",$resume,"<br>
prix : ",$prix,"<br>
nb resté dans le stock : ",$nb_en_stock,"
<br><a href='#' style=' margin-bottom: 20px;font-family: monotype corsiva;font-size:20pt;color: auto;text-decoration:none;cursor: pointer;'> ajouter au panier<img src='../images/images6.jpg' style='border-radius:20px;height:50px;width:100px;'></a>
</div>
			</div>
		</td>
	</tr>
	";
	 	 	 	 	 	 	 	 
}
?>
</tbody>
</table>
	
<?php
	mysqli_close($connect);
?>
</div>

    <?php  
   include '../html/pied.html';?>
 </body>
  </html>