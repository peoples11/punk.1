<?php
session_start();
ob_start();

if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	echo "logged in <a href=\"http://localhost/punk.1/logout/logout.php\">Log Out</a>";
}else{
	header("Location: http://localhost/punk.1/index.php");

}

?>