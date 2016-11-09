<?php

require 'inc files/conn_db.inc.php';
$un=$_GET["uname"];
$pw=$_GET["pword"];



$query="INSERT INTO `ids&pwords`(`username`,`password`) VALUES ('$un','$pw')";

$res=mysqli_query($conn,$query)or die("1");
header("Location:http://localhost/punk.1/registerationsucess/success.html")
?>