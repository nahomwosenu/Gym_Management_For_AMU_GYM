<?php
include("connection.php");
session_start();
if(isset($_SESSION['id']))
 {
 $mail=$_SESSION['id'];
  
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
			<li class="active"><a href="admin.php">Home</a></li>
			<li ><a href="record.php">Genrate Attendace Report</a></li>
			<li ><a href="view_comment1.php">Maintanance Requested</a></li>
			<li ><a href="newsand.php">Post News and Events</a></li>
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
</table>  </td>
</td>
</tr>
<tr>
<td valign="top" width="220px">
<table style="border:1px solid #3366CC;border-radius:5px" width="220px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Date and Time</font></th>
</tr>
<tr>
<td>
</td>
</tr>
<tr>
<td>
</td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="220px">
<tr>
<th bgcolor="#000000" style="border-radius:5px"><font color="white">Arba Minch University</font></th>
</tr>
<tr><td>
</td></tr>
<tr>
<td>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Schedule</h3></center></font>
<p>
<!-- Main Content-->

<table align="center" style="width:650px;border-radius:15px;border:1px solid #336699;box-shadow:1px 1px 10px black;">
			<tr>
				<td>
						<form action="schedule.php" onsubmit='return formValidator()' method='POST'>
						<table>
<tr>
<td>
<font color="red">*</font><label>Day:</label>
</td>
<td>
<select name="day" required>
	<?php $CYS_query=mysql_query("select * from schedule")or die(mysql_error());
while($CYS_row=mysql_fetch_array($CYS_query)){
	?>
	<option><?php echo $CYS_row['day']; ?></option>
	<?php } ?>
	</select>
</td>&nbsp;&nbsp;
&nbsp;
<td>
<font color="red">*</font><label>Type of Gym:</label>
</td>
<td>
<select name="tgym" required>
<option>--select--</option>
<option value="erobics">Areobics</option>
<option value="volleyball">VolleyBall</option>
<option value="bodymass">BodyMass</option>
<option value="fitteness">Fitteness</option>
</select>
</td>

								<td><input type="submit" value="Search" name="search" style="cursor:pointer;" class="button_example"/></td></tr>
							</tr>
						</table>
					</form>
					<?php
					if(isset($_POST['search']))
 {
					$day=$_POST['day'];
					$tgym = $_POST['tgym'];
					$sql= "SELECT * FROM schedule where tgym='$tgym' AND  day='$day'";
					$result=mysql_query($sql);
					$count=mysql_num_rows($result);
					if($count<1)
					{
					echo('<font color="red">There is no schedule!</font>');
					echo'<meta content="5;adminschedule.php" http-equiv="refresh" />';
					}
					else
					{
					echo"<center>";
					echo"<br><br>";
					echo"<h2><u><center>".$day."&nbsp;&nbsp;".$tgym."</center></u></h2>";
echo "<table style='width:600px;height:50px;border-radius:10px;border-radius:10px;border:1px solid #336699' align='center'>
<tr>
<th bgcolor='#51a351'><font color='white'>No</th>
<th bgcolor='#51a351'><font color='white'>Trainer Name</th>
<th bgcolor='#51a351'><font color='white'>Start Time</th>
<th bgcolor='#51a351'><font color='white'>End Time</th>
</tr>";
$i=0;
while($row = mysql_fetch_array($result))
 
  {
  $i++;
  $dat=$row['day'];
  $tgym=$row['day'];
    $tgym=$row['tgym'];
  print ("<tr>");
  print ("<td style='text-align:center;'>" . $i. "</td>");
  print ("<td style='text-align:center;'>" . $row['trainername']. "</td>");
  print ("<td style='text-align:center;'>" . $row['tstart']. "</td>");
  print ("<td style='text-align:center;'>" . $row['tend']. "</td>");
  print ("</tr>");
  }
print( "</table>");
print( "<table><br>");
print ("<tr>");
print ("<td style='text-align:center;' colspan='4'></td>");
print ("<td style='text-align:right;' colspan='5'><b><i>Generated in:&nbsp;</i></b>" .$dat. "</td>");
print( "</table><br>");
echo"</center>";
}
}
mysql_close($conn);
?>
</td></tr></table> 
<br><br>
</td>
</tr>
<tr>
<td align="center" height="30px" style="border:1px solid #3366CC; background-color:black" colspan="2">
<font color="white" face="arial" size="2px">AMU &copy;&nbsp;2018&nbsp;All Copy Right Reserved     &nbsp;&nbsp;&nbsp;&nbsp;<a href="developer.php"> Developed by Infomation  Techonology Group 3 </a></font></td>
</tr>
</table>
</center>
</body>
</html>
