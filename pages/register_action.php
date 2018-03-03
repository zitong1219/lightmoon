<?php
$user_name=$_POST["user_name"];
$user_pw=$_POST["Password1"];
$con=mysqli_connect("localhost","root","root");
$program_char = "utf8" ;
mysqli_set_charset( $con , $program_char );
$ok=mysqli_select_db($con,"db_mypage");
if(!$ok){
	mysqli_query($con,"CREATE DATABASE db_mypage");
	mysqli_select_db($con,"db_mypage");

	mysqli_query($con,
		"CREATE TABLE grade_table(
		Coursename varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci,
		Coursegrade int(6))"
	);

	mysqli_query($con,
		"CREATE TABLE user_manage(
		Username varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci,
		Password varchar(20))"
	);
	
	mysqli_query($con,
		"CREATE TABLE album_set(
		id int(4) unsigned NOT NULL auto_increment,
		name varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci,
		size varchar(50),
		type varchar(50),
		img MEDIUMBLOB,
		PRIMARY KEY (id))"
	);

	mysqli_query($con,
		"CREATE TABLE class_table
		(timeId int(6),
		ClassName varchar(30)) CHARACTER SET utf8 COLLATE utf8_general_ci"
	);
	
	for ($i=0; $i < 56; $i++) { 
		$sql="INSERT INTO class_table VALUE('$i','')";
		mysqli_query($con,$sql);
	}
}
$sql="INSERT INTO user_manage VALUE('$user_name','$user_pw')";
$excu=mysqli_query($con,$sql);
mysqli_close($con);
header('Refresh:3;url=login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>注册成功</title>
</head>
<body>
<h1>注册成功，正在跳转登录界面。（3秒）</h1>
</body>
</html>