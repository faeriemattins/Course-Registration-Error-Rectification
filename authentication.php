<?php

$con=mysqli_connect("localhost:3307","root","","crer1");

session_start();
$_SESSION['t_reg_no']=$_POST['regno'];

$username= $_POST['regno'];
$password=$_POST['passcode'];

 $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
     
        $sql = "select * from student3 where reg_no = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
	$name=$row['name'];
	$_SESSION['t_name']=$name;
        $count = mysqli_num_rows($result);  
          
if($count == 1)
{  
  	echo '<script type="text/JavaScript"> 
	function pageRedirect()
	{
		window.location.replace("iwp_home.php");
	}
	pageRedirect();
	</script>';
}  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   


?>