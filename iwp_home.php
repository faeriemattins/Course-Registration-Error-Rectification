
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
.box{
box-shadow:10px 10px 5px #888888; 
border-radius: 10px;
padding: 50px;
margin-left: 380px;
width: 400px;
height: 375px;
}

input[type=radio] {
    border: 0px;
    width: 70%;
    height: 1.0em;
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
.btn
{
	background-color: #17c234;
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

.bgg
{
background-color:#ed8561;
padding:20px;
border-radius: 12px;
}
			
</style>


<body oncontextmenu="return false;" class="bg1">

		<div class="bg" id="intro-section" >		
		<div class="" id="page-wrapper">
			<header class="header1" >
				<div class="container">
				<div class="logo" style="position:relative; left:75px;">
					<img src="vit_logo.png" alt="User Image" width="270" height="175" />
				</div>
				<div class="header" style=" position: relative; left:480px; bottom:60px">
				<a href="http://localhost/iwp_project/iwp_home.php" target="_blank" style="color:white;">| Home |</a>
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
echo '<div class="container2">
	<div class="iconDetails" >
		<img style="position:relative; left:1000px;" src="id.png" alt="User Image" width="26" height="26" />
	</div>
	<div style="margin-left:60px;">';
	
echo '<p style=" font-weight: 900;" class="text-right">'.$reg_no.'-'.$name.'</p>';
echo '</div>';
echo '</div>';

?>
		
	



<section class="py-5 bg1 ">

<div class="container">
<div class="justify-content-center align-items-center">
<br>
<div class="box bg2 text-center" id="intro section">
<h3>CURRICULUM</h3><br>
<form action="iwp_timetable.php" method="post" name="acform">
<div class="row">
<div class="col-lg-6 text-center text-lg-left">
<label for="Programme_Core">Programme Core</label>
</div>
<div class="col-lg-6 text-center">
<input type="radio" name="ac" value="pc"></input>
</div>
<br>
<div class="col-lg-6 text-center text-lg-left">
<label for="University_Core">University Core</label>
</div>
<div class="col-lg-6 text-center">
<input type="radio" name="ac" value="uc"></input>
</div>
<br>
<div class="col-lg-6 text-center text-lg-left">
<label for="Programme_Elective">Programme Elective</label>
</div>
<div class="col-lg-6 text-center">
<input type="radio" name="ac" value="pe"></input>
</div>
<br>
<div class="col-lg-6 text-center text-lg-left">
<label for="University_Elective">University Elective</label>
</div>
<div class="col-lg-6 text-center">
<input type="radio"  name="ac" value="ue"></input>
</div>
</div>
<br>
<input type="submit" class="buttonx1" name="go" value="Submit"></input>
</form>
</div>
</div>
</div>

<br>

<div class="container bgg">
<h3>Facing any problem?</h3>
<p>If you face any problem during the course registration, click on the email button to send mail to your respective HOD and Dean of academics.</p>
<form action = "email.php">
<input class="btn" type="submit" name="email" value="Send Email" >
</div>
</section>
</main>



</body>
</html>


