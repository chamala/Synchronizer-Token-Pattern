<?php
session_start();
class token {

	public static function checkToken($token){

        if(isset($_SESSION['token']) && $token === $_SESSION['token'] ){
  				return true;
  			}
  			else{
  				return false;
  			}

	}
}
?>
