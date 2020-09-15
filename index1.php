<html  xml:lang="fr" lang="fr">
<head>
<title>Bibliothèque</title>
<meta charset="utf-8"  />
<link rel="shortcut icon" href="images/1.gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   <link  rel="stylesheet"  type="text/css" href="style/style.css" />

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
</style>
</head>
 <body>
   <div class="cote">
<div class='er'  >
       <div><a href="https://www.laredoute.fr/pplp/100/75363/158099/cat-75390.aspx#srt=noSorting">Cibliothèque (meuble)</a></div>

       <div><a href="https://www.fnac.com/"> Charger ta panier</a></div>
     
   	 <div><a href="php/formulaire.php" style="color: red">inscrier</a></div>
       <div><a href="php/formulaire.php" style="color: red">Connecter</a></div>
</div>

   	<div  style="  position: relative; top:200px; left: 5px;text-align: center; font-family: monotype corsiva;text-shadow: 2px 2px 5px rgba(0,0,0,0.8); font-size: 14pt;">
   <p>Rafraîchissement de l'affichage à chaque seconde !</p>
   <div id="horloge1" ></div>


 </div>
<div style="  position: relative; top:250px; left:5px;color: orange;">
<div id="logo">  </div>
<h3>Bibliothèque en marché</h3></div>
 
   </div>
   <script type= "text/javascript" src="script/script.js"></script>



   <?php 
   include 'php/livres.php'; 
   include 'html/pied.html';?>
 </body>
  </html>