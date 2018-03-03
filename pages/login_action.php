<?php 
$u_name=$_POST["name"];
if ($u_name!="") {
	$u_password=$_POST["password"];
	$con=mysqli_connect("localhost","root","root");
	mysqli_query($con, "SET NAMES UTF8");
	$program_char = "utf8" ;
	mysqli_set_charset( $con , $program_char );
	mysqli_select_db($con,"db_mypage");
	$sql="SELECT * FROM user_manage WHERE Username='$u_name'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)<1){
		echo "该用户不存在!请<a href=\"login.php\">重新登陆</a>!";
		}else{
		$info=mysqli_fetch_array($result,MYSQL_ASSOC);
		if($info['Password']!=$u_password){
		echo "密码输入错误!请<a href=\"login.php\">重新登陆</a>!";
		}else{
		session_start();
		$_SESSION["login"]="YES";
		header('Refresh:0;url=homepage.php');
		}
	}
}
?>
