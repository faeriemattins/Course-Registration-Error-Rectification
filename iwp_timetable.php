<?php
session_start();
?>


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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

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

  select {
        width: 140px;
        height: 35px;
        padding: 5px 35px 5px 5px;
        font-size: 18px;
        border: 2px solid #ccc;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background: url("/uploads/media/default/0001/02/f7b4d3d2ba3fe1d8518e6e63d7740e1e73921abf.png") 96% / 15% no-repeat #eee;
      }

			
</style>


<body oncontextmenu="return false;" >

	
<div class="" id="page-wrapper">
	<header class="header1" >
		<div class="container">
		<div class="logo" style="position:relative; left:75px;">
			<img src="vit_logo.png" alt="User Image" style="width:270px;height:180px" />
		</div>
		<div class="header" style=" position: relative; left:450px; bottom:60px">
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
$reg_no=$_SESSION['t_reg_no'];
$name=$_SESSION['t_name'];
$reg_no_arr=str_split($reg_no);
$x=$reg_no_arr[1];
if($x==0)
{
	$x=1;
}

if($x==9)
{
	$x=2;
}
if($x==8)
{
	$x=3;
}
if($x==7)
{
	$x=4;
}

$_SESSION['year']=$x;

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
	<h1 style="font-weight: bold;font-family:verdana;">Course Registration Portal</h1>
 </div>
<hr>
</section>

<section class="bg1">
<div class="container py-1">
 <div id="slot-sel-area" class="row">
 <div class="panel text-center bg2" style="position:relative; left:283px;background-color:#eb9252;" >
 	<div class="panel-heading text-center">
 		<h4>Add Courses To Timetable</h4>
 	</div>
	<div class="panel-body ">
		<form class="col-xs-12 text-center" method="post" action="course_register.php">
			<div class="row">
			<div class="form-group col-xs-12 col-sm-12 ">
				<?php

					error_reporting(0);

					$link = mysqli_connect("localhost:3307","root","","crer1");

					$info=$_POST["ac"];
					$info = stripcslashes($info);
					$info = mysqli_real_escape_string($link, $info);
					$_SESSION['t_curr']=$info;
					


					$sql = "SELECT course_code,course_name FROM all_course1 where s_no like '$info%' GROUP BY course_code;";

					$result = mysqli_query($link,$sql);
						if ($result) 
						{
					    		echo '<label for="inputCourseCode" class="control-label">Course code and course name:';
					   		echo '<select name="course" class="form-control selectpicker" data-style="btn-danger" multiple data-max-options="1" data-live-search="true">';
							echo '<option selected value="">----------------------------------select----------------------------------</option>';
							echo '<optgroup label="COMPULSORY">';
							/*echo '<option value="" style="font-weight:bold;">----------------------------------COMPULSORY----------------------------------</option>';*/
							$num_results = mysqli_num_rows($result);
							for ($i=0;$i<$num_results;$i++) 
								{
       									$row = mysqli_fetch_array($result);
        								$course_code = $row['course_code'];
									$course_name=$row['course_name'];
									$course_code_arr=str_split($course_code);
									$y=$course_code_arr[3];
									if($x!=$y)
									{
										continue;
									}
        								echo '<option value="'.$course_code.'" style="font-weight:bold;">' .$course_code,' - ',$course_name.'</option>';
    								}
							echo '</optgroup>';
							echo '<optgroup label="OPTIONAL">';
							/*echo '<option value=""style="font-weight:bold;">----------------------------------OPTIONAL----------------------------------</option>';*/
							$sql = "SELECT course_code,course_name FROM all_course1 where s_no like '$info%' GROUP BY course_code;";
							$result = mysqli_query($link,$sql);
							$num_results = mysqli_num_rows($result);
							for ($i=0;$i<$num_results;$i++) 
								{
       									$row = mysqli_fetch_array($result);
        								$course_code = $row['course_code'];
									$course_name=$row['course_name'];
									$course_code_arr=str_split($course_code);
									$y=$course_code_arr[3];
									if($x==$y)
									{
										continue;
									}
        								echo '<option value="'.$course_code.'">' .$course_code,' - ',$course_name.'</option>';
    								}
							echo '</optgroup>';		
    							echo '</select>';
    							echo '</label>';

						}

					mysqli_close($link);

				?>
				<div class=" text-center"><br>
					<button class="buttonx">Search</button>
				</div>

			</div>
			</div>
		</form>
	</div>
	

	
 </div>
 </div>
</div><br><br>
</section>

</body>
</html>

