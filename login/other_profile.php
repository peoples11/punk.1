<?php
require 'F:/xampp/htdocs/punk.1/inc files/conn_db.inc.php';
session_start();
if(!isset($_SESSION['user_id'])||empty($_SESSION['user_id'])){
	header("Location: http://localhost/punk.1/index.php");
}



?>




<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css" />

<style>

ul.nbar li a:hover{color:#ded324;}


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
<p style="color:red;position:relative;top:100px;font-size:50px;">
<?php
$my_id=$_SESSION["user_id"];
$other_id=$_GET["u_id"];
if($other_id!=$my_id){
	$query1="SELECT `id` FROM `frnds` WHERE (`user1`=$my_id AND `user2`=$other_id) OR (`user2`=$my_id AND `user1`=$other_id)";
	if(mysqli_num_rows(mysqli_query($conn,$query1))==1){
		echo "already friends | <a href=\"unfriend.php?reciever=$other_id\">unfriend?</a>";
	}else{
		$query2="SELECT `id` FROM `frnd_req` WHERE (`sender`=$my_id AND `reciever`=$other_id)";
		$query3="SELECT `id` FROM `frnd_req` WHERE (`reciever`=$my_id AND `sender`=$other_id)";
		if(mysqli_num_rows(mysqli_query($conn,$query2))==1){
			echo "friend request sent |<a href=\"delete.php?reciever=$other_id\">delete request?</a>";
		}elseif(mysqli_num_rows(mysqli_query($conn,$query3))==1){
			echo "<a href=\"accept.php?reciever=$other_id\">accept friend request</a> | <a href=\"not_accept.php?reciever=$other_id\">cancel request</a>";
		}else{
			echo "<a href=\"send_req.php?reciever=$other_id\">send friend request</a>";
		}
	}
}


?>

</p>





</body>
</html>
