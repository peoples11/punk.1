<?php

require 'inc files/conn_db.inc.php';
$input=$_GET["ip"];

$query="SELECT * FROM `ids&pwords` WHERE username='".$input."'";
$result=mysqli_query($conn,$query) or die("1");
if(mysqli_num_rows($result)>0){
	echo "<span style='color:red;'>Username already taken</span>";
}else{
	echo "<span style='color:green;'>&#10004</span>";
}

?>