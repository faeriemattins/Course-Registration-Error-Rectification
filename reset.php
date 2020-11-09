<?php
        
	session_start();
	$reg_no=$_SESSION['t_reg_no'];
	$link = mysqli_connect("localhost:3307","root","","crer1");
	$sql1="SELECT DISTINCT course_no FROM timetable_$reg_no where course_no IS NOT NULL;";
	$result1= mysqli_query($link, $sql1); 
	$num_results1 = mysqli_num_rows($result1);
   	for ($j=0;$j<$num_results1;$j++)
	{
		$row1 = mysqli_fetch_array($result1);
		$c_no= $row1["course_no"];
		$sql2="UPDATE all_course1 SET seat_avl=seat_avl+1 WHERE s_no='$c_no' ";
		mysqli_query($link,$sql2);
	}
	    
    	$sql3= "UPDATE timetable_$reg_no SET  course_code=NULL, course_name=NULL, faculty_name=NULL, course_no=NULL, credit=NULL; ";
    	mysqli_query($link, $sql3); 
    	echo '<script>alert("Timetable has been reset")</script>'; 
	echo '<script type="text/JavaScript"> 
	function pageRedirect()
		{
			window.location.replace("timetable.php");
		}
		pageRedirect();
	</script>';

?>