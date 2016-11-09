<?php
require 'F:/xampp/htdocs/punk.1/inc files/conn_db.inc.php';

session_start();
if(!isset($_SESSION['user_id'])||empty($_SESSION['user_id'])){
	header("Location: http://localhost/punk.1/index.php");
}
if(isset($_FILES['profilepic'])){
	if($_FILES["profilepic"]["type"] =="image/jpeg" && $_FILES['profilepic']["size"]<1048576){
		$chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$rand_dir_name=substr(str_shuffle($chars),0,15);
		mkdir("userdata/profile_pics/$rand_dir_name");
		if(file_exists("userdata/profile_pics/$rand_dir_name/".$_FILES["profilepic"]["name"])){
			echo $_FILES["profilepic"]["name"]."Already Exists";
		}else{
			$name=$_FILES["profilepic"]["name"];
			move_uploaded_file($_FILES["profilepic"]["tmp_name"],"userdata/profile_pics/$rand_dir_name/".$_FILES["profilepic"]["name"]);$var1=$_SESSION['user_id'];
			$pic_query1="UPDATE `ids&pwords` SET `profile_pic`='userdata/profile_pics/$rand_dir_name/$name' WHERE `id`=$var1";
			$query_run=mysqli_query($conn,$pic_query1);
			
		}
	}
}


?>


<p><h2>Upload pic here!!</h2></p>
<?php
$var1=$_SESSION['user_id'];
$pic_query ="SELECT `profile_pic` FROM `ids&pwords` WHERE `id`= $var1";
$query_run1=mysqli_query($conn,$pic_query);
$profile_pic=mysqli_fetch_assoc($query_run1);
if($profile_pic['profile_pic']=='' OR $profile_pic['profile_pic']==null){
	$def="userdata/profile_pics/default/default_pic.jpg";
	echo "<img ";
	echo "src=\"$def\" ";
	echo "width=\"200\" ";
	echo "/>";
}else{
	$dir=  $profile_pic['profile_pic'];
	echo "<img ";
	echo "src=\"$dir\" ";
	echo "width=\"200\" ";
	echo "/>";
}
?>


<form action="" method="POST" enctype="multipart/form-data">
<br/><input type="file" name="profilepic" /><br/><br/>
<input type="submit" name="uploadpic" value="upload"/>
</form>