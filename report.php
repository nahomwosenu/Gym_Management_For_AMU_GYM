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
<link rel="icon" href ="image/logo.png">
<title>System Administrator</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php"><img src="image/logo.png" width="110px" height="100px"><img width="650px" height="100px" src="image/admin.png" ></a>
<div id="Menus">		
		<ul>
			<li ><a href="admin.php">Home</a></li>
			<li class="active"><a href="report.php">Genrate Report</a></li>
			<li ><a href="view_main't requested.php">Maintanance Requested</a></li>
			<li ><a href="newsand.php">Post News and Events</a></li>
			<li ><a href="deletenews.php">Delete News</a></li>
			<li><a href="logout.php" onClick="isConfirmlog();">Logout</a></li>
			
			
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="300px" src="image/gymimage.png">
</td>
</tr>
<tr>
<td valign="top" width="200px">
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Manage User Account</font></th>
</tr>
<tr>
<td>  <table border="0">
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="create.php">Create User Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="edit.php">Edit User Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="registerequ.php">Register Equipement</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="editequipment.php">Edit Equipement</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="adminchange.php">Change Password</a></td>
</tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Organization Report</h3></center></font>
<p>
<!-- Main Content-->
<center>
	<?php require('report2.php'); ?>
 <h2>Number of Total Users: <b> <?php echo getTotalUsers(); ?> </b> </h2>
 <h2>Number of Active Users: <b> <?php echo getActiveUsers(); ?></b></h2>
 <h2>Total Number of Students: <b><?php echo getUsers('student'); ?></b></h2>
 <h2>Total Number of Staffs: <b><?php echo getUsers('staff'); ?></b></h2>
 <h2>Total Number of Communities: <b><?php echo getUsers('community'); ?></b></h2>
 <h2>Total Number of Guests: <b><?php echo getUsers('guest'); ?></b></h2>
 <h2>Total Income: <b><?php echo getTotalIncome(); ?></b> birr</h2>
 <h2>Total Equipments: <b><?php echo getEquipment(); ?></b></h2>
 <h2>Total Aerobic equipments: <b><?php echo getEquipmentByType('erobics'); ?></b></h2>
 <h2>Total Volley Ball equipments: <b><?php echo getEquipmentByType('volleyball'); ?></b></h2>
 <h2>Total Fitness equipments: <b><?php echo getEquipmentByType('fitteness'); ?></b></h2>
 <h2>Total Bodymass equipments: <b><?php echo getEquipmentByType('bodymass'); ?></b></h2>
 <h2>Total Maintenance Requests: <b><?php echo getTotalMaintenanceRequests(); ?></b></h2>
</center>
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
