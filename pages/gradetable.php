<?php  
session_start();
$if_login=$_SESSION["login"];

$con=mysqli_connect("localhost","root","root");
$program_char = "utf8" ;
mysqli_set_charset( $con , $program_char );
mysqli_select_db($con,"db_mypage");
$query="SELECT * FROM grade_table";
$result=mysqli_query($con,$query);
$coursename_array=array();
$coursegrade_array=array();
while($info=mysqli_fetch_array($result)){
    $coursename_array[]=$info['Coursename'];
    $coursegrade_array[]=$info['Coursegrade'];
}
$course_num = sizeof($coursename_array);
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My class table</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/gradetable.css">
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
            <li class="active"><a href="gradetable.php">学生成绩</a></li>
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
<h2 id="title">成绩查询</h2>

<form role="form" name="newGradetable" action="gradetable_action.php" method="post">
<div class="input-group col-md-3" style="float: right;">  
       <input type="text" name="coursename" class="form-control"placeholder="请输入课程名" / >  
            <span class="input-group-btn">  
                <button class="btn btn-info" name="submitbtn" type="submit" value="搜索">搜索</button>  
            </span>  
</div> 
<div class="table_area">
<table class="table" id="gradetable" border="2" align="center" frame="void">
    <tr>
     <th>科目</th>
     <th>成绩</th>
     <?php  
        if ($if_login=="YES") {
            echo "<th>操作</th>";
        }
     ?>
    </tr>

    <?php  
    for ($i=1; $i <= sizeof($coursename_array); $i++) { 
            printf("
            <tr>
            <td>%s</td>
            <td>%s</td>
            ",$coursename_array[$i-1],$coursegrade_array[$i-1]);
            if ($if_login=="YES") {
                printf("<td><button id=\"%u\" type=\"button\" class=\"btn btn-danger\" onclick=\"deleteclass(this)\">删除</button></td>",$i);
            }
            printf("</tr>");
        }
    ?>
</table>  

<?php  
if ($if_login=="YES") {
    printf("
        <button type=\"button\" class=\"btn btn-success\" onclick=\"addClass()\">添加课程成绩</button>
        <input type=\"submit\" name=\"submitbtn\" class=\"submit btn btn-warning\" value=\"保存\">"
    );
}
?>


</form>

</div>
<script type="text/javascript" src="../js/gradetable.js"></script>
</body>
</html>