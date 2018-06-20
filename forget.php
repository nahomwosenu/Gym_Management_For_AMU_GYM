<?php   
 session_start();
 include("connection.php");
  //Reset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="image/logo.png"/>
<SCRIPT language='Javascript'>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/menu.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body style="background:url(image/background.jpg) repeat-x left top;">
<center>
<table style="border:1px solid #3366CC;border-radius:5px " width="900px">
<tr>
<td colspan="2" height="60px" bgcolor="#000000">
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php"><img src="image/logo.png" width="130px" height="120px"><img width="690px" height="120px" src="image/gym1.PNG" ></a>
<div id="Menus">		
		<ul>
			<li ><a href="index.php">Home</a></li>
			<li ><a href="about.php">About Us</a></li>
			<li ><a href="schedule.php">Schedule</a></li>
			<li ><a href="calendar.php">News and Events</a></li>
			<li><a href="contacts.php">Contact Us</a></li>
		    <li><a href="guidance.php">Guidance</a></li>
			<li><a href="help.php">Helps</a></li>
			<li ><a href="site.php">Site Map</a><li>
			<li class="active"><a href="login.php">Login</a></li>
		</ul>
</div>
</p>

</td>
</tr>
<tr>
<td id="hth" colspan="2" bgcolor="#eeeeee" height="200px" style="border:1px solid black;border-radius:5px ">
<img style="border-radius:5px" width="900px" height="300px" src="image/current.jpg">
</td>
</tr>
<tr>
<td valign="top" width="220px">
<table style="border:1px solid #3366CC;border-radius:5px" width="220px">
<tr>
<th bgcolor="black" style="border-radius:5px"><font color="white">Links</font></th>
</tr>
<tr><td><br></td></tr>
<tr><td></td></tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;
<a href="site.php">Site Map</a>
</td>
</tr>
<tr>
<td><img src="image/bullet.png" width="20px">&nbsp;
<a href="about.php">About Us</a>
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
<marquee bgcolor="#ffffff" behavior="scroll" direction="up" id="mymarquee">
<p>


Write Here...

</p>
</marquee>
</td></tr>
<tr><td>
<input type="button" class="button_example" value="Stop Marquee" onClick="document.getElementById('mymarquee').stop();">&nbsp;&nbsp;
<input  class="button_example" type="button" value="Start Marquee" onClick="document.getElementById('mymarquee').start();">
</td></tr>



<tr>
<td>
</td>
</tr>
<tr><td></td></tr>
</table>
</td>




<td valign="top" style="border:1px solid #3366CC;border-radius:5px ">
<br><br>
<p>
<!-- Main Content-->

<!--PHP script-->
<?php
 if(isset($_POST['view']))
  {
   $user=$_POST['user'];
   $phone=$_POST['phone'];
   $sql="SELECT * FROM member where username='$user' AND phone='$phone';"; 
   $result_set=mysql_query($sql,$conn);
   if(!$result_set)
   {
   die("Query failed".mysql_error());
   }
if(mysql_num_rows($result_set)>0)
{
while($row=mysql_fetch_array($result_set))
{
$fname=$row[1];
$password=$row[10];
echo"<p class='success'><img src='image/tick.png'>&nbsp;"."Hi"."&nbsp; &nbsp;".$fname."&nbsp; &nbsp;"."your password is:".$password."</p>";
echo'<meta content="10;login.php" http-equiv="refresh" />';

}}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="10;forget.php" http-equiv="refresh" />';
}
}
mysql_close($conn);
?>
  
<!--End of PHP-->
<form action="forget.php" method="POST">
<table class="log_table" align="center">
<tr bgcolor="#336699"><th colspan="2"><font color="#ffffff" style="text-decoration:blink;">Do You forget Your Password?</font></th></tr>
<tr>
<td>
<label>User Name</label>
</td>
<td>
<input type="text" name="user" title="username" required/>
</td>
</tr>
<tr>
<tr>
<td>
<label>Phone No.</label>
</td>
<td>
<input type="text" onKeyPress="return isNumberKey(event)" maxlength="13" name="phone" title="Phone Number" id="phone" required/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="view" value="View" class="button_example"/>&nbsp;&nbsp;
<input type="reset" value="Clear" class="button_example"/>
</td>
</tr>
</table>
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
