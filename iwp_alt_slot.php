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

$ccode=$_SESSION['t_ccode'];

 $sql1= "select course_name from all_course1 where course_code= '$ccode'";
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
		<p style=" font-family:Century Gothic">Choose the slot you want to register under</p>
 	</div>
	<br>
	<div class="panel-body ">
		<form class="col-xs-12 text-center" method="post" action="iwp_alt_comp.php">
		


<?php
$link = mysqli_connect("localhost:3307","root","","crer1");

$ccode=$_SESSION['t_ccode'];

$sql="select slot1,slot2 from all_course1 where course_code='$ccode' group by slot1";
$result = mysqli_query($link, $sql);
$num_results = mysqli_num_rows($result);

echo '<table border="1" align="center">';
echo '<tr>
		<th>Slot</th>
		<th>Register</th>
</tr>';
for ($i=0;$i<$num_results;$i++)
 {
	$row = mysqli_fetch_array($result);
	$slot1=$row["slot1"];
	$slot2=$row["slot2"];

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
					goto end;	
							
				}			
			}
		}
	echo '<tr>';
		echo '<td>';
	if($row["slot2"]==NULL)
	{
        	echo  $slot1. "<br>";
	}
	else
	{
		echo $slot1. " + " . $slot2 . "<br>";
	}
	echo '</td>';
	echo '<td>';
	echo '<input type="radio" name="slot" value="'.$slot1.'" >';
	echo '</td>';
	echo '</tr>';
end:
		
}
echo '</table>';
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

