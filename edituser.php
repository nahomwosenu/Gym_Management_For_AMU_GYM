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
<title>Edit User Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='edit.php');
   }
   else
   {
   return false;
    
   }
  }
  </script>
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
			<li ><a href="view_main't requested.php">Main't Requested</a></li>
			<li ><a href="newsand.php">Post News and Events</a></li>
			<li><a href="logout.php" onClick="isConfirmlog();">Logout</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="300px" src="image/banner.jpg">
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
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
</table>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>System Administrator</h3></center></font>
<p>
<!-- Main Content-->
Home Us page......
<?php
$ctrl=false;
if(isset($_GET['key'])) {
    $ctrl = $_GET['key'];
    $_SESSION['key']=$ctrl;
}
else $ctrl=$_SESSION['key'];

$query="SELECT * FROM member where member_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("user not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['member_id'];
$r1=$row['fname'];
$r2=$row['lname'];
$r4=$row['phone'];
$r5=$row['user_type'];
$r6=$row['username'];
$r7=$row['password'];
$r8=$row['profile'];
}
?>
  <form id="form1" method="POST" action="edituser.php"  onsubmit='return formValidation()' enctype="multipart/form-data">

 <table valign='top' align="center" style="border-radius:5px;border:1px solid #336699">
 <tr>
 <th colspan="2" bgcolor="#336699"><font color="white">Edit User Account</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edit.php" title="Close"><img src="image/close_icon.gif"></a></th>
 </tr>
<tr>
  <tr><td>Your Current Profile: </td><td><img src="<?php echo 'img/'.$r8;  ?>" width='300'/></td></tr>
<tr><td>First Name:</td><td><input type='text' name='fname' id='fname' value="<?php echo "$r1"?>"></td></tr><input type='hidden' name='member_id' id='fname' value="<?php echo "$r0"?>">
<tr><td>Last Name:</td><td><input type='text' name='lname' id='lname' value="<?php echo "$r2"?>"></td></tr>
<tr><td>phone:</td><td><input  type='text' name='phone'  id='phone' value="<?php echo "$r4"?>"></td></tr>
<tr><td>User Type  :</td><td><input type='text' name='utype' id='utype'  value="<?php echo "$r5"?>"></tr></td>
<tr><td>Username:</td><td><input type='text' name='username' id='username' value="<?php echo "$r6"?>"></tr></td>
<tr><td>Password:</td><td><input type='text' name='password' id='password' value="<?php echo "$r7"?>"></tr></td>
<tr><td>Profile: </td><td><input type="file" name="file"></td></tr>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
	            $fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$phone=$_POST['phone'];
				$user_type=$_POST['utype'];
				$password=$_POST['password'];
				$username=$_POST['username'];
				$member_id=$_POST['member_id'];
        $profile="";

        if(isset($_FILES['file']['name'])){
          $profile=$_FILES['file']['name'];
          move_uploaded_file($_FILES['file']['tmp_name'], 'img/'.$profile);
          $update2="update member set profile='$profile' where member_id='$member_id'";
          mysql_query($update2);
        }
  $update = mysql_query("update member set fname='$fname',lname='$lname', phone='$phone',user_type='$user_type',username='$username' 
	,password='$password'
  WHERE member_id='{$member_id}'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {
 echo "<script>window.location='edit.php';</script>";
 
  }}
  ?>
  </form> 
<br><br><br><br>  
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
