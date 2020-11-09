
<?php
         $to = "faeriemattins73191817@gmail.com";
         $subject = "This is an automated email regarding the course registration";
         
         $message = "Respected Sir. This Email is regarding the problems I have for the course registration. Kindly look into what I can do for the following semester.Thanking you  ";
         
         $header = "From:faeriemattins73191817@gmail.com \r\n";
         $header .= "Cc:faeriemattins.r2019@vitstudent.ac.in \r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script>alert('Email sent successfully!')</script>";
         }else {
            echo "<script>alert('Email could not be sent.')</script>";
         }

echo '<script type="text/JavaScript"> 
	function pageRedirect()
	{
		window.location.replace("iwp_home.php");
	}
	pageRedirect();
	</script>';
?>