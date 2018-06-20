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
    alert(window.location='editequipment.php');
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
			<li ><a href="report.php">Genrate Report</a></li>
			<li ><a href="view_comment1.php">Main't Requested</a></li>
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
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>System Administrator</h3></center></font>
<p>
<!-- Main Content-->
Home Us page......

<?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM equipmenet where e_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Equipement is not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['e_id'];
$r1=$row['ename'];
$r2=$row['vendor'];
$r4=$row['phone'];
$r5=$row['Etype'];
}
?>
  <form id="form1" method="POST" action="editeq.php"  onsubmit='return formValidation()'>

 <table valign='top' align="center" style="border-radius:5px;border:1px solid #336699">
 <tr>
 <th colspan="2" bgcolor="#336699"><font color="white">Edit Equipement</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editequipment.php" title="Close"><img src="image/close_icon.gif"></a></th>
 </tr>
<tr>
<tr><td>Equipment Profile: </td><td><img src="<?php echo 'img/'.$r6;  ?>" width='300'/></td></tr>
<tr><td>Equipment Name:</td><td><input type='text' name='ename' id='ename' value="<?php echo "$r1"?>"></td></tr><input type='hidden' name='e_id' id='ename' value="<?php echo "$r0"?>">
<tr><td>Vendor/company:</td><td><input type='text' name='vendor' id='vendor' value="<?php echo "$r2"?>"></td></tr>
<tr><td>Phone:</td><td><input  type='text' name='phone'  id='phone' value="<?php echo "$r4"?>"></td></tr>
<tr><td>Equipment Type  :</td><td><input type='text' name='Etype' id='Etype'  value="<?php echo "$r5"?>"></tr></td>
<tr><td>Profile: </td><td><input type="file" name="file"></td></tr>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
	            $ename=$_POST['ename'];
				$vendor=$_POST['vendor'];
				$user_id=$_POST['user_id'];
				$phone=$_POST['phone'];
				$Etype=$_POST['Etype'];
				$e_id=$_POST['e_id'];
  $update = mysql_query("update equipmenet set ename='$ename',vendor='$vendor',user_id='$user_id', phone='$phone',Etype='$Etype'
  WHERE e_id='{$e_id}'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {
 echo "<script>window.location='editequipment.php';</script>";
 
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
