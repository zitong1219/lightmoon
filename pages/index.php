<?php  
session_start();
$_SESSION["login"]="";
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to Zitong`s Home</title>
<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
<audio controls="controls" src="../music/Melancholy.mp3" autoplay="true" loop="true" preload="auto"></audio>
<div>
	<p class="welcome_title">Welcome to Zitong`s Homework</p>
</div>

<div class="pagebox_area">
	<div class="pagebox_center_control">
		<div class="page_choose">
			<div class="page_photo">
				<a href="./login.php"><img src="../icon/login.png">管理员登陆</a>
			</div>
		</div>
		<div class="page_choose">
			<div class="page_photo">
				<a href="./homepage.php"><img src="../icon/tourist.png">游客登陆</a>
			</div>
		</div>
		<div class="page_choose">
			<div class="page_photo">
				<a href="./register.php"><img src="../icon/register.png">注册口令</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>