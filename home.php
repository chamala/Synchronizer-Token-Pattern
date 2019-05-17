<?php

require_once 'token.php';

$val = $_POST["token"];


if(isset($_POST['updatepost'])){
	if(token::checkToken($val)){
		echo "<h2> Valid request:  ".$_POST['updatepost']."</h2>";
		echo "Post Updated!!";
	}
	else{
	  echo "<h2> Invalid request(csrf token does not match) :  ".$_POST['updatepost']."</h2>";
	}
}
?>
