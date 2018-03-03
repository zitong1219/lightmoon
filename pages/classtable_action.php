<?php
$changed_classname_array=$_POST["new_classname"];
echo $changed_classname_array[1];
$fommer_classname_array_str=$_COOKIE['fommer_classname_array'];
$fommer_classname_array=unserialize($fommer_classname_array_str);

$con=mysqli_connect("localhost","root","root");
mysqli_query($con, "SET NAMES UTF8");
$program_char = "utf8" ;
mysqli_set_charset( $con , $program_char );
mysqli_select_db($con,"db_mypage");
for ($i=0; $i < sizeof($changed_classname_array) ; $i++) { 
	if ($changed_classname_array[$i]!=$fommer_classname_array[$i]) {
		echo $i;
		$sql="UPDATE class_table SET ClassName='$changed_classname_array[$i]' WHERE timeId='$i'";
		mysqli_query($con,$sql);
	}
}
echo $fommer_classname_array[1];
mysqli_close($con);
header('Refresh:0;url=classtable.php');
?>