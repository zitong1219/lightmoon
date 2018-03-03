<?php  
session_start();
$if_login=$_SESSION["login"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Welcome</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
        	<li class="active"><a href="./homepage.php">学生介绍</a></li>
            <li><a href="./gradetable.php">学生成绩</a></li>
            <li><a href="./classtable.php">课表</a></li>
            <li><a href="./album.php">相册</a></li>
            <?php  
                if ($if_login=="YES") {
                    printf("<li><a href=\"./logout.php\">退出登录</a></li>");
                }else{
                    printf("<li><a href=\"./login.php\">管理员登录</a></li>");
                }
            ?>
        </ul>
    </div>
    </div>
</nav>

	<h1 id="title">学生介绍</h1>
	<div class="production_area">
	<div class="information">
        <h3>基本信息</h3>
        <ul>
         <li>姓名：易籽彤</li>
         <li>学校：北京邮电大学</li>
        </ul> 
    </div>
    <div class="avatar">
        <h3>学生头像</h3>
        <img src="../pic/pic_head">
    </div>
    <br>
    
    
        <h3>联系方式</h3>
        <ul class="share-group">
            <li>邮箱：1223567@qq.com</li>
            <li>QQ：994325764</li>
            <li>联系电话：13224355432</li>
        </ul>
        <div class="copy">
            &copy;易籽彤（班级2014211103/学号2014210088）web期末大作业
        </div>

	</div>
</body>
</html>
