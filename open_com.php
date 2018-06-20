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
		<ul>
			<li ><a href="admin.php">Home</a></li>
			<li ><a href="record.php">Genrate Attendace Report</a></li>
			<li class ="active"><a href="view_main't requested.php">Maintenance Requested</a></li>
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
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="create.php">Register Equipement</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="edit.php">Edit Equipement</a></td>
</tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>From Gym Trainer!</h3></center></font>
<p>
<!-- Main Content-->
<br>
<?php
$ctrl=$_REQUEST['key'];
$query="SELECT * FROM maintenance where m_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Station is not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r1=$row['m_id'];
$r2=$row['fname'];
$r3=$row['email'];
$r4=$row['eq'];
$r5=$row['message'];
$status=$row['status'];
$time=$row['date'];
}
?>
  <form id="form1" method="POST" action="open_com.php"  onsubmit='return formValidation()'>

 <table valign='top' align="center" style="border-radius:5px;border:1px solid #336699">
 <tr>
 </tr>
<tr>
<input type='hidden' name='m_id' value="<?php echo $r1;?>">
<input type='hidden' name='status' value="<?php echo $status;?>">
<tr><td>From:</td><td><?php echo $r2;?></td></tr>
<tr><td>Email:</td><td><?php echo $r3;?></td></tr>
<tr><td>Equipment Name:</td><td><?php echo $r4;?></td></tr>
<tr><td>Content:</td><td><textarea cols="25px" rows="10px" readonly><?php echo $r5;?></textarea></td></tr>
<tr><td colspan='2' align='center'><input type='submit' name='update' value='Ok' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
				$status=$_POST['status'];
				$c_id=$_POST['m_id'];
  $update = mysql_query("update maintenance set status='read'
  WHERE m_id='{$c_id}'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {
echo "<script>window.location='view_main't requested.php';</script>";
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
