<html  xml:lang="fr" lang="fr">
<head>
<title>Bibliothèque</title>
<meta charset="utf_8"  />
<link rel="shortcut icon" href="../images/1.gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   <link  rel="stylesheet"  type="text/css" href="../style/style.css" />
<style type="text/css">
	.livre{
	position: absolute;
	background-color: pink;
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
				<div class='photo'>
					<a href='php/formulaire.php'><img src='images/$photo'></a>
				</div ></td>
				<td>
				<div class='infos'>
					Nom de livre :",$nom_livre ,"<br>Edition:",$edition,"<br>
liste d'auteurs:",$auteur,"<br>
Résumé :",$resume,"<br>
prix : ",$prix,"<br>
nb resté dans le stock : ",$nb_en_stock,"</div>
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
 </body>
  </html>