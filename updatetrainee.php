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
<title>Trainer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
<script>
  function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='updatetrainee.php');
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
			<li><a href="comment.php">Main't Request</a></li>
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
<tr><td><br></td></tr>
</table>
<br><br>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Update Trainee!</h3></center></font>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<form action="resultsearch.php" method="get">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="term" placeholder="search for name" required> <input type="submit" name="search" value="Search">
</form></p>
<!-- Main Content-->
<table align='center' style='border-radius:15px;border:1px solid #336699; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4);'>
<tr>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Full Names&nbsp;&nbsp;&nbsp;</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>Profile&nbsp;&nbsp;&nbsp;</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>&nbsp;&nbsp;Phone No.&nbsp;&nbsp;&nbsp;</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Work Type&nbsp;&nbsp;&nbsp;</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>&nbsp;&nbsp;Username&nbsp;&nbsp;&nbsp;</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>&nbsp;&nbsp;Delete&nbsp;&nbsp;</th>
<th style='height:30px;	color:#000;	font-weight:bold;background-color:#336699;'><font color='white' size='2'>&nbsp;&nbsp;Edit</th>
</tr> 
<?php
$result = mysql_query("SELECT * FROM member where worktype='student' or worktype='staff' or worktype='guest' or worktype='community'");
while($row = mysql_fetch_array($result))
  {
$ctrl = $row['member_id'];
$_SESSION['member_id']=$ctrl;
$fname=$row['fname'];
$profile=$row['profile'];
$lname=$row['lname'];
$phone=$row['phone'];
$worktype=$row['worktype'];
$username=$row['username'];
$password=$row['password'];
?>
<tr>
<td><?php echo $fname."&nbsp;".$lname;?></td>
<td><img src="<?php echo "img/".$profile; ?>" width="70" height="50" /></td>
<td><?php echo $phone;?></td>
<td><?php echo $worktype;?></td>
<td><?php echo $username;?></td>
<td><?php echo $password;?></td>	
						<?php
						print("<td style='height:30px;' align = 'center' width = '1'><a href = 'deletetrainee.php?key=".$ctrl."'><img width='15px' height='15px' src = 'image/actions-delete.png' title='Delete' onclick='isdelete();'></img></a></td>
		<td style='height:30px;'><a href = 'edittrain.php?key=".$ctrl."'><img src = 'image/actions-edit.png' width='15px' height='15px' title='Edit' ></img></a></td>
		");?>

		</tr>
<?php
  }
print( "</table>");
mysql_close($conn);
?>


<!--End of main content-->
</td>
</tr>
<tr>
<td align="center" height="30px" style="border:1px solid #3366CC; background-color:black" colspan="2">
<font color="white" face="arial" size="2px">AMU &copy;&nbsp;2018 bsp;All Copy Right Reserved</font></td>
</tr>
</table>
</center>
</body>
</html>
