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
<title>Registrar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">

<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="registrar.php"></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="registrar.php">Home</a></li>
			<li><a href="view_comment.php">Comment</a></li>
			<li><a href="logout.php" >Logout</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="200px" src="image/2011-01-01 03.18.03-1.JPG">
</td>
</tr>
<tr>
<td valign="top" width="200px">
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Tasks</font></th>
</tr>
<tr>
<td>  <table border="0">
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="add_department.php">Add Department</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="add_schedule.php">Add Schedule</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="update_schedule.php">Update Schedule</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="add_room.php">Add Room</a></td>
</tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
<tr>
<th bgcolor="#000000" style="border-radius:5px"><font color="white">Additional Links</font></th>
</tr>
<tr><td></td></tr>
<tr>
<td>
<img src="image/bullet.png" width="20px">&nbsp;<a href="r_calendar.php">Academic Calendar</a>
</td>
</tr>
<tr>
<td>
<img src="image/bullet.png" width="20px">&nbsp;<a href="r_schedlu.php">Class Schedule</a>
</td>
</tr>
<tr>
<td>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>




<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Registrar!</h3></center></font>
<p>
<!-- Main Content-->
<?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM department where d_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Department not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['d_id'];
$r1=$row['dname'];
$r2=$row['dhead'];
$r3=$row['college'];
}
?>
  <form id="form1" method="POST" action="editdept.php"  onsubmit='return formValidation()'>

 <table valign='top' align="center" style="border-radius:5px;border:1px solid #336699">
 <tr>
 <th colspan="2" bgcolor="#336699"><font color="white">Edit Department Information</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="view_dept.php" title="Close"><img src="image/close_icon.gif"></a></th>
 </tr>
<tr>
<tr><td>Dept.Name:</td><td><input type='text' name='dname' id='dname' value="<?php echo "$r1"?>"></td></tr><input type='hidden' name='d_id' id='d_id' value="<?php echo "$r0"?>">
<tr><td>Dept.Head:</td><td><input type='text' name='dhead' id='dhead' value="<?php echo "$r2"?>"></td></tr>
<tr><td>College:</td><td><input  type='text' id='college' name='college' value="<?php echo "$r3"?>"></td></tr>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
	            $dname=$_POST['dname'];
				$dhead=$_POST['dhead'];
				$college=$_POST['college'];
				$d_id=$_POST['d_id'];
  $update = mysql_query("update department set dname='$dname',dhead='$dhead',college='$college'
  WHERE d_id='{$d_id}'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {
 // echo' <meta content="6;view_dept.php" http-equiv="refresh" />';
 echo "<script>window.location='view_dept.php';</script>";
 
  }}
  ?>
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
