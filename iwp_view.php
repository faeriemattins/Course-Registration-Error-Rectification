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
			
.buttonx1
{
	background-color:#674a40;
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

.buttonx2
{
	background-color:#ed073d;
	color: black;
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

hr {height:2px; border-width:0;color:gray;background-color:gray;}

table {
 width: 85%;
 border-collapse: collapse;
}
th {
 height: 50px;
text-align: center;
background-color:#e8dfd3;
color:black;
}
td
{
padding:10px;
text-align: center;
}


table, td, th {
  border: 1px solid black;
}

tr:nth-child(odd) {background-color:#b87442; color:white;}
tr:nth-child(even) {background-color: #d1bbab;}

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

<body oncontextmenu="return false;">

	
<div class="" id="page-wrapper">
	<header class="header1" >
		<div class="container">
		<div class="logo" style="position:relative; left:75px;">
			<img src="vit_logo.png" alt="User Image" style="width:270px;height:180px" />
		</div>
		<div class="header" style=" position: relative; left:460px; bottom:60px">
				<a href="http://localhost/iwp_project/iwp_home.php" style="color:white;">| Home |</a>
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
		<br>
	   	</div>
	</header
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
	<h1 style="font-weight: bold;font-family:verdana;">View Course</h1>
 </div>
<hr>
</section>

<section class="bg1 py-2"> 
<div class="container text-center ">

<?php

error_reporting(0);
$sum=0;
$sum1=0;
$link = mysqli_connect("localhost:3307","root","","crer1");

$sql="select course_code, course_name, faculty_name, course_no from timetable_$reg_no group by course_no";
$result=mysqli_query($link,$sql);

if($result)
{
$num_results = mysqli_num_rows($result);

for ($i=0;$i<$num_results;$i++)
{
$row = mysqli_fetch_array($result);
$course_code=$row["course_code"];
$course_name=$row["course_name"];
$faculty_name= $row["faculty_name"];
$course_no=$row["course_no"];

$sql1="select slot1,slot2,credit from all_course1 where s_no='$course_no'";
$result1=mysqli_query($link,$sql1);
$row1=mysqli_fetch_array($result1);
$slot1=$row1["slot1"];
$slot2=$row1["slot2"];
$credit=$row1["credit"];

if($course_code!= NULL)
{
	$sum=$sum+$credit;
	$sum1=$sum1+1;
}
}

}
echo '<h4 style="font-weight:bold;">Total Credits : ' .$sum.  '</h4>';
echo '<h4 style="font-weight:bold;">Number of Courses : ' .$sum1.  '</h4>';
echo '<br>';
?>

<table border='1' align="center">
<tr>
	<th>Course Code</th>
	<th>Course Name</th>
	<th>Faculty Name</th>
	<th>Slot1</th>
	<th>Slot2</th>
	<th>Credits</th>
	<th>Delete Course</th>
</tr>

<?php

error_reporting(0);


$link = mysqli_connect("localhost:3307","root","","crer1");

$sql="select course_code, course_name, faculty_name, course_no from timetable_$reg_no group by course_no";
$result=mysqli_query($link,$sql);

if($result)
{
$num_results = mysqli_num_rows($result);
echo '<form name="f1" method="POST" action="http://localhost/iwp_project/iwp_delete.php" >';

for ($i=0;$i<$num_results;$i++)
{
$row = mysqli_fetch_array($result);
$course_code=$row["course_code"];
$course_name=$row["course_name"];
$faculty_name= $row["faculty_name"];
$course_no=$row["course_no"];

$sql1="select slot1,slot2,credit from all_course1 where s_no='$course_no'";
$result1=mysqli_query($link,$sql1);
$row1=mysqli_fetch_array($result1);
$slot1=$row1["slot1"];
$slot2=$row1["slot2"];
$credit=$row1["credit"];

if($course_code!= NULL)
{
echo "<tr>";
	echo "<td>" .$course_code. "</td>";
	echo "<td>" .$course_name. "</td>";
	echo "<td>" .$faculty_name. "</td>";
	echo "<td>" .$slot1. "</td>";
	echo "<td>" .$slot2. "</td>";
	echo "<td>" .$credit. "</td>";
	echo '<td><button class=buttonx2 name="code" value="'.$course_no.'">Delete</button></td>';
echo "</tr>";
}
}

echo '</form>';

}


?>

</table>
<br><br>

</div>
</section>


</body>
</html>