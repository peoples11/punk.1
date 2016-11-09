<?php
$host ='localhost';
$username='root';
$password='';
$database='users';
$conn=mysqli_connect($host,$username,$password,$database);
if (!mysqli_connect($host,$username,$password,$database)){
	die('notok');
}
?>