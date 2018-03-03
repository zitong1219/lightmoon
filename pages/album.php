<?php
session_start();
$if_login=$_SESSION["login"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My class table</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/album.css">
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
            <li><a href="./classtable.php">课表</a></li>
            <li class="active"><a href="./album.php">相册</a></li>
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
<h1 id="title">相册</h1>

<?php
   $addr="../upfile/";
   $dir=dir($addr);
   while ($file_name=$dir->read()){
     if ($file_name=="." or $file_name==".."){
       }else{
        echo "<img src=".$addr.$file_name." height=100>&nbsp;&nbsp;";
        }
   }
?>
<br>
<br>
<?php  
  if ($if_login=="YES") {
    printf ("

<form  enctype=\"multipart/form-data\" action=\"upload.php\" method=\"post\">
  <table width=\"486\" height=\"103\" border=\"1\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#008080\" id=\"AutoNumber1\" style=\"border-collapse: collapse\">
    <tr bgcolor=\"#CCCCCC\">
      <td height=\"30\" colspan=\"2\" align=\"right\"><div align=\"center\" class=\"style2\">上传照片</div>      </td>
    </tr>
    <tr>
      <td width=\"103\" height=\"45\" align=\"right\"><div align=\"center\"><span class=\"style1\">*</span>照片上传地址：</div></td>
      <td width=\"377\" height=\"45\"><input type=\"file\" name=\"file_name\">
      （大小〈2M 为宜）</td>
    </tr>
    <tr>
      <td height=\"33\" align=\"right\" colspan=\"2\">
      <p align=\"center\"><input type=\"submit\" value=\"上传\" name=\"add\">
        &nbsp;&nbsp;&nbsp;&nbsp;<input type=\"reset\" value=\"重置\" name=\"B2\"></td>
    </tr>
  </table>
</form>

    ");
  }

?>


</body>