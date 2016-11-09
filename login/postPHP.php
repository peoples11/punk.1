<?php
ob_start();
require 'F:/xampp/htdocs/punk.1/inc files/conn_db.inc.php';
$input=$_POST["post"];
if($input!=''||$input!=null){
$query="INSERT INTO `selfposts`(`post`) VALUES('$input')";
mysqli_query($conn,$query)or die("1");
}
$current_file=$_SERVER['SCRIPT_FILENAME'];

header('Location:http://localhost/punk.1/login/ur_prof2.php');
ob_end_flush();

?>