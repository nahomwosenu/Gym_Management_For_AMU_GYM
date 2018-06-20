<?php
include("connection.php");
session_start();
if(isset($_SESSION['member_id']))
 {
 $mail=$_SESSION['member_id'];
 }
 else 
 {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="image/logo.png"/>
<title>Gym Trainer Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="apo.php"><img src="image/logo.png" width="110px" height="100px"><img width="700px" height="100px" src="image/trainee.png" ></a>
<div id="Menus">		
		<ul>
			<li ><a href="trainee.php">Home</a></li>
			<li ><a href="notification.php">Notification</a></li>
			<li class="active"><a href="feedback.php">feedback</a></li>
			<li><a href="logout.php" >Logout</a></li>
		</ul>
</div>
</p>
</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="300px" src="image/trainee1.JPG">
</td>
</tr>
<tr>
<td valign="top" width="200px">
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Addittional Task</font></th>
</tr>
<tr>
<td>  <table border="0">
<link href="css/stylesheet1.css" rel="stylesheet" type="text/css" media="screen" />
</style>
</head>
<body>
<div class="dropdown">
<img src="image/bullet.png" width="20px">&nbsp;<button onclick="myFunction()" class="dropbtn">View Trainning</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="vtext.php">Text</a>
    <a href="vaudio.php">Audio</a>
    <a href="vvideo.php">Video</a>
  </div>
</div>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</tr>
<tr>
<td>  
<img src="image/bullet.png" width="20px">&nbsp;<a href="changepassword.php">Change Password</a></td>
</tr>
<tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Gym Trainee Feedback Form!!</h3></center></font>
<p>
<!-- Main Content-->
<script type='text/javascript'>
function formValidation(){
//assign the fields
        
		var email=document.getElementById('email');
		var fname = document.getElementById('fname');
	var message = document.getElementById('message');
	if(emailValidator(email,"check your E-mail format")){
if(lengthRestriction(fname, 5, 25,"for your full name")){
if(lengthRestriction(message, 3, 100,"for your comment")){


	return true;
	}
	}
	}	
return false;		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
	<div style="width:480px; height:350px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="feedback.php" onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Submit Feedback</font></strong></div>
 </div>
 <?php
 if(isset($_POST['sent']))
 {
 $date=date("d/m/Y");
$sql="INSERT INTO feedback (fname,email, message,date,status)
VALUES
('$_POST[fname]','$_POST[email]','$_POST[com]','$date','unread')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
		 echo'  <p class="success">Your comment/feedback has been Sent successfuly!</p>';
         echo' <meta content="5;feedback.php" http-equiv="refresh" />'; 
		 }
mysql_close($conn)
?>
  <table width="480px" valign="top" align="center" border="0">
  
  <tr>
	       <td class='para1_text' width="160px"><font color="red">*</font> Your Full Name:</td>
		   <td><input type="text" name="fname" id="fname" required x-moz-errormessage="Enter Your Full Name" ></td>
	      </tr>
		 <tr>
	       <td class='para1_text'><font color="red">*</font> Email Address:</td>
		   <td><input type="text" name="email" id="email" required x-moz-errormessage="Enter your Email"></td>
	     </tr>
  <tr>
	       <td class='para1_text'><font color="red">*</font> Comment:</td>
		   <td><textarea rows="6" cols="30" align="center" name="com" id="message" placeholder='Write your comment/feedback here' required x-moz-errormessage="Enter Message"></textarea></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" class="button_example" name="sent" value="Send"/></td>
  </tr>
</table> 
  </form>
  <br><br>
<!--End of main content-->
</td>
</tr>
<tr>
<td align="center" height="30px" style="border:1px solid #3366CC; background-color:black" colspan="2">
<font color="white" face="arial" size="2px">AMU &copy;&nbsp;2018&nbsp;All Copy Right Reserved</font></td>
</tr>
</table>
</center>
</body>
</html>
