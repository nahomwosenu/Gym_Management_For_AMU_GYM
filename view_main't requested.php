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
<title>Maintenance Request</title>
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='view_main't requested.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
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
			<li ><a href="report.php">Genrate Report</a></li>
			<li class="active"><a href="view_main't requested.php">Main't Requested</a></li>
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
<font color="#336699"><center><h3>Maintanance Request page!</h3></center></font>
<p>
<!-- Main Content-->
<br>
<?php		
			$av=mysql_query("select *from maintenance where status='unread'");
			$countav=mysql_num_rows($av);			
			echo 'You have &nbsp;<font color="red" >'.$countav. '&nbsp; Maintanance Requested.</font>' ;
			echo"<br><br>";
			?>
<table align='center' style='width:650px;border-radius:15px;border:1px solid #000000; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);'>
<tr>
<th style='height:30px;	text-align:center;color:#000;	font-weight:bold;background-color:#000000;'><font color='white' size='2'>Name</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#000000;'><font color='white' size='2'>Email</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#000000;'><font color='white' size='2'>Date</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#000000;'><font color='white' size='2'>Status</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#000000;'><font color='white' size='2'>Open</th>
<th style='height:30px;	text-align:center; color:#000;	font-weight:bold;background-color:#000000;'><font color='white' size='2'>Delete</th>
</tr>  
<?php
$result = mysql_query("SELECT * FROM maintenance ORDER BY m_id DESC");
$count=mysql_num_rows($result);
echo"<tr><td>";
if($count==0)
{
echo"<font color='red'>No entry!</font>";
}
echo"</td></tr>";
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['m_id'];
$name=$row['fname'];
$email=$row['email'];
$date=$row['date'];
$content=$row['message'];
$status=$row['status'];
?>
<tr>
<td><img src="img/bul.jpg" width="10px">&nbsp;<?php echo $name;?></td>
<td><?php echo $email;?></td>
<td><?php echo $date;?></td>
<?php 
if($status=='unread')
{
print("
<td style='height:30px;	color:red;	text-align:center;'>unread</td>");
}
else
{
print("
<td style='height:30px;	color:blue;	text-align:center;'>read</td>");
}
?>	
						<?php
						print("
		<td style='height:30px;'><a href = 'open_com.php?key=".$ctrl."'>Open</a></td>
		<td style='height:30px;' align = 'center' width = '1'><a href = 'delect_com.php?key=".$ctrl."'><img width='15px' height='15px' src = 'image/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>
		");?>
		</tr>
<?php
  }
print( "</table><br><br><br>");
mysql_close($conn);
?>
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
