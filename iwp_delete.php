<?php

$link = mysqli_connect("localhost:3307","root","","crer1");


session_start();
$reg_no=$_SESSION['t_reg_no'];


$info=$_POST['code'];
$info = stripcslashes($info);
$info = mysqli_real_escape_string($link, $info);
$sql= "select * from timetable_$reg_no where course_no= '$info'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
$course_code=$row["course_code"];
$course_name= $row["course_name"];
$faculty_name= $row["faculty_name"];
$course_no=$row["course_no"];


$ins="UPDATE timetable_$reg_no SET course_code=NULL, course_name=NULL, faculty_name=NULL, course_no=NULL  WHERE course_no='$course_no' ";
$v=mysqli_query($link,$ins);
$ins1="UPDATE all_course1 SET seat_avl=seat_avl+1 WHERE s_no='$course_no' ";
$v1=mysqli_query($link,$ins1);
echo '<script> alert("Course Deleted Successfully!"); </script>';

echo '<script type="text/JavaScript"> 
	function pageRedirect()
	{
		window.location.replace("iwp_view.php");
	}
	pageRedirect();
	</script>';
?>