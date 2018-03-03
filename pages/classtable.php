<?php
session_start();
$if_login=$_SESSION["login"];

$con=mysqli_connect("localhost","root","root");
mysqli_query($con, "SET NAMES UTF8");
$program_char = "utf8" ;
mysqli_set_charset( $con , $program_char );
mysqli_select_db($con,"db_mypage");
$query="SELECT * FROM class_table";
$result=mysqli_query($con,$query);
$classname_array=array();
while($info=mysqli_fetch_array($result)){
	$classname_array[]=$info['ClassName'];
}
$classname_array_str=serialize($classname_array);
setcookie('fommer_classname_array',$classname_array_str);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My class table</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/classtable.css">
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Welcome</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
        	<li><a href="./homepage.php">学生介绍</a></li>
            <li><a href="gradetable.php">学生成绩</a></li>
            <li class="active"><a href="./classtable.php">课表</a></li>
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

<div class="table_area">
	<form role="form" name="newClasstable" action="classtable_action.php" method="post">
	<table class="table" id="classtable" border="2" align="center" frame="void">
		<caption>课程表</caption>
		<tr>
			<th colspan="2"></th>
			<?php 
			$weekday=array('一','二','三','四','五','六','日');
			for ($w=0; $w < 7; $w++) { 
				printf("<th>星期%s</th>",$weekday[$w]);
			}
			 ?>			
		</tr>

			<?php 
			$noon = array('上午','下午');
			for ($i=1; $i <= 8; $i++) { 
				printf("<tr>");
				if (!(($i-1)%4)) {
					printf("<th rowspan=\"4\">%s</th>",$noon[$i/4]);
				}
				printf("<td>第%u节</td>",$i);
				for ($j=($i-1)*7; $j<$i*7 ; $j++) { 
					printf("<td><div class=\"fommer_classname\">%s</div><input name=new_classname[] class=\"form-control\" type=\"text\" value=\"%s\"></td>",$classname_array[$j],$classname_array[$j]);
				}
				printf("</tr>");				
			}			
			?>			
	</table>
	<?php  
		if ($if_login=="YES") {
			printf("
				<button type=\"button\" class=\"btn btn-success\" onclick=\"changeTable()\">修改</button>
					&nbsp;
				<input class=\"submit btn btn-warning\" type=\"submit\" name=\"save_table\" value=\"保存\">
			");
		}
	?>
	
	</form>	
</div>
	<script type="text/javascript" src="../js/classtable
	.js"></script>
</body>
</html>