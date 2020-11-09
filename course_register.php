<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="style.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</head>
<style type="text/css">

.header1
{
height: 150px;
}			
table {
 width: 85%;
 border-collapse: collapse;
}
th {
 height: 50px;
text-align: center;
background-color:#e8dfd3;

}
td
{
padding:10px;
text-align: center;
}


table, td, th {
  border: 1px solid black;
}
tr:nth-child(even) {background-color:#b87442; color:white;}
tr:nth-child(odd) {background-color: #d1bbab;}

input[type=radio] {
    	border: 0px;
    	width: 70%;
    	height: 1.0em;
      	margin: 2px -30px 0 -20px;
}

.buttonx1
{
	background-color: #674a40;
	color: white;
	padding: 10px 25px;
	text-align: center;
	border: none;
	text-decoration: none;
	display: inline-block;
	font-size: 14px;		
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 12px;
}

.panel{
height:1000px;
width:100%;
padding: 20px;
}
hr {height:2px; border-width:0;color:gray;background-color:gray;}

 .iconDetails {
 margin-left:0px;
float:left; 
height:40px;
width:40px; 
} 

.container2 {
    width:100%;
    height:auto;
    padding:6px;
}
			
</style>


<body oncontextmenu="return false;" >
		
<div class="bg" id="intro-section" >		
		<div class="" id="page-wrapper">
			<header class="header1" >
				<div class="container">
				<div class="logo" style="position:relative; left:75px;">
					<img src="vit_logo.png" alt="User Image" width="270" height="175" />
				</div>
				<div class="header" style=" position: relative; left:470px; bottom:60px">
				<a href="http://localhost/iwp_project/iwp_home.php"  style="color:white;">| Home |</a>
				<a href="http://localhost/iwp_project/iwp_view.php" style="color:white;">View |</a>
				<a href="http://localhost/iwp_project/timetable.php" style="color:white;">Timetable |</a>
				</div>

				<div class="header" style="color:white; position:relative; left:750px; bottom:170px"> 
					
			   		<h1>V-TOP</h1> <h3>COURSE REGISTRATION </h3>
			   		
			   		
			   	</div>
				<div class="header" style="color:white; position:relative; left:570px; bottom:220px"> 
	
	   				<div class=" text-center">
					<button type="button" class="buttonx1" onclick="location.href = 'http://localhost/iwp_project/iwp_login.php';">Logout</button>
					</div>
			   	</div>
	
	</header>
	</div>
<?php

session_start();
$reg_no=$_SESSION['t_reg_no'];
$name=$_SESSION['t_name'];
echo '<div class="container2 bg1">
	<div class="iconDetails" >
		<img style="position:relative; left:1000px;" src="id.png" alt="User Image" width="26" height="26" />
	</div>
	<div style="margin-left:60px;">';
	
echo '<p style=" font-weight: 900;" class="text-right">'.$reg_no.'-'.$name.'</p>';
echo '</div>';
echo '</div>';

?>


		
<section class="text-center py-5 bg1">
 <div class="container">
	<h1 style="font-weight: bold;font-family:verdana;">Course Registration Page</h1>
 </div>
<hr>
<div class="container">
	<div id="option_buttons" class="horizontal-scroll-no-collapse text-center">  
		
	</div>


</div>
</section>


<?php

$link = mysqli_connect("localhost:3307","root","","crer1");

$info=$_POST['course'];
 $info = stripcslashes($info);
 $info = mysqli_real_escape_string($link, $info);


 $sql1= "select course_name from all_course1 where course_code= '$info'";
 $result1 = mysqli_query($link, $sql1);
$row1 = mysqli_fetch_array($result1);
$course_name= $row1["course_name"];

?>

<section class="bg1">
<div class="container py-1">
 <div id="slot-sel-area" class="row">
 <div class="panel panel-primary text-center bg2">
 	<div class="panel-heading text-center">
 		<h3 style=" text-decoration: underline; font-family:Century Gothic"><?php echo $course_name ?></h3>
 	</div>
	<br>
	<div class="panel-body ">
		<form class="col-xs-12 text-center" method="post" action="iwp_timetable_auth2.php">
		

<?php

$year=$_SESSION['year'];
$course_code_arr=str_split($info);
$y=$course_code_arr[3];

 $sum=0;
 $sql= "select * from all_course1 where course_code= '$info'";
 $result = mysqli_query($link, $sql);
 $num_results = mysqli_num_rows($result);
 for ($i=0;$i<$num_results;$i++)
 {
	$row = mysqli_fetch_array($result);
	$seat_avl=$row["seat_avl"];
	$sum=$sum+$seat_avl;
 }
 $sql_= "select * from all_course1 where course_code= '$info'";
 $result_ = mysqli_query($link, $sql_);
 $row_ = mysqli_fetch_array($result_);
 $credit=$row_["credit"];
 if($sum==0)
 {
	if($year!=$y)
	{
		$_SESSION['t_credit']=$credit;
		echo '<script>alert("No Seats Available....Your being redirected to optional course page!")</script>';
		echo '<script type="text/JavaScript"> 
		function pageRedirect()
		{
			window.location.replace("iwp_alt_course.php");
		}
		pageRedirect();
		</script>';
	}
	else
	{
		$_SESSION['t_ccode']=$info;
		echo '<script>alert("No Seats Available....Your being redirected to compulsory course page!")</script>';
		echo '<script type="text/JavaScript"> 
		function pageRedirect()
		{
			window.location.replace("iwp_alt_slot.php");
		}
		pageRedirect();
		</script>';

	}
 } 

 $sql= "select faculty_name,slot1,slot2,s_no,seat_avl,credit from all_course1 where course_code= '$info'";
 $result = mysqli_query($link, $sql);  

 if ($result) 
 {
	
	$num_results = mysqli_num_rows($result);
	echo '<table border="1" align="center">';
	echo '<tr>
			<th>Faculty Name</th>
			<th>Slot</th>
			<th>Credits</th>
			<th>Register</th>
	     </tr>';
	
	
								for ($i=0;$i<$num_results;$i++) 
								{
       									$row = mysqli_fetch_array($result);
									$faculty_name= $row["faculty_name"];
									$slot1= $row["slot1"];
									$slot2= $row["slot2"];
									$s_no=$row["s_no"];
									$seat_avl=$row["seat_avl"];
									$credit=$row["credit"];

									echo '<tr>';
									echo '<td>';
									echo $row['faculty_name'];
									echo '</td>';
									echo '<td>';
									if($row["slot2"]==NULL)
									{
        									echo  $row["slot1"];
									}
									else
									{
			
       										echo $row["slot1"]. " + " . $row["slot2"] . "<br>";
									}
									echo '</td>';
									echo '<td>';
									echo $row['credit'];
									echo '</td>';
									echo '<td>';
									if($row["seat_avl"]==0)
									{
										echo 'FULL';
									}
									else
									{
										
										echo '<input type="radio" name="slot" value="'.$s_no.'">';
										echo '<label for="seat">'.$row['seat_avl'].'</label>';
										
									}
									echo '</td>';
									echo '</tr>';
        								
    								}
	echo '</table>';
	
 }
 else 
 {
    echo "0 results";
 }  
?>

<br> 
<input type="submit" class="buttonx1 " name="submit"></input>
</form>
</div>
</div>
</div>
</div>
</section>
</body>
</html>

