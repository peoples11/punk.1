<?php
require 'F:/xampp/htdocs/punk.1/inc files/conn_db.inc.php';
session_start();
if(!isset($_SESSION['user_id'])||empty($_SESSION['user_id'])){
	header("Location: http://localhost/punk.1/index.php");
}

function disp_mem($user_id,$field_name){
	$mem_query="SELECT `$field_name` FROM `ids&pwords` WHERE `id`=$user_id";
$query_run=mysqli_query($GLOBALS['conn'],$mem_query);
	$name=mysqli_fetch_assoc($query_run);
	$var=$name["$field_name"];
	return $var;
}

?>




<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css" />

<style>

ul.nbar li a:hover{color:#ded324;}
div a:link{color:white;text-decoration:none;}
div a:visited{color:white;text-decoration:none;}
  

</style>

</head>

<body>
<div id="A">
<ul class="nbar">
<span id="logo">
<li >PUNK.COM</li></span>
<span style="float:right;"><li id="litem"><a href="http://localhost/punk.1/login/members.php">Members</a></li>
<li id="litem"><a href="#" >Requests</a></li>
<li id="litem"><a href="#" >Friends</a></li>
</span>
</ul>
</div>

<div style="border:0px solid yellow;margin:20px;margin-left:0px;margin-top:0px;position:relative;top:80px;left:0px;padding:30px;">
<?php
$all_mem_query="SELECT `id` FROM `ids&pwords` WHERE 1";
$query_run=mysqli_query($conn,$all_mem_query);
while($ids=mysqli_fetch_array($query_run)){
$mem_name=disp_mem($ids['id'],'username');
$u_id=$ids['id'];
echo "<div id=\"memb\"><a href=\"other_profile.php?u_id=$u_id\">";
echo "$mem_name </a><br/>";
echo "</div>";
}
?>
</div>


</body>
</html>













