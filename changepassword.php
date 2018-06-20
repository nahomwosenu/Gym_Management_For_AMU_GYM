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
 <?php

$m_id=$_SESSION['member_id'];
$result=mysql_query("select * from member where member_id='$m_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$oldpassword=$row['password'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="image/logo.png"/>
<title>Gym Trainee page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">

<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="trainee.php"><img src="image/logo.png" width="110px" height="100px"><img width="700px" height="100px" src="image/trainee.png" ></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="trainee.php">Home</a></li>
			<li ><a href="notification.php">Notification</a></li>
			<li><a href="feedback.php">feedback</a></li>
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
<th bgcolor="black" style="border-radius:5px"><font color="white">Additional Links</font></th>
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
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="changepassword.php">Change Password</a></td>
</tr>
<tr>
<td>  
</tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
</table>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Change Password!</h3></center></font>
<p>
<?php
if(isset($_POST['changepassword']))
{
$oldpass = $_POST['old_password'];
$newpass = $_POST['new_password'];
$confirmpass = $_POST['confirm_password'];
if($oldpassword!==$oldpass)
{
echo'  <p class="wrong">Incorrect old password!</p>';
echo' <meta content="5;changepassword.php" http-equiv="refresh" />'; 
}
else
{
if($newpass!=$confirmpass){
echo'  <p class="wrong">New Password and Confirm Password does not Match!</p>';                                
echo' <meta content="5;changepassword.php" http-equiv="refresh" />';
		   }       
		   else
		   {
  $query="update member set password='{$newpass}' where member_id='{$m_id}'";
        $result=mysql_query($query);
		 echo'  <p class="success"> Your password has been changed successfuly!</p>';
         echo' <meta content="5;changepassword.php" http-equiv="refresh" />';  
   }
   }
}
?>
 <form id="form1" name="login" method="POST" action="changepassword.php" onsubmit="return validateForm()">
  <table style="border:1px solid #336699;border-radius:15px" width="350" align="center">
  <tr>
    <td colspan="2"><div style="font-family:Arial, Helvetica, sans-serif; color:#FF0000; font-size:12px;">
</div></td>
  </tr>  
  <br><br><br>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> Old Password:</td>
		 <td><input type="password" name="old_password" required x-moz-errormessage="Enter Old password" ></td>
	     </tr>
         <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> New Password:</td>
		 <td><input type="password" name="new_password" required x-moz-errormessage="Enter New Password" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red">*</font> Confirm Password:</td>
		 <td><input type="password" name="confirm_password" required x-moz-errormessage="Re-type your Password" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" name="changepassword" value="Change Password" class="button_example"/></td>
  </tr>
</table> <br><br><br>
  </form>
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