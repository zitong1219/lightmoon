<?php  
$delete_course = $_GET["delete_course"];
echo $delete_course;
$con=mysqli_connect("localhost","root","root");
$program_char = "utf8" ;
mysqli_set_charset( $con , $program_char );
mysqli_select_db($con,"db_mypage");
$sql="DELETE FROM grade_table WHERE Coursename='$delete_course'";
mysqli_query($con,$sql);
mysqli_close($con);
header('Refresh:0;url=gradetable.php');
?>