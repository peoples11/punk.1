<?php
session_start();
ob_start();
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
	header('Location: /punk.1/login/ur_prof2.php');
exit;
}

require 'inc files/conn_db.inc.php';
$current_file=$_SERVER['PHP_SELF'];
	

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<style>
body{color:#2d2d2d;}
a.sfpas:link{color:#666666;
	text-decoration:underline;}
a.sfpas:visited{color:#666666;}
a.sfpas:hover{}

  input[type="text"]:focus{
  outline:none;
  background-color:;
  box-shadow: 0 0 10px 2px white;
  letter-spacing:2px;
  value:none;
  color:#4C4C4C;}
  
  input[type="submit"]:focus{
  outline:none;
  background-color:;
  box-shadow: 0px 0px 10px 2px midnightblue;}
  
  input[type="submit"]:hover{
  outline:none;
  background-color:;
  box-shadow: 0px 0px 10px 2px deepskyblue;
  }
  
  input[type="text"]:hover{
  outline:none;
  background-color:;
  box-shadow: 0 0 10px 2px white;
 }
  
  input[type="password"]:focus{
  outline:none;
  background-color:;
  box-shadow: 0 0 10px 2px white;
  letter-spacing:2px;}
  
  input[type="password"]:hover{
  outline:none;
  background-color:;
  box-shadow: 0 0 10px 2px white;}
  
  
  </style>
  <script>
  
  
  function funky(){
   this.style.position='relative';
		  this.style.top='-3px';
		  this.style.left='-3px';}
		  
  function validation(){
      var x = document.forms["loginform"]["pid"].value;
      var y = document.forms["loginform"]["pword"].value;
	 if(x =="username"||y == "password"){
	 alert("change this alert");
	 this.style.boxshadow="0px 0px 0px 0px white";
	 return false;}
	 }
  </script>

</head>
<body>
<div id="A"><a href="http://localhost/punk.1/index.php" class="title">PUNK.COM</a></div>
<div id="B">some image</div>
<div id="C">
<form name="loginform" onsubmit="return validation()" action="<?php echo $current_file; ?>" method="POST">
Punk id:<input type="text" name="pid" maxlength="15" id="ip"
	  placeholder="username" 
	  style="color:silver;"	
	  onclick="
				this.style.transition='color,letter-spacing 1s ease-out';"
	  
	  onfocus="this.style.color='#4C4C4C'">


<span style="font-size:28px;">Password: </span>

<input type="password" name="pword" maxlength="15" id="ip"
placeholder="password"		
style="position:relative;
left:-18px;
color:silver;"
onclick=";
          this.style.transition='color,letter-spacing 1s ease-out';"

onfocus="this.style.color='#4C4C4C'">

<input type="submit" value="SIGN-IN!!"
style="width:135px;height:40px;cursor:pointer;
font-size:20px;padding:2px;background-color:skyblue;
font-weight:bold;border:3px solid skyblue ;border-radius:8px;
color:white;transition:box-shadow .1s;
transition-timing-function:linear;"
	   
onmousedown="this.style.position='relative';
		  this.style.top='3px';
		  this.style.left='3px';
		  this.onmouseout=funky;"
		  
onmouseup="this.style.position='relative';
this.style.top='-3px';
this.style.left='-3px';">
</form>

<?php

if(isset($_POST['pid'])&&isset($_POST['pword'])){
	$pid=$_POST['pid'];$pword=$_POST['pword'];
	if(!empty($pid)&&!empty($pword)){
		$query="SELECT id FROM `ids&pwords` WHERE username = '$pid' AND password ='$pword'";
		if($query_run=mysqli_query($conn,$query)){
			if(mysqli_num_rows(mysqli_query($conn,$query))==0){
				echo 'invalid username/password';
			}else{
				echo 'OK';
				$user_id=mysqli_fetch_assoc($query_run);
				$_SESSION['user_id']=$user_id["id"];
				header('Location: /punk.1/login/ur_prof2.php');
			}
		}
	}else{
		echo "umm.. no";
	}
}
?>
<span style="font-size:20px; font-family:"><p>
<a class ="sfpas" href="http://localhost/punk.1/signup/signup.php";>sign-up </a> &nbsp &nbsp
 &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
 <a class ="sfpas" href="hgf.html">forgot password?</a>
</p></span>
</div>
<div id="D">text text text text text text text 
text text text text text text text text text text 
text text text text text text text text text text 
text text text text text text text text text text 
text text text text text text text text text text 
text text text text text text text text text text </div>
</body>
</html>