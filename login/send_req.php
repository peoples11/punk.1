<?php
require 'F:/xampp/htdocs/punk.1/inc files/conn_db.inc.php';
session_start();ob_start();
if(!isset($_SESSION['user_id'])||empty($_SESSION['user_id'])){
	header("Location: http://localhost/punk.1/index.php");
}
$other_id=$_GET['reciever'];
$my_id=$_SESSION["user_id"];
$query="INSERT INTO `frnd_req` (`sender`,`reciever`) VALUES ($my_id,$other_id)";
mysqli_query($conn,$query);
header("Location: http://localhost/punk.1/login/other_profile.php?u_id=$other_id");

?>