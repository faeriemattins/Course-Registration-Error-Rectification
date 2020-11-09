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
.center 
{
height: 700px;
width:100%;	
}
.buttonx
{
	background-color: #674a40;
  	color: white;
  	padding: 15px 32px;
  	text-align: center;
	border: none;
  	text-decoration: none;
  	display: inline-block;
  	font-size: 14px;		
  	margin: 4px 2px;
  	cursor: pointer;
	border-radius: 12px;
}
.header1
{
height: 150px;
}
button{
transition-duration: 0.4s;
cursor: pointer;
}
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}


.button2 {
  background-color: #a8f0c4; 
  color: black; 
  
}

.button2:hover {
  background-color: #8bf527;
  color: black;
}

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
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
height:250px;
align:center;
width:50%;
padding: 20px;
}
hr {height:2px; border-width:0;color:gray;background-color:gray;}

			.TheoryHours{
			     background-color:#dbaef2;
			     font-size:12px;
			}
			.ColumnOneDays{
			     background-color:#d2cdd4;
				font-size:12px;
			}
			.LabHours{
			     background-color:#b08bf0;
				font-size:12px;
			}
			.TimetableContent{
			     background-color:#a8f0c4;
				font-size:12px;
			}
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}

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
<?php
session_start();
$reg_no=$_SESSION['t_reg_no'];
$name=$_SESSION['t_name'];
?>
<body>
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
	<h1 style="font-weight: bold;font-family:verdana;">Timetable</h1>
 </div>
<hr>
<div class="container">
	<form method="post" action="reset.php" name="rtform">
	<div id="option_buttons" class="horizontal-scroll-no-collapse text-center">     
		<input type="submit" name="resetBtn" class="btn  button3" value="Reset Timetable"/>
<hr>
	</div>
</div>
</section>


<section>
  <div class="container-fluid text-center noselect bg1 py-4 px-5">
 <div id="timetable" class="row table-responsive">
 <table class="center text-center"> 
<tr>
 <td class="ColumnOneDays" bgcolor="#bfb8bb">THEORY <br>HOURS</td>
 <td class="TheoryHours"> 08:00 AM <br>to <br>08:50 AM </td>
 <td class="TheoryHours"> 09:00 AM <br>to <br>09:50 AM </td> 
 <td class="TheoryHours"> 10:00 AM <br>to <br>10:50 AM </td>
 <td class="TheoryHours"> 11:00 AM <br>to <br>11:50 AM </td>
 <td class="TheoryHours"> 12:00 PM <br>to <br>12:50 PM </td>
 <td class="TheoryHours"></td>
 
<td width="30px" rowspan="7" class="ColumnOneDays" bgcolor="#bfb8bb"> 
 <strong><br><br><br><br><br><br>
 <br><br><br>L <br>U <br>N <br>C <br>H</strong>
</td> 

 <td class="TheoryHours"> 02:00 PM <br>to <br>02:50 PM </td>
 <td class="TheoryHours"> 03:00 PM <br>to <br>03:50 PM </td> 
 <td class="TheoryHours"> 04:00 PM <br>to <br>04:50 PM </td> 
 <td class="TheoryHours"> 05:00 PM <br>to <br>05:50 PM </td>
 <td class="TheoryHours"> 06:00 PM <br>to <br>06:50 PM </td>
 <td class="TheoryHours"> 07:00 PM <br>to <br>07:50 PM </td>
</tr> 

<tr>
 <td class="ColumnOneDays" bgcolor="#bfb8bb">LAB <br>HOURS</td> 
 <td class="LabHours"> 08:00 AM <br>to <br>08:45 AM </td>
 <td class="LabHours"> 08:46 AM <br>to <br>09:30 AM </td>
 <td class="LabHours"> 10:00 AM <br>to <br>10:45 AM </td>
 <td class="LabHours"> 10:46 AM <br>to <br>11:30 AM </td>
 <td class="LabHours"> 11:31 AM <br>to <br>12:15 AM </td>
 <td class="LabHours"> 12:16 AM <br>to <br>01:00 PM </td>
 <td class="LabHours"> 02:00 PM <br>to <br>02:45 PM </td> 
 <td class="LabHours"> 02:46 PM <br>to <br>03:30 PM </td>
 <td class="LabHours"> 04:00 PM <br>to <br>04:45 PM </td>
 <td class="LabHours"> 04:46 PM <br>to <br>05:30 PM </td>
 <td class="LabHours"> 05:31 PM <br>to <br>06:15 PM </td>
 <td class="LabHours"> 06:16 PM <br>to <br>07:00 PM </td>
</tr> 


<?php 
$link = mysqli_connect("localhost:3307","root","","crer1");
error_reporting(0);
$sql="select * from timetable_$reg_no";
$result=mysqli_query($link,$sql);

$day=array("MON","TUE","WED","THU","FRI");
for($j=0;$j<5;$j++)
{
	
echo'<tr> 
 	<td class="ColumnOneDays" bgcolor="#bfb8bb">' .$day[$j].'</td>';

	for($i=1;$i<=12;$i++)
	{
		$row=mysqli_fetch_array($result);
		$course_code=$row['course_code'];
		$a=$row['slot1'];
		$b=$row['slot2'];
		if($a=="NIL" && $b=="NIL")
		{$a=" "; $b=" ";}
		else if($a=="NIL")
		{$a=" ";}
		else if($b=="NIL")
		{$b=" ";}
		else
		{$a.="/";}
		if($course_code==NULL)
			echo '<td class="TimetableContent button button2"> '.$a,$b.' </td>';
		else
			echo '<td class="TimetableContent button button2" style="background-color:#8bf527;">'.$a,$b.' <br>' .$course_code. '</td>';
	}
echo '</tr>';
}
?>

  </table>
 </div>
 </div>
</section>



</body>
</html>

