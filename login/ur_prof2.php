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
textarea:focus{outline:none;
width:500px !important;height:85px !important;}

input[type="submit"]:hover{
  
  background-color:#2b3ffc !important;
  }
  

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

<div style="border:px solid white;
			position:relative;
			top:124px;
			display:flex;
			justify-content:flex-start;
			flex-direction:row;
			flex-wrap:nowrap; ">
<div style="width:px;align-self:center;
			border:px solid white;			
			display:inline;
			 font-size:70px;
			 font-family:papyrus; 			 
			 color:#010b37;
			 order:2;
			 line-height:105%;">

Welcome &nbsp Name!! &nbsp &nbsp &nbsp <span style="font-size:40px;">  <a href="http://localhost/punk.1/logout/logout.php">logout</a> </span><br/>
<form method="POST" action="postPHP.php">
<textarea placeholder="Tell Your Story...	" name="post"
style="border-radius:5px;
width:300px;height:55px;
border:none;
background-color:#ebedfb;
box-shadow:3px 3px 3px 2px #737373;
margin-top:10px;
margin-left:10px;
display:block;
font-size:20px;
font-weight:;
padding:5px;
font-family:arial;
transition:height .2s ease-out,width .2s ease-out;
max-height:85px;max-width:500px;
color:#333335;"
></textarea>

<input type="submit" value="Post!"  
style="width:100px;height:40px;cursor:pointer;
font-size:20px;padding:2px;background-color:#3d4ef3;
font-weight:bold;border:3px ;border-radius:8px;
color:white;margin-left:12px;
letter-spacing:px;position:relative;top:-4px;"
onmousedown="this.style.position='relative';
		  this.style.top='3px';
		  this.style.left='3px';
		  this.onmouseout=funky;		  		  "

     	  onmouseup="this.style.position='relative';
		  this.style.top='-3px';
		  this.style.left='-3px';"
		  >
</form>		  


</div>

<div id="profpic"style="order:1;">
<?php
$var1=$_SESSION['user_id'];
$pic_query ="SELECT `profile_pic` FROM `ids&pwords` WHERE `id`= $var1";
$query_run1=mysqli_query($conn,$pic_query);
$profile_pic=mysqli_fetch_assoc($query_run1);
if($profile_pic['profile_pic']=='' OR $profile_pic['profile_pic']==null){
	$def="accountsettings/userdata/profile_pics/default/default_pic.jpg";
	echo "<img ";
	echo "src=\"$def\" ";
	echo "width=\"200\" ";
	echo "height=\"250\" ";
	echo "/>";
}else{
	$dir=  $profile_pic['profile_pic'];
	echo "<img ";
	echo "src=\"accountsettings/$dir\" ";
	echo "width=\"200\" ";
	echo "height=\"250\" ";
	echo "/>";
}
?>

</div>
<!--<div style="height:230px;
			border-width:2px;
			border-style:solid;
			border-bottom-color:white;
			border-right-color:white;
			border-left-color:black;
			border-top-color:black;
			opacity:.5;
			margin:0px 30px;
			align-self:center;
			order:3;">
			</div>-->
<!--<div style="order:4;padding-top:10px;">			
<dl class="stats">

<dd id="stats">Respect:</dd>
<dd id="stats">toughness:</dd>
<dd id="stats">friendliness:</dd>
<dd id="stats">something:</dd>

</dl>
</div>-->
</div>


<div id="sidebar">
<ul style="list-style-type:none;">
<li id="sideinfo1">View Profile</li>
<li id="sideinfo1">
<a href="http://localhost/punk.1/login/accountsettings/upload_pic.php">Edit Info</a></li>


</ul>
<hr style="border-bottom-color:white;
			border-right-color:white;
			border-left-color:black;
			border-top-color:black;
			width:275px;
			opacity:.5;
			position:relative;
			left:-30px;"
			size="3px"
			
			/>

</div>

<div id="newsfeed">
<!--<div style="height:540px;
			border-width:2px;
			border-style:solid;
			border-bottom-color:white;
			border-right-color:white;
			border-left-color:black;
			border-top-color:black;
			opacity:.5;
			float:left;
			position:absolute;">
			</div>-->
<?php
$query2="SELECT `post` FROM `selfposts` ORDER BY `id` DESC";
$getpost=mysqli_query($conn,$query2)or die("00");
while($rows=mysqli_fetch_assoc($getpost)){
	$post=$rows['post'];
	echo "<div>$post</div>";
}

?>
			
			
</div>



</body>

</html>