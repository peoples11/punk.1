<?php
require 'F:/xampp/htdocs/punk.1/inc files/conn_db.inc.php';
$input=$_POST["post"];
$query="INSERT INTO `selfposts`(`post`) VALUES('$input')";
mysqli_query($conn,$query)or die("1");

?>