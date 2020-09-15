<?php 
/**
* 
*/
class Auth 
{
	
	static function isLogged(){
       if (isset($_SESSION['auth']) && isset($_SESSION['auth']['email']) && isset($_SESSION['auth']['mdp']) ) {
              return true; 
        }else{
        	 return false;
        }
	}

	/*static function logout(){
if (isset($_POST['deconnecter'])) {
		session_destroy();
		header('location:login.php');
}
	}*/
}


?>