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

.box{
box-shadow:10px 10px 5px #888888; 
border-radius: 10px;
padding: 50px;
margin-left: 425px;
width: 300px;
}
input[type=submit] {
  width: 100%;
  background-color: #674a40;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
			
</style>
<body oncontextmenu="return false;">
		<div class="bg3" id="intro-section">		
		<div class="" id="page-wrapper">
			<header class="header1" >
				<div class="container">
				<div class="logo" style="position:relative; left:75px; bottom:25px">
					<img src="vit_logo.png" alt="User Image" width="300" height="175" />
				</div>
				<div class="header" style="color:white; position:relative; left:750px; bottom:170px"> 
					
			   		<h1>V-TOP</h1> <h3>COURSE REGISTRATION </h3>
			   		
			   		
			   	</div>
			   	</div>
		</header
</div>
</div>
</main>
<section class="py-5 bg1 text-center">
<div class="container ">
<div class="justify-content-center align-items-center">
<div class="box bg2" id="intro section">
<h3>STUDENT LOGIN</h3><br>
<form name="regForm" action="authentication.php" onsubmit="return validateForm()" method="POST">
<label for="register_no">Registration no.:</label>
<input type="text" name="regno" pattern="[0-9]{2}[A-Z a-z]{3}[0-9]{4}" required>
<br>
<label for="password">Password:</label>
<input type="password" name="passcode"/>
<br>
<input type="submit" value="Login"></input>
</form>
</div>
</div>
</div>
</section>
</main>

<script>
function validateForm() 
{ 
var regno=document.forms["regForm"]["rego"].value;
var passcode=document.forms["regForm"]["passcode"].value;

if(regno==" " || regno.length>9)
{
 alert('Please enter a valid Registration number');
 return false;
}

if(/^(?=.*\d)(?=.*[A-Z]).{6,20}$/.test(passcode)) 
{ 
return true;
}
else
{ 
alert('Please fill a passwrod that contains atleast 6 to 20 charaters which contain at least one numeric digit and one uppercase.')
return false;
}
}
</script>

</body>
</html>
