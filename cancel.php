<?php

	session_start();
	$reg_no=$_SESSION['t_reg_no'];
	$link = mysqli_connect("localhost","root","","crer1");

  $x=$_POST['cancelBtn'];

  $sql12="UPDATE all_course1 SET seat_avl=seat_avl-1 WHERE s_no='$x'";
  mysqli_query($link, $sql12);

  $sql13="UPDATE all_course1 SET seat_tot=seat_tot-1 WHERE s_no='$x'";
  mysqli_query($link, $sql13);

	echo '<script type="text/JavaScript">
	function pageRedirect()
		{
			window.location.replace("iwp_home.php");
		}
		pageRedirect();
	</script>';

?>
