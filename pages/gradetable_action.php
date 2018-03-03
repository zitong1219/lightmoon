<?php
$operation=$_POST["submitbtn"];
$con=mysqli_connect("localhost","root","root");
$program_char = "utf8" ;
mysqli_set_charset( $con , $program_char );
mysqli_select_db($con,"db_mypage");
if($operation=='搜索'){
	$coursename=$_POST['coursename'];
	$sql="SELECT * FROM grade_table WHERE Coursename='$coursename'";
	$result=mysqli_query($con,$sql);
	$info=mysqli_fetch_array($result);
	$coursename=$info[0];
	$coursegrade=$info[1];
	echo "<script>alert($coursegrade)</script>";
	echo "<script>location.href='gradetable.php';
	</script>";

}elseif ($operation=='保存') {
	$new_course_array=$_POST["newcourses"];
	$new_grade_array=$_POST["newgrades"];
	echo sizeof($new_course_array);
	for ($i=0; $i < sizeof($new_course_array); $i++) { 
		$sql="INSERT INTO grade_table VALUE('$new_course_array[$i]','$new_grade_array[$i]')";
		mysqli_query($con,$sql);
	}
	mysqli_close($con);
	header('Refresh:0;url=gradetable.php');	
}
?>