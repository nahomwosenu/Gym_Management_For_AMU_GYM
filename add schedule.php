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
<title>Add schedule</title>
<head>
<link rel="icon" href="image/logo.png"/>
<title>Tranier</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
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
			<li><a href=".php" >Generate Attendace</a></li>
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
<tr><td><br></td></tr>
</table>
<br><br>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><center><h3>Add Schedule!!!</h3></center></font>
<p>
<?php
 if(isset($_POST['ok']))
 {
$tgym=$_POST['tgym'];	 
$day=$_POST['day'];
$tstart=$_POST['tstart'];
$tend=$_POST['tend'];
$trainername=$_POST['trainername'];
$sql="INSERT INTO schedule(tgym,day,tstart,tend,trainername) VALUES
('$tgym','$day','$tstart','$tend','$trainername')";

if (!mysql_query($sql,$conn))
  {
         echo'  <p class="wrong">Already Registered</p>';
  die('Error: '.'Already Exist'.mysql_error());
  }
  else
  {
	  
echo'<center> <p class="success"> Schedule Add successfull!</p></center>';                                
		   echo' <meta content="6;add schedule.php" http-equiv="refresh" />';	
}}
mysql_close($conn)
?>  

<table class="log_table" align="center" >
<form action="add schedule.php" method="post" onsubmit='return formValidation()'>
<tr bgcolor="#336699" ><th colspan="2" ><font color="#ffffff">Schedule Form </font><a href="trainer.php"><img align="right"src="image/clos.png" title="close"></a></th></tr>
<tr>
<td><br>
</td>
<td>
</td>
</tr>
<td>
<font color="red">*</font><label>Gym Type</label>
</td>
<td>
<select name="tgym" required>
<option value="erobics">Areobics</option>
<option value="volleyball">VolleyBall</option>
<option value="bodymass">BodyMass</option>
<option value="fitteness">Fitteness</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Day</label>
</td>
<td>
<select name="day" required />
<option value="monday">Monday</option>
<option value="tuesday">Tuesday</option>
<option value="wednesday">Wednesday</option>
<option value="thursday">Thursday</option>
<option value="friday">Friday</option>
<option value="saturday">Saturday</option>
<option value="sunday">Sunday</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Start Time</label>
</td>
<td>
<select name="tstart" required>
<option value="1:00 AM">1:00 AM</option>
<option value="2:00 AM">2:00 AM</option>
<option value="3:00 AM">3:00 AM</option>
<option value="4:00 AM">4:00 AM</option>
<option value="5:00 AM">5:00 AM</option>
<option value="6:00 AM">6:00 AM</option>
<option value="7:00 AM">7:00 AM</option>
<option value="8:00 AM">8:00 AM</option>
<option value="9:00 AM">9:00 AM</option>
<option value="10:00 AM">10:00 AM</option>
<option value="11:00 AM">1100 AM</option>
<option value="12:00 AM">12:00 AM</option>
<option value="12:00 PM">12:00 PM</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>End Time</label>
</td>
<td>
<select name="tend" required>
<option value="1:00 AM">1:00 AM</option>
<option value="2:00 AM">2:00 AM</option>
<option value="3:00 AM">3:00 AM</option>
<option value="4:00 AM">4:00 AM</option>
<option value="5:00 AM">5:00 AM</option>
<option value="6:00 AM">6:00 AM</option>
<option value="7:00 AM">7:00 AM</option>
<option value="8:00 AM">8:00 AM</option>
<option value="9:00 AM">9:00 AM</option>
<option value="10:00 AM">10:00 AM</option>
<option value="11:00 AM">1100 AM</option>
<option value="12:00 AM">12:00 AM</option>
</select>
</td>
</tr>
<tr>
<td>
<font color="red">*</font><label>Trainer Name</label>
</td>
<td>
<input type="text" name="trainername" required/>
</td>
</tr>
<td>
<center>
<input type="submit" name="ok" value="Add" class="button_example"/>
<input type="reset" value="Cancel" class="button_example"/></center>
</td>
</tr>
<tr>
<td><br>
</td>
<td>
<font color="red">*</font> is Manadatory Field.
</td>
</tr>
</form>
</table>
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
