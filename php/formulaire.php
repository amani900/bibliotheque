<?php
session_start();

include "index2.php";
include "config.php";
?>

<html  xml:lang="fr" lang="fr">
<head>
<title>Bibliothèque</title>
<meta charset="utf-8"  />
<link rel="shortcut icon" href="../images/1.gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
   <link  rel="stylesheet"  type="text/css" href="../style/style.css" />
   <script type= "text/javascript" src="../script/script.js"></script>


</head>
 <body>
<div class="forms" id="f1">
<?php
if(isset($_POST['email']))$Email = $_POST['email'];else $Email = "l'email de pharmacie n'été pas envoyé en POST Méthod";
if(isset($_POST['mdp']))$Mdp = $_POST['mdp'];else $Mdp = "le mdp n'été pas envoyé en POST Méthod";

if(isset($_POST['connecter'])){
   if(empty($Email)){echo("<div class='comment'>Vous avez obliger de saisir l'email'</div>");}
  elseif(empty($Mdp)){echo("<div class='comment'>Vous avez obliger de saisir le mot de pass</div>");}
      else {
$query = "SELECT * FROM user where email='$Email' and mdp='$Mdp'" ;
   $result = mysqli_query($connect, $query);
   while($rslt=mysqli_fetch_assoc($result)){
$email=$rslt['email'];
$mdp=$rslt['mdp'];
}

         if((mysqli_num_rows($result)<1) )
                  echo "<div class='comment'>ces informations ne sonts pas existe!soit l'email ou le mdp erroné</div> <br>";
      elseif(mysqli_num_rows($result)==1){
      if ($Email==$email&&$Mdp==$mdp) {
      $_SESSION['auth']=array('email'=>$email,'mdp'=>$mdp );
       ini_set('session.gc-maxlifetime', 60 * 60 * 24 * 365);
         $_SESSION['email']=$email;
         $_SESSION['mdp']=$mdp;
        echo'<div class="att"><ul><li>  Attendez quelques secondes svp! ... &nbsp&nbsp&nbsp <img class="imgatt"src="../images/gip21hy.gif"/></li></ul></div>';
         echo'<meta http-equiv="refresh" content="2;url=achat.php"/>';exit();
      }
      }
      else echo "<div class='comment'>le nombre des utilisteur est plus de 1 !</div>";

}


         
}
echo("<form method='post' action=".'formulaire.php'.">
    <br> 
   <table>
     <tr>
       <td class='indice'> Email</td><td> <input type='text' name='email'pattern='^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$' title='forme du email xxxx@xxxx' placeholder='Email ...'></td></tr>
    <tr>
       <td class='indice'  >Mot de pass</td><td> <input type='password' pattern='^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]{5}[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]*$' title='le mot de pass doit etre plus de 5 caractères' name='mdp' id='pw' placeholder='Mot de pass...'></button></td></tr>
     <tr> 
     

      <td colspan='2' align='center'> <button type='button' class='eye' onClick='togglePwd()'><img class='eye'src='../images/giphy_s (3).gif' ></td></tr>
   <tr>
       <td colspan='2' align='right'> <input type='submit'class='change' name='connecter' value='Connecter'>
       </td></tr>
    </table></form>
");



mysqli_close($connect);
?>
</div>
 </body>
  </html>