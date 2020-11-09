<?php
$link = mysqli_connect("localhost:3307","root","","crer1");

$flag=0;

$s_no=$_POST["slot"];

session_start();
$_SESSION['s_no'] = $s_no;
$reg_no=$_SESSION['t_reg_no'];



$s_no = stripcslashes($s_no);
 $s_no = mysqli_real_escape_string($link, $s_no);
 $sql= "select * from all_course1 where s_no= '$s_no'";
 $result = mysqli_query($link, $sql); 
$row = mysqli_fetch_array($result);

	$course_code=$row["course_code"];
	$course_name=$row["course_name"];
	$faculty_name=$row["faculty_name"];
	$slot1=$row["slot1"];
	$slot2=$row["slot2"];
	$s_no=$row["s_no"];
	$credit=$row["credit"];

	$sql1="SELECT s_no, slot1, slot2, course_code from timetable_$reg_no";
	$result1 = mysqli_query($link, $sql1); 

		$num_results1 = mysqli_num_rows($result1);
		for ($j=0;$j<$num_results1;$j++)
		{
			$row1 = mysqli_fetch_array($result1);
			$tslot1=$row1['slot1'];
			$tslot2=$row1['slot2'];
			$tcourse_code=$row1['course_code'];
			if ( $tslot1==$slot1 || $tslot1==$slot2 || $tslot2==$slot1 || $tslot2==$slot2 )
			{
				if($tcourse_code!=NULL)
				{
					$flag=1;
					goto end;	
							
				}			
			}
		}

			$sql1="SELECT s_no, slot1, slot2, course_code from timetable_$reg_no";
			$result1 = mysqli_query($link, $sql1); 

		for ($j=0;$j<$num_results1;$j++)
		{
			$row1 = mysqli_fetch_array($result1);

			$ts_no=$row1['s_no'];
			$tslot1=$row1['slot1'];
			$tslot2=$row1['slot2'];
			$tcourse_code=$row1['course_code'];
			if ( $tslot1==$slot1 || $tslot1==$slot2 || $tslot2==$slot1 || $tslot2==$slot2 )
			{
				
				$ins="UPDATE timetable_$reg_no SET course_code='$course_code', course_name='$course_name', faculty_name='$faculty_name', course_no='$s_no', credit='$credit'  WHERE s_no='$ts_no' ";
				$v=mysqli_query($link,$ins);							
			}
		}


end:
if( $flag==1)
{
	echo '<script>alert("Slot Clash")</script>';
	echo '<script type="text/JavaScript"> 
	function pageRedirect()
	{
		window.location.replace("iwp_slot_clash.php");
	}
	pageRedirect();
	</script>';
}
else
{
	$ins1="UPDATE all_course1 SET seat_avl=seat_avl-1 WHERE s_no='$s_no' ";
	$v1=mysqli_query($link,$ins1);
	echo '<script>alert(" Record updated successfully!")</script>';
	echo '<script type="text/JavaScript"> 
	function pageRedirect()
	{
		window.location.replace("iwp_home.php");
	}
	pageRedirect();
	</script>';
}


mysqli_close($link);

 ?>