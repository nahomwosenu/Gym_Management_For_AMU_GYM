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
<title>Edit Trainee Account</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='update schedule.php');
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="trainer.php"><img src="image/logo.png" width="110px" height="100px"><img width="700px" height="100px" src="image/trainer.png" ></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="trainer.php">Home</a></li>
			<li><a href="attendance.php" >Take Attendace</a></li>
			<li><a href="record.php" >Generate Attendace</a></li>
			<li><a href="maintenance.php">Main't Request</a></li>
			<li><a href="view_feedback.php">View Comments</a></li>
			<li><a href="cpayement.php">Check Payement</a></li>
			<li><a href="logout.php" >Logout</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="250px" src="image/trainer.JPg">
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
<link href="css/stylesheet1.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div class="dropdown">
<img src="image/bullet.png" width="20px">&nbsp;<button onclick="myFunction()" class="dropbtn">Post Trainning</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="text.php">Text</a>
    <a href="audio.php">Audio</a>
    <a href="video.php">Video</a>
  </div>
</div>

<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
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
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="updatetraining.php">Update Training</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="apo_change.php">Change Password</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="createtrainee.php">Create Trainee Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="updatetrainee.php">Edit Trainee Account</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="apo_change.php">view paid trainee</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="add schedule.php">Add Schedule</a></td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="update schedule.php">Update Schedule</a></td>
</tr>
</table>  </td>
</tr>
</table>
<br><br>
<table style="border:1px solid #3366CC;border-radius:5px" width="200px">
</table>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Trainer page!!!</h3></center></font>
<p>

<?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM schedule where s_id='{$ctrl}'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("Schedule not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row['s_id'];
$r1=$row['tgym'];
$r2=$row['day'];
$r3=$row['tstart'];
$r4=$row['tend'];
$r5=$row['trainername'];
}
?>
  <form id="form1" method="POST" action="editschedule.php"  onsubmit='return formValidation()'>

 <table valign='top' align="center" style="border-radius:5px;border:1px solid #336699">
 <tr>
 <th colspan="2" bgcolor="#336699"><font color="white">Edit Schedule</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="update schedule.php" title="Close"><img src="image/close_icon.gif"></a></th>
 </tr>
<tr>
<tr><td>Gym Type:</td><td>
  <select name='tgym'>
    <option value="<?php echo "$r1"?>"><?php echo "$r1" ?></option>
	 <option value="<?php echo "$r2"?>"><?php echo "$r2" ?></option>
	  <option value="<?php echo "$r3"?>"><?php echo "$r3" ?></option>
	   <option value="<?php echo "$r4"?>"><?php echo "$r4" ?></option>
	
  </select>
  <input type='text' name='tgym' id='tgym' value="<?php echo "$r1"?>"></td></tr><input type='hidden' name='s_id' id='tgym' value="<?php echo "$r0"?>">
<tr><td>Day:</td><td><input type='text' name='day' id='day' value="<?php echo "$r2"?>"></td></tr>
<tr><td>Start Time:</td><td><input  type='text' id='tstart' name='tstart' value="<?php echo "$r3"?>"></td></tr>
<tr><td>End Time:</td><td><input  type='text' name='tend'  id='tend' value="<?php echo "$r4"?>"></td></tr>
<tr><td>Trainer Name :</td><td><input type='text' name='trainername' id='trainername'  value="<?php echo "$r5"?>"></tr></td>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
</table>
 <?php
}
	  

?>
 
 <?php
  if(isset($_POST['update']))
  {
	            $tgym=$_POST['tgym'];
				$day=$_POST['day'];
				$tstart=$_POST['tstart'];
				$tend=$_POST['tend'];
				$trainername=$_POST['trainername'];
				$s_id=$_POST['s_id'];
  $update = mysql_query("update schedule set tgym='$tgym',day='$day',tstart='$tstart',tend='$tend',trainername='$trainername'
  WHERE s_id='{$s_id}'") or die(mysql_error());
  if(!$update)
  {
  echo"Error".die(mysql_error());
  }
  else
  {
 echo "<script>window.location='update schedule.php';</script>";
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
