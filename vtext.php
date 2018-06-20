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
<title>Gym Trainee Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">

<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="trainee.php"><img src="image/logo.png" width="110px" height="100px"><img width="700px" height="100px" src="image/trainee.png" ></a>
<div id="Menus">		
		<ul>
			<li class="active"><a href="trainee.php">Home</a></li>
			<li ><a href="notification.php">Notification</a></li>
			<li><a href="feedback.php">feedback</a></li>
			<li><a href="logout.php" >Logout</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="200px" src="image/trainer.JPG">
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
<img src="image/bullet.png" width="20px">&nbsp;<button onclick="myFunction()" class="dropbtn">View Trainning</button>
  <div id="myDropdown" class="dropdown-content">
   <a href="vtext.php">Text</a>
    <a href="vaudio.php">Audio</a>
    <a href="vvideo.php">Video</a>
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
<td><img src="image/bullet.png" width="20px">&nbsp;<a href="changepassword.php">Change Password</a></td>
</tr>
</table>  </td>
</tr>
<tr><td><br></td></tr>
</table>
<br><br>
</td>
<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<font color="#336699"><h3>Guidance Material for Gym Trainee!</h3></font>
<p>
<!-- Main Content-->
<table >
				<tr><?php
				$query=mysql_query("select * from training ORDER BY t_id DESC")or die(mysql_error());
				$count=mysql_num_rows($query);
				if ($count==0)
				{
				echo'<p class="wrong">Empty!</p>';
				}
				while($row=mysql_fetch_array($query)){
				$title=$row['title'];
				$ctrl = $row['t_id'];
				$location=$row['location'];
				?>
				
					<td><?php echo"<a onclick='isdelete();' href ='deletepic.php?key=".$ctrl."'>";?></a>&nbsp;&nbsp;</td><td></font></td><td><td><font size="3px"><?php echo $title;?></font></td>
				<?php print ("<td><font size='3px'>" ."<a href='$location'>View</a>". "</td>");
				?></tr>
		
	<?php 	}
	?>
		</table>
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
