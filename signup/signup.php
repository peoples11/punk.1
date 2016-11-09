<?php

require 'inc files/conn_db.inc.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="signup.js"></script> 

<!--<script>
/*function validation(){
var x = document.forms["sigup"]["firstname"].value;
if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
}
}
function funky(){
   this.style.position='relative';
		  this.style.top='-3px';
		  this.style.left='-3px';}*/
</script>-->
<style>
input:focus{
	outline:none;}
input[type="submit"]:hover{
  outline:none;
  background-color:;
  box-shadow: 0px 0px 10px 2px deepskyblue;
  }
</style>
</head>
<body >
<div id="A"><a href="http://localhost/punk.1/index.php" class="title">PUNK.COM</a></div> 
<div id="B">some image</div> 
<div id="E"><p style="text-align:left;">
<form method="GET" action="http://localhost/punk.1/signup/adduser.php" name="sigup" id="sigup" onsubmit="return validation();"
style="border-radius:8px;">
1.First Name:
<input type="text" name="firstname" id="X" maxlength="10"  />

&nbsp &nbsp &nbsp &nbsp &nbsp 
<!--2.Middle Name: <input type="text" name="middle name" id="X">
&nbsp &nbsp &nbsp-->   
2.Last Name:<input type="text" name="lastname" id="X" maxlength="10"></br></br>
<p style="padding-left:100px;"><!--4.Date of Birth:
<input type="text" name="dobd" id="X" style="width:35px;">
&nbsp &nbsp &nbsp  
<input type="text" name="dobm" id="X" style="width:35px;">
&nbsp &nbsp &nbsp 
<input type="text" name="doby" id="X" style="width:80px;">

</br>
<!--5.Country:
<select name="country" id="dbox">
<option>Select an Option</option>
<option>India</option>
<option>Usa</option>
<option>Other</option>
</select>
</br></br>
6.E-Mail Address:<input type="text" name="email" id="X">
</br></br>-->

3.Username:<input type="text" name="uname" id="X" onblur="process();" maxlength="10"/><p id="change" style="display:inline;"></p>

</br></br>
4.Password:<input type="password" name="pword" id="X" maxlength="10"><p style="display:inline;margin:0px 0px 0px 20px;position:relative;top:-5px;"></p>
</br>
5.Confirm-Password:<input type="password" name="pword2" id="X" maxlength="10" onfocus="con_passA();" onblur="con_passB();"/><p style="display:inline;margin:0px 0px 0px 20px;position:relative;top:-5px;" name="con_pass" ></p>
</br> </br>
<!--10.Security question:<input type="text" name="first name" id="X">
</br></br>-->
<input type="submit" value="Join!" name="sub" id="join" 
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
this.style.left='-3px';" />
</form>
</p></p></div>
</body></html>